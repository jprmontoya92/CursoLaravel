<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{

    public function __construct(){

        $this->middleware('auth')->except('index','show');
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
       
    }

    public function index(){
        
        return view('projects.index',[
            'projects' =>Project::latest('title')->paginate(4)
        ]);
    }

    public function show(Project $project){

        return view('projects.show',[
            "project" =>$project // se utliza Route Model binding  Urls amigables 
            //Project::findOrFail($id) // el metodo find solo busca pero al ingresar un id por url que no se encuentre en bd , se obtiene null dando error
        ]);
    }

    public function create(){
        return view('projects.create',[
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request){

        Project::create($request->validated());
        // validamos los campos

       /*  $fields = request()-> validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]); */

        //pasamos los campos ya validados
        //lo mismo 
       // Project::create(request()->all());
        /*   Project::create([
            'title'       => request('title'),
            'url'         => request('url'),
            'description' => request('description')
        ]);
 */
        return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito');;
    }

    public function edit(Project $project){

        return view('projects.edit',[
            'project' => $project                                    
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request){

        $project->update($request->validated());

        return redirect()->route('projects.show',$project)->with('status','El proyecto fue actualizado correctamente');

    }

    public function destroy(Project $project){

        //utilizo route model binding
        $project->delete();

        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado correctamente');
    }
}
