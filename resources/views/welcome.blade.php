@extends('layouts.app')
@section('title', 'Homepage')
@section('content')

    <div class="container">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        Welcome to Portrec INEC result page
        </div>
        <br>
            <div class="row">
                <div class="col">
                    <a  href="{{ route('pollingunits.index') }}"><button type="button" class="btn btn-outline-success btn-lg">Task 1 Route</button></a>
                </div>
                <div class="col">
                    <a href="{{ route('lga.index') }}"><button type="button" class="btn btn-outline-success btn-lg">Task 2 Route</button></a>
                </div>
                <div class="col">
                    <a  href="{{ route('pollingunits.create') }}"><button  type="button" class="btn btn-outline-success btn-lg">Task 3 Route</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection
