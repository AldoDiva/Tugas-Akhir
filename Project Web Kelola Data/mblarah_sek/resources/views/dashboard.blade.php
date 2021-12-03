@extends('source/master')
@extends('source/template')
@section('content')

<div class="row">
    <div class="col-xl-2 col-md-6 mb-4 ml-6 mt-4">
        <div class="card border-left-user shadow h-100 py-2">
            <div class="card-body" style="height: 5rem;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Users
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$user}}</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-user" role="progressbar" style="width: 50%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-6 mb-4  mt-4">
        <div class="card border-left-situs shadow h-100 py-2">
            <div class="card-body" style="height: 5rem;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Situs
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$situs}}</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-situs" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-archway fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-6 mb-4  mt-4">
        <div class="card border-left-hotel shadow h-100 py-2">
            <div class="card-body" style="height: 5rem;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Hotel
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$hotel}}</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-hotel" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-building fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-6 mb-4  mt-4">
        <div class="card border-left-kuliner shadow h-100 py-2">
            <div class="card-body" style="height: 5rem;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Kuliner
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$food}}</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-kuliner" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-utensils fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4  mt-4">
        <div class="card border-left-pray shadow h-100 py-2">
            <div class="card-body" style="height: 5rem;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total PrayPlace
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$pray}}</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-pray" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-mosque fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br><br>

<div class="container">
    <div class="col 30">
        <div class="row">

            <div class="card" style="height: 23rem; width: 33rem;">
                <div class="card-body">
                    <h4 class="card-title">Statistik Jumlah Users</h4>
                    <canvas id="userChart" class="chartjs" width="70" height="42"></canvas>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between px-4"></div>
            <div class="card" style="height: 23rem; width: 33rem;">
                <div class="card-body">
                    <h4 class="card-title">Statistik Jumlah Situs</h4>
                    <canvas id="situsChart" class="chartjs" width="70" height="42"></canvas>
                </div>

            </div>


            <!-- Content Row -->

        </div>

        <div class="row">
            <div class="card" style="height: 23rem; width: 33rem;">
                <div class="card-body">
                    <h4 class="card-title">Statistik Jumlah Hotel</h4>
                    <canvas id="hotelChart" class="chartjs" width="70" height="42"></canvas>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between px-4"></div>
            <div class="card" style="height: 23rem; width: 33rem;">
                <div class="card-body">
                    <h4 class="card-title">Statistik Jumlah Kuliner</h4>
                    <canvas id="kulinerChart" class="chartjs" width="70" height="42"></canvas>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="card" style="height: 23rem; width: 33rem;">
                <div class="card-body">
                    <h4 class="card-title">Statistik Jumlah PrayPlace</h4>
                    <canvas id="prayChart" class="chartjs" width="70" height="42"></canvas>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between px-4"></div>

            <div class="card" style="height: 23rem; width: 33rem;">
                <div class="card-body">
                    <h4 class="card-title">Statistik Jumlah Report</h4>
                    <canvas id="reportChart" class="chartjs" width="70" height="42"></canvas>
                </div>
            </div>
        </div>

    </div>

</div>



@endsection

@section('extra_script')

<script type="text/javascript">

    var tulis = {!! json_encode($label) !!};
    var baca = {!! json_encode($jumlah_user) !!};
    var ctx = document.getElementById("userChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: tulis,
            datasets: [{
                label: 'Statistik User',
                backgroundColor: ' #4e73df',
                borderColor: '#00FA9A',
                data: baca
            }],
            options: {
                animation: {
                    onProgress: function (animation) {
                        progress.value = animation.animationObject.currentStep / animation.animationObject
                            .numSteps;
                    }
                }
            }
        },
    });



  
    var labels = {!! json_encode($label) !!};
    var datas = {!! json_encode($jumlah_situs) !!};
    var ctx = document.getElementById("situsChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Statistik Situs',
                backgroundColor: ' #38c172',
                borderColor: '#FF4500',
                data: datas
            }],
            options: {
                animation: {
                    onProgress: function (animation) {
                        progress.value = animation.animationObject.currentStep / animation.animationObject
                            .numSteps;
                    }
                }
            }
        },
    });

    var get = {!! json_encode($label)!!};
    var set = {!! json_encode($jumlah_hotel) !!};
    var ctx = document.getElementById("hotelChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: get,
            datasets: [{
                label: 'Statistik Hotel',
                backgroundColor: ' #FF8C00',
                borderColor: '#9932CC',
                data: set
            }],
            options: {
                animation: {
                    onProgress: function (animation) {
                        progress.value = animation.animationObject.currentStep / animation.animationObject
                            .numSteps;
                    }
                }
            }
        },
    });

    var show = {!! json_encode($label) !!};
    var read = {!! json_encode($jumlah_food) !!};
    var ctx = document.getElementById("kulinerChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: show,
            datasets: [{
                label: 'Statistik Kuliner',
                backgroundColor: '#191970',
                borderColor: '#48D1CC',
                data: read
            }],
            options: {
                animation: {
                    onProgress: function (animation) {
                        progress.value = animation.animationObject.currentStep / animation.animationObject
                            .numSteps;
                    }
                }
            }
        },
    });

    var show = {!! json_encode($label) !!};
    var read = {!! json_encode($jumlah_pray) !!};
    var ctx = document.getElementById("prayChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: show,
            datasets: [{
                label: 'Statistik PrayPlace',
                backgroundColor: '#FF0000',
                borderColor: '#f6c23e',
                data: read
            }],
            options: {
                animation: {
                    onProgress: function (animation) {
                        progress.value = animation.animationObject.currentStep / animation.animationObject
                            .numSteps;
                    }
                }
            }
        },
    });

    var lapor = {!! json_encode($label) !!};
    var need = {!! json_encode($jumlah_report) !!};
    var ctx = document.getElementById("reportChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: lapor,
            datasets: [{
                label: 'Statistik Report',
                backgroundColor: '#FF0000',
                borderColor: '#00000',
                data: need
            }],
            options: {
                animation: {
                    onProgress: function (animation) {
                        progress.value = animation.animationObject.currentStep / animation.animationObject
                            .numSteps;
                    }
                }
            }
        },
    });
</script>


@endsection
