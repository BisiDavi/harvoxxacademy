@extends('layout')

@section('title', 'enroll with us')

  <div class="container-fluid">
    <div class="row">
      <img src="{{ asset('assets/img/banner.png') }}" class="top-banner" alt="banner" style="width:100%">
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4>Join Our Newsletter</h4>
        <p>Hello buddy, do you want to be onboard?</p>
        @if (session()->has('message'))
          <div class="alert alert-success" role="alert">
            <strong>Welcome buddy!</strong>
            <div class="fa fa-check" aria-hidden="true">
              {{ session()->get('message') }}
            </div>
          </div>
        @endif
        <form action='enroll' method="POST">
          <input placeholder="your email" type="email" name="newsletter_email">
          <p class="erroralert text-center text-danger mt-3">
            {{ $errors->first('newsletter_email') }}
          </p>
          <button type="submit" class="btn btn-danger" style="background-color:#7F2AA7;">
            Subscribe
          </button>
          @csrf
        </form>
      </div>
    </div>

  </div>
