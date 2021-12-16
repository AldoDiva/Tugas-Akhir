@extends('source/master')
@extends('source/template')
@section('content')

<div class="card-body">
    <div class="card px-2 pb-2 pt-2">
       
        <div class="card">
            <div class="table-responsive">
                <table class="table">

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">created_at</th>
                                    <th scope="col">Action</th>
                                    


                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($reports as $report)
                                    <tr>
                                        <td>{{ $report->id }}</td>
                                        <td>{{ $report->nama }}</td>
                                        <td>{{ $report->isi}}</td>
                                       
                                        <td>{{substr("$report->created_at",0,10)}}</td>
                                        <td>
                                           
                                                    
                                        <div><a href="javascript:void(0)" class="btn btn-danger delete" data-id="{{ $report->id }}">Delete</a></div>
                                                
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                        </table>
                    </div>
            </div>
        </div>
    </div>


@endsection