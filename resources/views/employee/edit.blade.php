@extends('layouts.app')

@section('content')

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
                <h3 class="text-center">Edit the Company</h3>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7 mt-4">

            <div class="card bg-white">
                <div class="card-body">
                    <form action="{{ route('company-update', ['id'=>$company->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name"><i class="fas fa-heading"></i> Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ $company->name }}" placeholder="Name of Company">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="description"><i class="fas fa-pen"></i> Description</label>
                                <textarea id="description" name="description" class="form-control" placeholder="Insert a description for this Company">{{$company->description}}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i> Create new Company</button>
                    </form>
                    <form class="form-delete" action="{{ route('company.delete', ['id' => $company->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-outline-danger mt-1" onclick="return confirm('Are you sure?')" title="Delete this company - {{$company->name}}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection