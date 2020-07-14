@extends('layouts.app')

@section('content')
  <!-- Body-->
  <body>
    @include('partials._nav')
    <!-- Page Title-->
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(img/page-title/shop-pattern.jpg);">
      <div class="container text-left align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('home')}}">{{ Auth::user()->name }} NucleusERP Account</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title-heading">NucleusERP Demo Version </h1>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container mb-4">
      <div class="row">
        <div class="col-lg-4 pb-5">
          <!-- Account Sidebar-->
          <div class="author-card pb-3">
            <div class="author-card-cover" style="background-image: url(img/cover.jpg);"></div>
            <div class="author-card-profile">
              <div class="author-card-avatar"><img src="{{ url('img/akaunting-logo-green.png') }}" alt="{{ Auth::user()->name }}"/>
              </div>
              <div class="author-card-details">
                <h5 class="author-card-name text-lg">{{ Auth::user()->name }}</h5><span class="author-card-position">Joined {{ Auth::user()->created_at }}</span>
              </div>
            </div>
          </div>

          <div class="wizard">
            @include('partials._home_nav')
          </div>

        </div>
        <!-- Demo URL AND Token-->
        <div class="col-lg-8 pb-5">
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>API Token</th>
                  <th>Demo Link</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>NucleusERP </td>
                  <td><span class="badge badge-danger m-0"></span></td>
                  <td>
                    <span class="badge outline-badge-success">
                        <a href="">
                            NucleusERP Trial Version
                        </a>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
    @endsection
    