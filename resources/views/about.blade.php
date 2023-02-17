@extends('layouts.main')

@section('container')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">About Us</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">About</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    @include('about.my-about')
    <!-- About End -->


    <!-- Team Start -->
    @include('team.my-team')
    <!-- Team End -->   
    @endsection


