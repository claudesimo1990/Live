@extends('layouts.master')

@section('css')
<link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet" defer>
@stop

@section('content')


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav background-quigo--second sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active mt-4">
        <a class="nav-link" href="{{ route('profile.show',auth()->id()) }}">
          <span class="fa fa-home"></span>
          <span>Accueil</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="{{ route('user.travels',Auth()->id()) }}">
          <span class="fa fa-plane"></span>
          <span>voyages</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="{{ route('user.packs',Auth()->id()) }}">
          <span class="fa fa-suitcase"></span>
          <span>Expeditions</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.demandes',Auth()->id()) }}">
          <span class="fa fa-handshake"></span>
          <span>demandes</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.reservations',Auth()->id()) }}">
          <span class="fa fa-edit"></span>
          <span>reservations</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="{{ route('user.profile',Auth()->id()) }}">
          <span class="fa fa-user"></span>
          <span>profile</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.factures',Auth()->id()) }}">
          <span class="fa fa-envelope"></span>
          <span>factures</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.notifications',Auth()->id()) }}">
          <span class="fa icon-notif"></span>
          <span>Notifications</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.message',Auth()->id()) }}">
          <span class="fa fa-smile"></span>
          <span>Bewertung</span></a>
      </li>

      <!-- Divider -->
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

        <!-- Begin Page Content -->
        <div class="container py-4">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between pb-2">
            <h5 class="mb-0 text-gray-800">@yield('dashboard_title')</h5>
          </div>
           <!-- Content Row -->
           @yield('dashbord_content')
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->
@endsection
