@extends('layouts.partials.verify_navbar')
@section('content')
    <div class="container">
        <br class="row justify-content-center">
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-header">{{ __('Verify Your Email Address') }}</h5>

                <div class="card text-center">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <br></br>
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    <br></br>
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">{{ __('click here to request another') }}</button>
                        <br></br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

