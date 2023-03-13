@extends('layouts.app')
@section('title', 'Homepage')
@section('content')

    <div class="container">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                All LGA Results Under Delta State With State ID 25
            </div>
            <br>

                        <div class="form-group">
                            @if ($all_lga)
                                <form method="POST" action="{{ route('lgaresults') }}">
                                    @csrf
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <label for="lga">Select the LGA Results you want  </label>
                                            <select id="lga" name="lga" class="form-control">
                                                <option selected value="">select lga</option>
                                                @foreach ($all_lga as $item)
                                                    <option value="{{ $item->lga_id}}" key="">
                                                        {{ $item->lga_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('lga')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-success">
                                                {{ __('Check Results') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>

            <br>
            @if(isset($sumPuResult) && count($sumPuResult) > 0)
                <div style="width:100%">

                    @if($lga)
                        <h2 class="font-black my-10 text-2xl">Sum Total of Polling Results for {{$lga->lga_name}}</h2>
                    @endif
                        <div class="row">
                            <div class="row-cols-lg-4">
                                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                        <thead>
                        <tr >
                            <th class="text-left">Party</th>
                            <th class="text-left">Party Score</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($sumPuResult as $index => $sumPuResults)
                            <tr>
                                <td >{{$index}}</td>
                                <td  >{{$sumPuResults}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>
@endsection
