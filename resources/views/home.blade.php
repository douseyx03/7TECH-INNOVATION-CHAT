@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>
                <div id="main" data-user="{{ json_encode($user) }}"></div>
                <div class="card-body">
                 
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @section('content')
    <div class="container">
        <div id="main" data-user="{{ json_encode($user) }}"></div>
    </div>
@endsection --}}
