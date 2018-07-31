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
                <h3 class="text-center">All Employees</h3>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-2">
                <div class="card bg-white">
                    <div class="card-header bg-primary">
                        <h4 class="text-center text-white bg-primary">Employee</h4>
                    </div>
                    @if(count($employees) > 0)
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center text-white"><i class="fas fa-calendar-plus"></i> Created Date</th>
                                        <th class="text-center text-white"><i class="far fa-calendar-alt"></i> Update Date</th>
                                        <th class="text-center text-white"><i class="fas fa-heading"></i> Name</th>
                                        <th class="text-center text-white"><i class="far fa-building"></i> Company</th>
                                        <th class="text-center text-white bg-success"><i class="fab fa-whmcs"></i> Actions</th>
                                        <th class="text-center text-white bg-danger"><i class="fab fa-whmcs"></i> Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $employee)

                                        <tr>
                                            <th scope="row">{{ $employee->id }}</th>
                                            <td class="text-center">{{ $employee->created_at }}</td>
                                            <td class="text-center">{{ $employee->updated_at }}</td>
                                            <td class="text-center">{{ $employee->name }}</td>
                                            <td class="text-center">{{ $employee->company->name }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('employee-edit', [$employee->id]) }}" class="btn btn-outline-success btn-sm"
                                                   title="Edit this Employee - {{$employee->name}}">
                                                    <i class="far fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <form class="form-delete" action="{{ route('employee.delete', ['id' => $employee->id]) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('You want to delete {{$employee->name}}. Are you sure?')"
                                                            title="Delete this Employee - {{$employee->name}}">
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
            <a href="{{ route('create-employee') }}" class="btn btn-primary">Add New Employee</a>
        </div>
    </div>
@endsection