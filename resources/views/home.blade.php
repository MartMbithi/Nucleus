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
            <li class="breadcrumb-item"><a href="index-2.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="account-orders.html">Account</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title-heading">Profile Settings</h1>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container mb-4">
      <div class="row">
        <div class="col-lg-4 pb-5">
          <!-- Account Sidebar-->
          <div class="author-card pb-3">
            <div class="author-card-cover" style="background-image: url(img/widgets/author/cover.jpg);"><a class="btn btn-light btn-sm" href="#" data-toggle="tooltip" title="You currently have 290 Reward points to spend"><i class="fe-icon-award text-md"></i>&nbsp;290 points</a></div>
            <div class="author-card-profile">
              <div class="author-card-avatar"><img src="img/account/user-ava.jpg" alt="Daniel Adams"/>
              </div>
              <div class="author-card-details">
                <h5 class="author-card-name text-lg">Daniel Adams</h5><span class="author-card-position">Joined February 06, 2017</span>
              </div>
            </div>
          </div>
          <div class="wizard">
            <nav class="list-group list-group-flush"><a class="list-group-item" href="account-orders.html">
                <div class="d-flex justify-content-between align-items-center">
                  <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                    <div class="d-inline-block font-weight-medium text-uppercase">Orders List</div>
                  </div><span class="badge badge-secondary">6</span>
                </div></a><a class="list-group-item active" href="account-profile.html"><i class="fe-icon-user text-muted"></i>Profile Settings</a><a class="list-group-item" href="account-address.html"><i class="fe-icon-map-pin text-muted"></i>Addresses</a><a class="list-group-item" href="account-wishlist.html">
                <div class="d-flex justify-content-between align-items-center">
                  <div><i class="fe-icon-heart mr-1 text-muted"></i>
                    <div class="d-inline-block font-weight-medium text-uppercase">My Wishlist</div>
                  </div><span class="badge badge-secondary">3</span>
                </div></a><a class="list-group-item" href="account-tickets.html">
                <div class="d-flex justify-content-between align-items-center">
                  <div><i class="fe-icon-tag mr-1 text-muted"></i>
                    <div class="d-inline-block font-weight-medium text-uppercase">My Tickets</div>
                  </div><span class="badge badge-secondary">4</span>
                </div></a></nav>
          </div>
        </div>
        <!-- Profile Settings-->
        <div class="col-lg-8 pb-5">
          <form class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-fn">First Name</label>
                <input class="form-control" type="text" id="account-fn" value="Daniel" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-ln">Last Name</label>
                <input class="form-control" type="text" id="account-ln" value="Adams" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-email">E-mail Address</label>
                <input class="form-control" type="email" id="account-email" value="daniel.adams@example.com" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-phone">Phone Number</label>
                <input class="form-control" type="text" id="account-phone" value="+7 (805) 348 95 72" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-pass">New Password</label>
                <input class="form-control" type="password" id="account-pass">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-confirm-pass">Confirm Password</label>
                <input class="form-control" type="password" id="account-confirm-pass">
              </div>
            </div>
            <div class="col-12">
              <hr class="mt-2 mb-3">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox" id="subscribe_me" checked>
                  <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>
                </div>
                <button class="btn btn-primary" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endsection
    