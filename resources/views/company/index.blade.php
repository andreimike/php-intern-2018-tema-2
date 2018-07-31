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
                <h3 class="text-center">All Companies</h3>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header custom-bg-color">
                        <h4 class="text-center text-white">Company</h4>
                    </div>
                    @if(count($companies) > 0)
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-dark text-white">
                                <tr>
                                    <th>#</th>
                                    <th class="text-center text-white"><i class="fas fa-calendar-plus"></i> Created Date</th>
                                    <th class="text-center text-white"><i class="far fa-calendar-alt"></i> Update Date</th>
                                    <th class="text-center text-white"><i class="fas fa-heading"></i> Name</th>
                                    <th class="text-center text-white"><i class="far fa-bookmark"></i> Description</th>
                                    <th class="text-center text-white bg-success"><i class="fab fa-whmcs"></i> Actions</th>
                                    <th class="text-center text-white bg-danger"><i class="fab fa-whmcs"></i> Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companies as $company)

                                    <tr>
                                        <th scope="row">{{ $company->id }}</th>
                                        <td class="text-center">{{ $company->created_at }}</td>
                                        <td class="text-center">{{ $company->updated_at }}</td>
                                        <td class="text-center">{{ $company->name }}</td>
                                        <td class="text-center">{{ $company->description }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('company-edit', [$company->id]) }}" class="btn btn-outline-success btn-sm"
                                               title="Edit this Company - {{$company->name}}">
                                                <i class="far fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td class="text-center">
                                        <form class="form-delete" action="{{ route('company.delete', ['id' => $company->id]) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('You want to delete {{$company->name}}. Are you sure?')" title="Delete this company - {{$company->name}}">
                                                    <i class="fas fa-trash"> Delete</i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                        @else
                        <p class="text-warning text-center m-3"><b><i class="fas fa-exclamation-triangle"></i> No record found!</b></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 mb-4 justify-content-center">
        <div class="col-md-12 text-center">
            <a href="{{ route('create-company') }}" class="btn btn-primary">Add New Company</a>
        </div>
    </div>
@endsection