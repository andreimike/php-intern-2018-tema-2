@extends('layouts.app')

@section('content')

    @include('inc.messages')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-12 mt-3">
        <div class="card bg-white">
            <div class="card-body">
                <h3 class="text-center">Add a new Employee</h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card bg-white">
                <div class="card-body">
                    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name"> Employee Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name of Company">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="company"> Select Company</label>
                                <select class="form-control" name="company" id="company">
                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i> Add new Employee</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection