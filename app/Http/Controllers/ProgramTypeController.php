<?php

namespace App\Http\Controllers;

use App\ProgramType;
use Illuminate\Http\Request;
use App\Http\Requests\ProgramTypeFormRequest;

class ProgramTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('programs.types.index',[
            'types'=>ProgramType::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramTypeFormRequest $request)
    {
        $type=new ProgramType();
        $type->name=$request->input('name');
        $type->save();
        return redirect('admin/Programtypes');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProgramType  $programType
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramType $programType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramType  $programType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Programs.types.edit',[
            'type'=>ProgramType::findOrFail($id)
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramType  $programType
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramTypeFormRequest $request, ProgramType $programType)
    {
        $type=ProgramType::find($request->input('id'));
        $type->name=$request->input('name');
        $type->save();
        return redirect('admin/Programtypes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramType  $programType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=ProgramType::find($id);
        $type->delete();
        return redirect('admin/Programtypes');
    }
}
