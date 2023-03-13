<?php

namespace App\Http\Controllers;

use App\Models\AnnouncedPuResult;
use App\Models\PollingUnit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pu = PollingUnit::paginate(20);
        return view('pollingunits.display', compact('pu'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Request $request)
    {
        return view('puresults.create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newpuresults = AnnouncedPuResult::create([
            'polling_unit_uniqueid' => $request->polling_unit_uniqueid,
            'party_abbreviation' => $request->party_abbreviation,
            'party_score' => $request->party_score,
            'entered_by_user' => $request->entered_by_user,
            'date_entered' => Carbon::now(),
            'user_ip_address' => $request->ip(),

        ]);
        return redirect()->back()->withSuccess('Results Added Successfully!');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($uniqueId)
    {
        $announcedpuresults = AnnouncedPuResult::Where('polling_unit_uniqueid', $uniqueId)->get();
        return view('pollingunits.single', compact('announcedpuresults'));
    }


}

