@extends('layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-blue-800">Individual Polling Units Results </h1>
    </div>
    <div class="row">
        <div class="row-cols-lg-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <thead>
                            <tr>
                                <th>Party Name</th>
                                <th>Party Score</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($announcedpuresults as $announcedpuresult)
                                <tr>
                                    <td>{{ $announcedpuresult->party_abbreviation }}</td>
                                    <td>{{ $announcedpuresult->party_score }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('pollingunits.index') }}" ><button class="btn btn-success">Back</button></a>
    </div>
    </div>
        </div>
    </div>


@endsection

