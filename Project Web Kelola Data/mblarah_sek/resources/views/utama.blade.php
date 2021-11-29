@extends('source/master')

@section('content')


<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-3 px-lg-2" style="text-align:right;">
        <a class="navbar-brand " href="{{url('/')}}">MBLARAH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex align-items-center justify-content-between px-2">
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link pl-5 py-3 py-lg-4" href="{{('/')}}">
                            <h5>HOME</h5>
                        </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{('hotel')}}">
                            <h5>HOTEL</h5>
                        </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{('food')}}">
                            <h5>FOODS</h5>
                        </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{('pray')}}">
                            <h5>PRAY PLACE</h5>
                        </a></li>

                </ul>

                @if(Auth::guest())
                <a href="{{ url('user-login')}}" style="padding-left:5rem;"> <button
                        class="btn btn-primary">Login</button></a>
                @else

                <a class="nav-link text-white" style="padding-left:8rem; " href="{{url('dashboard')}}">
                    <h5> Welcome: {{ ucfirst(Auth()->user()->first_name) }} </h5>
                </a>


                <a class="nav-link" href="{{ url('logout') }}"> <button class="btn btn-secondary">Logout</button></a>

                @endif

            </div>
        </div>
</nav>

<!-- Page Header-->

<div>

    <div id="bgLayers_comp-ja9fwivk" data-hook="bgLayers" class="_3wnIc pb-4">
        <div id="bgMedia_comp-ja9fwivk" class="_2GUhU">
            <wix-video id="videoContainer_comp-ja9fwivk" class="_3hRfg bgVideo _1PtAB"><video id="comp-ja9fwivk_video"
                    class="_3vVMz" role="presentation" crossorigin="anonymous" playsinline="" preload="auto" muted=""
                    autoplay="" tabindex="-1" width="100%" height="100%"
                    src="https://video.wixstatic.com/video/11062b_b109368ac4264b688d21b3e361372fb1/1080p/mp4/file.mp4"
                    style="width: 94rem; height: 20rem; object-fit: cover; object-position: center center; opacity: 1;"></video>

            </wix-video>

        </div>
    </div>
</div>


<!-- Main Content-->
<div class="container">
    <div class="row">
        @foreach ($situses as $situs)
        <div class="col-md-4 col-lg-6 col-sm-6 pl-5 pb-5 pt-2">
            <div class="card border-0 shadow rounded-3 overflow-hidden fit-content w-100">
                <img src="{{ Storage::url($situs->gambar1)}}" style="height:20rem;">
                <h4 class="pl-4"><b>{{("$situs->nama")}}</b></h4>
                <p class="pl-4">{{("$situs->alamat")}}</p>
                <a class="nav-link" href="{{route('more',$situs->id)}}"> <button class="btn btn-secondary">Detail</button></a>
            </div>
        </div>
        @endforeach
    </div>
</div>


    {!! $situses->links('vendor.pagination.bootstrap-4') !!}

    @endsection
