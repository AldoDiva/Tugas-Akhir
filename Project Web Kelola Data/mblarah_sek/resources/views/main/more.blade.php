@extends('source/master')

@section('content')
<!-- Main Content-->
<div class="container">
    <div class="row">
        
        <div class="col-md-4 col-lg-6 col-sm-6 pl-5 pb-5 pt-2">
            <div class="card border-0 shadow rounded-3 overflow-hidden fit-content w-100">
                <img src="{{ Storage::url($situs->gambar1)}}" style="height:20rem;">
                <h4 class="pl-4"><b>{{("$situs->nama")}}</b></h4>
                <p class="pl-4">{{("$situs->alamat")}}</p>
               
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
@endsection

  