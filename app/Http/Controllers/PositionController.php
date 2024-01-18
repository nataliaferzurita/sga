<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePositionRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePositionRequest;
use App\Models\Position;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heads=['ID','NOMBRE','FECHA CREACION','ULTIMA ACTUALIZACION','ESTADO',['label' => 'Actions', 'no-export' => true, 'width' => 15]];
        $positions=Position::where('active_position',1)->get();
        return view('positions.index',compact('heads'),compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $position=Position::where('name_position','like',$request->name_position)->get();
        if($position->isEmpty()){
            $request->validate(
                [
                    'name_position'=>'required|min:1|max:20'
                ]
                );
                Position::create($request->all());
        }
        else {
            if( $position->first()->active_position==false){
                $position->first()->active_position=true;
                $position->first()->save();
            }
            else return back()->with('insert','no');
            
        }
            
        return back()->with('insert','yes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Position $position)
    {
        $request->validate([
            'name_position'=>'required|unique:positions|min:1|max:20'
        ]); 
        
        $position->update($request->all());
        $position->save();
        
        return back()->with('update','ok');
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        $position->active_position=0;
        $position->save();
        return back()->with('eliminar','ok');
        
        
    }

}
