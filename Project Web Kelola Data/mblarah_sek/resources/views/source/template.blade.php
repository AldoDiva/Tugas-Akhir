<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" style="padding-left:10rem;" href="{{url('/')}}">MBLARAH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
        aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" style="padding-right:8rem; padding-top:1rem;"
                    href="{{url('dashboard')}}"> Welcome: {{ ucfirst(Auth()->user()->first_name) }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}"> <button class="btn btn-secondary">Logout</button></a>
            </li>
        </ul>
    </div>
    @csrf
</nav>



<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
            <div class="sidebar-brand-icon rotate-n-0">
                <i aria-hidden="true"><img src="blogs/istock.jpg" style="width:70px; height:70px; padding-top:5px;">  </i>
            </div>
            <div class="sidebar-brand-text mx-3">MBLARAH</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{('dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu
        </div>


        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{'situsadd'}}">
                <i class="fa fa-archway" aria-hidden="true"> </i>
                <span>Kelola Situs</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{('hotelplace')}}">
                <i class="fa fa-building" aria-hidden="true"></i>
                <span>Kelola Hotel</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{('prayplace')}}">
                <i class="fa fa-mosque" aria-hidden="true"></i>
                <span>Kelola Tempat Ibadah</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{('foodplace')}}">
                <i class="fas fa-utensils" aria-hidden="true"></i>
                <span>Kelola Tempat Kuliner</span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link" href="{{('useradd')}}">
                <i class="fas fa-users" aria-hidden="true"></i>
                <span>Kelola User</span></a>
        </li>
        



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link" href="{{('useradd')}}">
                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <span>Laporan Bug & Saran</span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">



            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
        