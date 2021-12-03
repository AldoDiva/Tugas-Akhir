@extends('source/master')

@section('content')
<!-- Main Content-->
<meta property="og:url"           content="{{route('detail_situs',$situs->id)}}"/>
<meta property="og:type"          content="website"/>
<meta property="og:title"         content="Mlaku Mlaku Belajar Sejarah"/>
<meta property="og:description"   content="{{($situs->nama)}}"/>
<meta property="og:image"         content="{{ Storage::url($situs->gambar1)}}"/>




<!-- Your share button code -->


<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="3500">
            <img src="{{ Storage::url($situs->gambar1)}}" style="height:25rem;" class="d-block w-100" alt="gambar">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-danger">{{("$situs->nama")}}</h5>
                <p class="text-danger">{{("$situs->alamat")}}</p>
            </div>
        </div>
        <div class="carousel-item" data-interval="3500">
            <img src="{{ Storage::url($situs->gambar2)}}" style="height:25rem;" class="d-block w-100" alt="gambar">
            <div class="carousel-caption d-none d-md-block">
                <h5  class="text-danger">{{("$situs->nama")}}</h5>
                <p class="text-danger">{{("$situs->alamat")}}</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ Storage::url($situs->gambar3)}}" style="height:25rem;" class="d-block w-100" alt="gambar">
            <div class="carousel-caption d-none d-md-block">
                <h5  class="text-danger">{{("$situs->nama")}}</h5>
                <p class="text-danger">{{("$situs->alamat")}}</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ Storage::url($situs->gambar4)}}" style="height:25rem;" class="d-block w-100" alt="gambar">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-danger">{{("$situs->nama")}}</h5>
                <p class="text-danger">{{("$situs->alamat")}}</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ Storage::url($situs->gambar5)}}" style="height:25rem;" class="d-block w-100" alt="gambar">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-danger">{{("$situs->nama")}}</h5>
                <p class="text-danger">{{("$situs->alamat")}}</p>
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

<h3 class="pr-3" style="text-align: end;">
    <div class="dropdown">
        <span>Share
        <i class="fas fa-share-alt"></i>
        </span>
        <div class="dropdown-content">
            <div>
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                    data-show-count="false">Tweet</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div id="fb-root"></div>
            <div class="fb-share-button" data-href="{{route('detail_situs',$situs->id)}}" data-layout="button_count">
            </div>
            
            <div class="pt-3">
                <a href="whatsapp://send?text={{route('detail_situs',$situs->id)}}" data-action="share/whatsapp/share">
                    <i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</h3>


  
@endsection
@section('extra_script')
<script type="text/javascript">
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
@endsection