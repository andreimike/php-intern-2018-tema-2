<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
       //$companies = $rawCompanies->sortByDesc();
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
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
            'description' => 'required'
        ]);

        // Create new Company
        $data = [
            'name' => $request->name,
            'description' => $request->description
        ];

        Company::create($data);
        return redirect()->route('view-company')->with('success', 'New Company successfully added!');
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
        $company = Company::find($id);
        return view('company.edit')->with('company', $company);
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
            'description' => 'required'
        ]);

        $company = Company::find($id);
        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->save();

        return redirect()->route('view-company')->with('success', 'The company was edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete the Ccomapny
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('view-company')->with('success', 'The company was deleted!');

    }
}
