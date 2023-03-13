@extends('layouts.app')
@section('content')
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- Main Content -->
            <div class="container" style="padding-top: 80px;">
                <section class="section">
                    <div class="section-body">

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <div><a  href="{{ route('pollingunits.create') }}"><button class="btn btn-success">Add New Result</button></a></div>
                        </div>
                        <h4>{{env('APP_NAME')}} (All Polling Units in )</h4>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                     <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Polling Unit ID</th>
                                                    <th>Ward ID</th>
                                                    <th>LGA ID</th>
                                                    <th>Polling Unit Number</th>
                                                    <th>Polling Unit Name</th>
                                                    <th>Polling Unit Description</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pu as $item)
                                                    <tr>
                                                        <td>{{$item->uniqueid}}</td>
                                                        <td>{{$item->ward_id}}</td>
                                                        <td>{{$item->lga_id}}</td>
                                                        <td>{{$item->polling_unit_number}}</td>
                                                        <td>{{$item->polling_unit_name}}</td>
                                                        <td>{{$item->polling_unit_description}}</td>
                                                        <td>
                                                            <a href="{{ route('pollingunits.show',$item->uniqueid) }}">
                                                                <button class="btn btn-success">View Results</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div class="text-center">
                                                <ul class="pagination">
                                                    {!! $pu->withQueryString()->links('pagination::bootstrap-5') !!}
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </div>
    </div>

@stop
