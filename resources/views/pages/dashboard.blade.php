@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="mr-5">Employees</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('view-employee') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="far fa-building"></i>
                    </div>
                    <div class="mr-5">Companies</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('view-company') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="far fa-plus-square"></i>
                    </div>
                    <div class="mr-5">Add New Employee</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('create-employee') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="far fa-plus-square"></i>
                    </div>
                    <div class="mr-5">Ad New Company</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('create-company') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
            </div>
        </div>
    </div>

@endsection