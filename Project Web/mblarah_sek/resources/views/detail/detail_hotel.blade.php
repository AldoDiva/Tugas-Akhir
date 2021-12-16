@extends('source/master')

@section('content')
<!-- Main Content-->

<style>/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-color: #708090;
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;

}
</style>

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="3500">
            <img src="{{ Storage::url($hotel->gambar1)}}" style="height:25rem;" class="d-block w-100" alt="gambar">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{("$hotel->nama")}}</h5>
                <p>{{("$hotel->alamat")}}</p>
            </div>
        </div>
        <div class="carousel-item" data-interval="3500">
            <img src="{{ Storage::url($hotel->gambar2)}}" style="height:25rem;" class="d-block w-100" alt="gambar">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{("$hotel->nama")}}</h5>
                <p>{{("$hotel->alamat")}}</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ Storage::url($hotel->gambar3)}}" style="height:25rem;" class="d-block w-100" alt="gambar">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{("$hotel->nama")}}</h5>
                <p>{{("$hotel->alamat")}}</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ Storage::url($hotel->gambar4)}}" style="height:25rem;" class="d-block w-100" alt="gambar">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{("$hotel->nama")}}</h5>
                <p>{{("$hotel->alamat")}}</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ Storage::url($hotel->gambar5)}}" style="height:25rem;" class="d-block w-100" alt="gambar">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{("$hotel->nama")}}</h5>
                <p>{{("$hotel->alamat")}}</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">

</div>
@endsection
