@extends('source/master')

@section('content')

<style>/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}</style>

<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-body">

                <form method="post" action="{{ url('login') }}">

                    <div class="car-header bg-success pt-2">
                        <div class="card-title font-weight-bold text-white text-center"> LOGIN </div>
                    </div>

                    <div class="card-body">
                        @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                            @php
                            Session::forget('error');
                            @endphp
                        </div>
                        @endif


                        <div class="form-group">
                            <label for="email" style="color:white;"> E-mail </label>
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Masukkan Email" value="{{ old('email') }}" />
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="password" style="color:white;"> Password </label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Masukkan Password" value="{{ old('password') }}" />
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                        </div>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-success"> Login </button>

            </div>
            @csrf

        </div>

        <div class="card-footer">

            </form>
        </div>
    </div>
</div>


@endsection
