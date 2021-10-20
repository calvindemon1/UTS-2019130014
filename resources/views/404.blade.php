@extends('layouts.master')
@section('content')
    <div class="jumbotron">
        <div class="row">
            <div class="col text-center align-self-center m-3">
                <h1 class="display-4">Page Not Found!</h1>
                <p class="lead">Sorry! The page you're looking for is not here!</p>
                <p class="lead">
                    <a class="btn btn-primary btn-block" href="{{ route('home') }}" role="button">Go Back</a>
                </p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('img/psyduck.jpg') }}">
            </div>
        </div>

    </div>
@endsection
