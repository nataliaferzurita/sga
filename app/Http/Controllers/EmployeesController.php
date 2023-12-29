<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Position;
use Illuminate\Support\Facades\Http;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
 
    public function index()
    {
        $heads=['ID','CUIL','PRIMER NOMBRE','SEGUNDO NOMBRE','PRIMER APELLIDO','SEGUNDO APELLIDO','TELEFONO','CARGO','SUELDO','FECHA DE ALTA','FECHA ACTUALIZACION','ACTIVO','ACCIONES'];
        $employees=Employees::where('active_employee',1)->get();
        
        return view('employees.index',compact('heads'),compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee=Employees::where('cuil_employee','like',$request->cuil_employee)->get();
        if($employee->isEmpty()){
            $request->validate(
                [
                    'cuil_employee'=>'required|min:11|max:11|unique:employees',
                    'name1_employee'=>'required|min:1|max:20',
                    'name2_employee'=>'max:20',
                    'lastname1_employee'=>'required|min:1|max:20',
                    'lastename2_employee'=>'max:20',
                    'salary_employee'=>'numeric'
                ]
            );
           
           // Employees::create($request->except('_token'));
           dd($request);

           
        }
        else{
            
                $employee->first()->active_employee=1;
                $employee->first()->save();
            
        }
        return back()->with('Ok','success');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Employees $employee){
       return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employees $employees)
    {
        return 'pala';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employees $employee)
    {
       $request->validate([
            'cuil_employee'=>'required|min:11|max:11',
            'name1_employee'=> 'required|min:1|max:20',
            'lastname1_employee' => 'required|min:1|max:20',
            
       ]);
       
       $employee->cuil_employee=$request->cuil_employee;
       $employee->name1_employee=$request->name1_employee;
       $employee->name2_employee=$request->name2_employee;
       $employee->lastname1_employee=$request->lastname1_employee;
       $employee->lastname2_employee=$request->lastname2_employee;
       $employee->phone_employee=$request->phone_employee;
       $employee->position_employee=$request->position_employee;
       $employee->salary_employee=$request->salary_employee;
       $employee->save();
       return back()->with('update','ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employees $employee)
    {
        $employee->active_position=0;
        $employee->save();
        return back()->with('eliminar','ok');
    }
}
