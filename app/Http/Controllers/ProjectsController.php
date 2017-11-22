<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;
use File;
use Image;

class ProjectsController extends Controller
{   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $projects)
    {   
        //get all projects in desc order
        $projects = $projects->orderBy('created_at', 'desc')->get();
        $users = new User;
        $users = $users->orderBy('created_at', 'desc')->get();
        //in further development this will be a table
        $project_countries = array('مصر', 'الامارات', 'الكويت', 'تونس');
        $project_status = array('فكرة', 'تحت الانشاء', 'في طور التصفية', 'قائم');
        $project_needs = array('شريك', 'مستثمر', 'مشتري للمشروع');

        return view('projects.index', compact('projects', 'users', 'project_countries', 'project_status', 'project_needs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //further this will be handled using a pviot tables
        $project_types = array('شركة', 'مصنع', 'ورشة', 'مدرسة', 'موقع');
        $project_fields = array('اراضي و عقارات', 'برمجيات', 'مواد غذائية', 'ملابس', 'الات و ادوات');
        $project_status = array('فكرة', 'تحت الانشاء', 'في طور التصفية', 'قائم');
        $project_countries = array('مصر', 'الامارات', 'الكويت', 'تونس');
        $project_needs = array('شريك', 'مستثمر', 'مشتري للمشروع');

        return view('projects.create', compact('project_types', 'project_fields', 'project_status' , 'project_countries', 'project_needs' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;

        $this->validate(request(), [
            'name' => 'required|min:3|max:255',
            'slug' => "min:5|max:255|unique:projects,slug,$project->id",
            'project_type' => 'required',
            'project_field' => 'required',
            'project_status' => 'required',
            'description' => 'required',
            'project_country' => 'required',
            'project_needs' => 'required',
            'budget' => 'required',
            'project_img' => 'image',
        ]);

        $project->user_id = auth()->id();
        $project->name = request('name');
        $project->project_type = request('project_type');
        $project->project_field = request('project_field');
        $project->project_status = request('project_status');
        $project->description = request('description');
        $project->project_country = request('project_country');
        $project->project_needs = implode(',', request('project_needs'));
        $project->budget = request('budget');
        $project->project_img = request('project_img');

        // Manage Required img
        if($request->hasFile('project_img')) {
            $project_img     = $request->file('project_img');
            $img_name  = time() . '.' . $project_img->getClientOriginalExtension();
            //path to year/month folder
            $date_path = public_path('images/projects/' . date('Y') . '/' . date('m'));
            $date_path_db = 'images/projects/' . date('Y') . '/' . date('m') . '/';
            //check if date foler exists if not create it
            if(!File::exists($date_path)) {
                File::makeDirectory($date_path, 666, true);
            }
            //path of the new image
            $path       = $date_path . '/' . $img_name;
            //save image to the path
            Image::make($project_img)->save($path);
            //make the field image in the projects table = to the link of img
            $project->project_img = $date_path_db . $img_name;
        }

        $project->save();

        //make the project sluggable
        $sluggable = $project->replicate();

        // redirect to the projects page
        session()->flash('announce', 'تم انشاء مشروع جديد.');

        return redirect(route('projects.all'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {   
        //sending needs into array
        $project_needs = explode(',', $project->project_needs);

        return view('projects.show', compact('project', 'project_needs'));
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
