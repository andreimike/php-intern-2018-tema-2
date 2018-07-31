@extends('layouts.app')

@section('content')
    @include('inc.messages')
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                   Hello Admin!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Welcome</h5>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to dashboard</a>
                </div>
            </div>
        </div>
    </div>
@endsection