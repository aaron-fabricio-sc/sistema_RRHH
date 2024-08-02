<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Department;
use App\Http\Requests\StoreJob;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Departament;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Settings;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware("can:admin.jobs.index")->only("index");
        $this->middleware("can:admin.jobs.edit")->only("edit");
        $this->middleware("can:admin.jobs.create")->only("create");
        $this->middleware("can:admin.jobs.show")->only("show");
        $this->middleware("can:admin.jobs.store")->only("store");
        $this->middleware("can:admin.jobs.update")->only("update");
        $this->middleware("can:admin.jobs.destroy")->only("destroy");
        $this->middleware("can:admin.jobs.viewConfirmDelete")->only("viewConfirmDelete");
        $this->middleware("can:admin.jobs.inactive")->only("inactive");
        $this->middleware("can:admin.jobs.inactivate")->only("inactivate");
        $this->middleware("can:admin.jobs.activate")->only("activate");
    }



    public function index()
    {
        //



        $jobs = Job::where("status", 1)->OrderBy("id", "desc")->get();

        return view("admin.job.index",  compact("jobs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        //$departments = Departament::OrderBy("id", "desc")->where("status", 1)->get();
        $departments = Departament::where("status", '1')->pluck("name", 'id');

        return view("admin.job.create", compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJob $request)
    {
        //

        $job = Job::create($request->all());

        return redirect()->route("admin.jobs.index")->with("message", "Se creo el cargo o trabajo correctamente");
    }

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
    public function edit(Job $job)
    {
        //


        $departments = Departament::where("status", '1')->pluck("name", 'id');
        return view("admin.job.edit", compact("job", "departments"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //

        $request->validate([
            "name" => "required|unique:jobs,name,$job->id",

            "description" => "required",
            "departament_id" => "required",
        ]);

        $job->update($request->all());
        return redirect()->route("admin.jobs.index")->with("message", "Se actualizó correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //

        $job->delete();

        return redirect()->route("admin.jobs.index")->with("message-danger", "Se eliminó el cargo o trabajo PERMANENTEMENTE.");
    }

    public function inactive()
    {
        $jobs = Job::where("status", 0)->get();
        return view('admin.job.inactive', compact("jobs"));
    }

    public function inactivate($id)
    {
        $job = Job::find($id);

        $job->status = 0;
        $job->save();
        return redirect()->route("admin.jobs.index")->with("message-danger", "Se inhabilito el cargo o trabajo");
    }
    public function activate($id)
    {

        $job = Job::find($id);
        $job->status = 1;
        $job->save();

        return redirect()->route("admin.jobs.index")->with("message", "Se reestablecio el trabajo.");
    }


    public function viewConfirmDelete($id)
    {
        $job = Job::find($id);

        return view("admin.job.confirmDelete", compact("job"));
    }


    public function pdfList()
    {


        $actives = Job::where('status', 1)->get();
        $inactives = Job::where('status', 0)->get();
        $settings = Settings::find(1);
        $pdf = Pdf::loadView('admin.job.pdf.list', compact("actives", "inactives", "settings"));
        return $pdf->stream();
    }
}
