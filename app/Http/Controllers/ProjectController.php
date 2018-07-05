<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectType;
use App\Customer;
use App\Http\Requests\ProjectFormRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    //index vitra pani (Request $request) bec search garda request auna vayo
    {
        $projects=null;
        if($request->has('q')){
            $projects=Project::where('id','>',0);
          //$isGet=FALSE;

          if($request->input('search')!=''){
              $projects=$projects->where('title','like','%'.$request->input('search').'%');
              $isGet=TRUE;
            }

            if($request->input('project_type_id')!=''){
            $projects= $projects->where('project_type_id',$request->input('project_type_id'));
            // $isGet=TRUE;
            }
            if($request->input('customer_id')!=''){
                $projects= $projects->where('customer_id',$request->input('customer_id'));
             //  $isGet=TRUE;
            }
            // if ($isGet) {
              $projects=$projects->get();
            // }

        }else{
             $projects=Project::all();
        }
        return view('admin.projects.index',[
            'projects'=>$projects,
            'customers'=>Customer::all(),
            'types'=>ProjectType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create',[
            'customers'=>Customer::all(),
            'types'=>ProjectType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectFormRequest $request)
    {
        $project=new project();
        $project->title=$request->input('title');
        $project->description=$request->input('description');
        $project->project_type_id=$request->input('project_type_id');
        $project->customer_id=$request->input('customer_id');
        $project->start_date=$request->input('start_date');
        $project->end_date=$request->input('end_date');
        $project->status=true;
        $project->save();
        return redirect('admin/projects');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
