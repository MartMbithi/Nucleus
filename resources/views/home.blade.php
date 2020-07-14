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
        <h1 class="page-title-heading">{{ __('NucleusERP Demo Version') }} </h1>
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
        <!-- Profile Settings-->
        <div class="col-lg-8 pb-5">
          <form class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-fn">{{ __('Full Name') }}</label>
                <input class="form-control" type="text" value="{{ Auth::user()->name }}" id="account-fn" value="Daniel" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-email">{{ __('E-mail Address') }}</label>
                <input class="form-control" value="{{ Auth::user()->email }}" type="email" id="account-email" value="daniel.adams@example.com" disabled>
              </div>
            </div>
            <hr>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-pass">{{ __('New Password') }}</label>
                <input class="form-control" type="password" id="account-pass">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-confirm-pass">{{ __('Confirm Password') }}</label>
                <input class="form-control" type="password" id="account-confirm-pass">
              </div>
            </div>
            <div class="col-12">
              <hr class="mt-2 mb-3">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <button class="btn btn-primary" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">{{ __('Update Profile') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endsection
    