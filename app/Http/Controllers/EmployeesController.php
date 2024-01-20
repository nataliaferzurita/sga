<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Position;
use Illuminate\Support\Facades\Http;
use Barryvdh\DomPDF\Facade\Pdf;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
 
    public function index()
    {
        $heads=['ID','CUIL','FECHA INGRESO','PRIMER NOMBRE','SEGUNDO NOMBRE','PRIMER APELLIDO','SEGUNDO APELLIDO','NACIONALIDAD','FECHA DE NACIMIENTO','TELEFONO','PAIS','PROVINCIA','CIUDAD','DOMICILIO','PUESTO','SUELDO','FECHA DE ALTA','FECHA ACTUALIZACION','ACCIONES'];
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
        $request->validate(
            [
                'cuil_employee'=>'required|numeric',
                'name1_employee'=>'required|min:1|max:20',
                'name2_employee'=>'max:20',
                'lastname1_employee'=>'required|min:1|max:20',
                'lastename2_employee'=>'max:20',
                'salary_employee'=>'numeric',
                'dateOfEntry_employee'=>'required',
                'phone_employee'=>'required|min:10|max:10',
                
            ]
        );
        $employee=Employees::where('cuil_employee','like',$request->cuil_employee)->get();
        if($employee->isEmpty()){
            $employee=new Employees();
            
            if($request->hasFile('photo_employee')){
                $file=$request->file('photo_employee');
                $destinationPath='images/employees/';
                $filename=time()."-". $file->getClientOriginalName();
                $uploadSuccess=$request->file('photo_employee')->move($destinationPath,$filename);
                $employee->photo_employee=$destinationPath.$filename;
            }

            
            $employee->cuil_employee=$request->cuil_employee;
            $employee->dateOfEntry_employee=$request->dateOfEntry_employee;
            $employee->name1_employee=$request->name1_employee;
            $employee->name2_employee=$request->name2_employee;
            $employee->lastname1_employee=$request->lastname1_employee;
            $employee->lastname2_employee=$request->lastname2_employee;
            $employee->dateOfBirth_employee=$request->dateOfBirth_employee; 
            $employee->nationality_employee=$request->nationality_employee;
            $employee->phone_employee=$request->phone_employee;
            $employee->country_employee=$request->country_employee;
            $employee->state_employee=$request->state_employee;
            $employee->city_employee=$request->city_employee;
            $employee->address_employee=$request->address_employee;
            $employee->position_employee=$request->position_employee;
            $employee->salary_employee=$request->salary_employee;
            $employee->save();
            
        }
        else{
                if($employee->first()->active_employee==false){
                    $employee->first()->active_employee=1;
                    $employee->first()->save();
                }
                else return back()->with('insert','no');
                
            
        }
        return back()->with('insert','ok');
        
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
    public function edit(Employees $row)
    {   
        
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employees $employee)
    {
       $request->validate([
            'cuil_employee'=>'required|min:11|max:11|unique:employees',
            'name1_employee'=>'required|min:1|max:20',
            'name2_employee'=>'max:20',
            'lastname1_employee'=>'required|min:1|max:20',
            'lastename2_employee'=>'max:20',
            'salary_employee'=>'required|numeric',
            'dateOfEntry_employee'=>'required',
            'phone_employee'=>'required'
            
       ]);
       if($request->hasFile('photo_employee')){
            $file=$request->file('photo_employee');
            $destinationPath='images/employees/';
            $filename=time()."-". $file->getClientOriginalName();
            $uploadSuccess=$request->file('photo_employee')->move($destinationPath,$filename);
            $employee->photo_employee=$destinationPath.$filename;
        }
       
        $employee->cuil_employee=$request->cuil_employee;
        $employee->dateOfEntry_employee=$request->dateOfEntry_employee;
        $employee->name1_employee=$request->name1_employee;
        $employee->name2_employee=$request->name2_employee;
        $employee->lastname1_employee=$request->lastname1_employee;
        $employee->lastname2_employee=$request->lastname2_employee;
        $employee->nationality_employee=$request->nationality_employee;
        $employee->phone_employee=$request->phone_employee;
        $employee->country_employee=$request->country_employee;
        $employee->state_employee=$request->state_employee;
        $employee->city_employee=$request->city_employee;
        $employee->address_employee=$request->address_employee;
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

   public function pdf(Employees $employee){
        $pdf = Pdf::loadView('employees/report',['row'=>$employee] );
        return $pdf->stream('invoice.pdf');

   }
}
