<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Employees;
//use Illuminate\View\View;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        return response()->json($employees); 
    }   
    public function store(Request $request)
    {
        $employees = new Employees([
            'naziv' => $request->input('naziv'),
            'cijena' => $request->input('cijena'),
            'opis' => $request->input('opis'),
            'veličina' => $request->input('veličina'),
        ]);
        $employees->save();
        return response()->json('Employee created!');
    }
    public function show($id)
    {
        $contact = Employees::find($id);
        return response()->json($contact);
    }
    public function update(Request $request, $id)
    {
       $employees = Employees::find($id);
       $employees->update($request->all());
       return response()->json('Employee updated');
    }
    public function destroy($id)
    {
        $employees = Employees::find($id);
        $employees->delete();
        return response()->json(' deleted!');
    }
}
