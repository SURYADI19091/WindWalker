<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.employer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.employer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  
    }

    // public function storeMultiple(Request $request)
    // {
    //     $employers = $request->input('employers');
        
    //     foreach ($employers as $employerData) {
    //         Employer::create([
    //             'name' => $employerData['name'],
    //             'email' => $employerData['email'],
    //             'phone' => $employerData['phone'],
    //             'position' => $employerData['position'],
    //         ]);
    //     }

    //     return redirect()->route('employers.create')->with('success', 'Employers added successfully.');
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
