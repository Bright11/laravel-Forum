@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!')}} {{Auth::user()->name}}
                </div>
            </div>
            <p>To view and manage the post and related question, please check the
                navigation bar above
            </p>
        </div>
    </div>

</div>
@endsection