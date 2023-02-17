@extends('layouts.main')

@section('container')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Services</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Services</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    

    <!-- Services Start -->
    @include('services.my-services')
    <!-- Services End -->


    <!-- Quote Start -->
    @include('quote.my-quote')
    <!-- Quote End -->
    @endsection
    