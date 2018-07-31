<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employees = employee::all();

        $companies = Employee::with('company')->get();
        return view('employee.index', compact('employees', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('employee.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the inputs
        $this->validate($request, [
            'name' => 'required',
            'company' => 'required'
        ]);

        // Create new employee
        $data = [
            'name' => $request->name,
            'company_id' => $request->company
        ];

        employee::create($data);
        return redirect()->route('view-employee')->with('success', 'New employee successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allCompanies = Company::all();
        $companies = Employee::with('company')->get();
        $employee = employee::find($id);
        return view('employee.edit', compact('employee','companies', 'allCompanies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the inputs
        $this->validate($request, [
            'name' => 'required',
            'company' => 'required'
        ]);

        $employee = employee::find($id);
        $employee->name = $request->input('name');
        $employee->company_id = $request->input('company');
        $employee->save();

        return redirect()->route('view-employee')->with('success', 'The employee was edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete the Employee
        $employee = employee::find($id);
        $employee->delete();
        return redirect()->route('view-employee')->with('success', 'The employee was deleted!');

    }
}
