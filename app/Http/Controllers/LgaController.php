<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\PollingUnit;
use Illuminate\Http\Request;
use App\Models\AnnouncedPuResult;
use Illuminate\Support\Facades\DB;

class LgaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $all_lga = DB::table('lga')->get();
        $pu = DB::table('polling_units')->get();
        return view('lga.display')->with(['pu'=>$pu,'all_lga'=>$all_lga]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function sum(Request $request)
   {
       $request->validate([
           "lga" => ['required']
       ]);

       $lga_id = $request->lga;
       $lga = Lga::where("lga_id", $lga_id)->first();
       $all_lga = DB::table('lga')->get();

       $sumPuResult = $this->getSumTotal($lga_id);

       $data =
           [
               "lga" => $lga,
               "all_lga" => $all_lga,
               "sumPuResult" => $sumPuResult
           ];

       return view('lga.display', $data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return array
     */
    public function getSumTotal(int $lga_id)
    {
        $pu = PollingUnit::where("lga_id", $lga_id)->get();

        $sumPuResult = [
            "PDP" => 0,
            "DPP" => 0,
            "ACN" => 0,
            "PPA" => 0,
            "CDC" => 0,
            "JP"  => 0,
            "ANPP" => 0,
            "LABO" => 0,
            "CPP" => 0
        ];


        foreach ($pu as $item)
        {
            $puResults = AnnouncedPuResult::where("polling_unit_uniqueid", $item->uniqueid)->get();

            foreach ($puResults as $itemResult)
            {

                switch($itemResult->party_abbreviation)
                {
                    case ("PDP"):
                        $sumPuResult["PDP"] = $sumPuResult["PDP"]+$itemResult->party_score;
                        break;

                    case ("DPP"):
                        $sumPuResult["DPP"] = $sumPuResult["DPP"]+$itemResult->party_score;
                        break;

                    case ("ACN"):
                        $sumPuResult["ACN"] = $sumPuResult["ACN"]+$itemResult->party_score;
                        break;

                    case ("PPA"):
                        $sumPuResult["PPA"] = $sumPuResult["PPA"]+$itemResult->party_score;
                        break;

                    case ("CDC"):
                        $sumPuResult["CDC"] = $sumPuResult["CDC"]+$itemResult->party_score;
                        break;

                    case ("JP"):
                        $sumPuResult["JP"] = $sumPuResult["JP"]+$itemResult->party_score;
                        break;

                    case ("ANPP"):
                        $sumPuResult["ANPP"] = $sumPuResult["ANPP"]+$itemResult->party_score;
                        break;

                    case ("LABO"):
                        $sumPuResult["LABO"] = $sumPuResult["LABO"]+$itemResult->party_score;
                        break;

                    case ("CPP"):
                        $sumPuResult["CPP"] = $sumPuResult["CPP"]+$itemResult->party_score;
                        break;
                }

            }

        }

        return $sumPuResult;
    }

}
