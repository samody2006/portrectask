@extends('layouts.app')
@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <div><h1 class="h3 mb-0 text-gray-800">Create New Polling Unit Results</h1></div>
     @if(session('success'))
         <h3>{{session('success')}}</h3>
     @endif
    </div>
   <div class="container">
     <div class="row justify-content-left">
        <div class="col-md-6">
            <div class="card">
               <div class="card-header">{{ __('Enter new result')}}
               </div>


               <div class="card-body">
                   <form action="{{route('pollingunits.store')}}" method="POST" class="was-validated">
                       @csrf
                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                           <div class="card">

                               <div class="body">

                                   <div class="row g-3">
                                       <div class="col">
                                           <input type="text" class="form-control" name="entered_by_user"  value="{{old('entered_by_user')}}" required>
                                           <label class="form-label">Username</label>
                                       </div>

                                       <div class="col">
                                           <input type="number" class="form-control" name="polling_unit_uniqueid"  value="{{old('polling_unit_uniqueid')}}" required >
                                           <label class="form-label">Polling Unit Number</label>
                                       </div>
                                   </div>

                                   <div class="row g-3">
                                       <div class="col">
                                           <div class="form-line ">
                                               <label>Select Party</label>
                                               <select name="party_abbreviation"  required>
                                                   <option>Select Party</option>
                                                   <option value="PDP">PDP</option>
                                                   <option value="DDP">DDP</option>
                                                   <option value="ACN">ACN</option>
                                                   <option value="PPA">PPA</option>
                                                   <option value="CDC">CDC</option>
                                                   <option value="JP">JP</option>
                                                   <option value="ANPP">ANPP</option>
                                                   <option value="LABO">LABOUR</option>
                                                   <option value="CPP">CPP</option>
                                               </select>
                                           </div>
                                       </div>
                                       <div class="col">
                                           <input type="number" class="form-control" name="party_score" value="{{old('party_score')}}" required >
                                           <label class="form-label">Score</label>
                                       </div>
                                   </div>
                                   <div class="row g-3">
                                       <div class="col">
                                           <a href="{{route('pollingunits.index')}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
                                                    <span>BACK</span>
                                           </a>
                                       </div>
                                       <div class="col">
                                           <button type="submit" class="btn btn-success btn-lg m-t-15 waves-effect">
                                            <span>SAVE</span>
                                           </button>
                                       </div>
                                   </div>
                               </div>


                               </div>
                           </div>
                       </div>
                               </form>
                </div>
            </div>
        </div>


@endsection
