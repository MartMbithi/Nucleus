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
            <li class="breadcrumb-item"><a href="{{ url('/')}}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('home')}}">{{ Auth::user()->name }} {{ __('NucleusERP Account') }}</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title-heading"> {{ __('NucleusERP Demo Version') }} </h1>
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
                <h5 class="author-card-name text-lg">{{ Auth::user()->name }}</h5><span class="author-card-position">{{ __('Joined') }} {{ Auth::user()->created_at }}</span>
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
          <h5>{{ __('Use The Following Credentials:') }}</h5>
           <h5>{{ __('Email:') }} <span class="text-success"> martdevelopers@nucleuserp.com </span> </h5>  
            <h5>{{ __('Password:') }} <span class="text-success"> demo </span> </h5>
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>{{ __('Product Name') }}</th>
                  <th>{{ __('API Token') }}</th>
                  <th>{{ __('API Token Status') }}</th>
                  <th>{{ __('Demo Link') }}</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>NucleusERP</td>
                  <td class="text-danger">8703bb84-590a-4b94-812c-c69fba5de8e6</td>
                  <td><span class="badge badge-success m-0">Active</span></td>
                  <td>
                    <a class="badge badge-primary" href="https://martdev.info/nuclei/n/">
                        <span>
                            {{ __('NucleusERP Trial Version') }}
                        </span>
                    </a>
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
    