<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Department;
use App\Http\Requests\StoreDepartment;
use Illuminate\Http\Request;
use App\Models\Departament;
use Illuminate\Support\Facades\Auth;
use App\Models\Settings;
use Barryvdh\DomPDF\Facade\Pdf;

class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware("can:admin.departments.index")->only("index");
        $this->middleware("can:admin.departments.edit")->only("edit");
        $this->middleware("can:admin.departments.create")->only("create");
        $this->middleware("can:admin.departments.show")->only("show");
        $this->middleware("can:admin.departments.store")->only("store");
        $this->middleware("can:admin.departments.update")->only("update");
        $this->middleware("can:admin.departments.destroy")->only("destroy");
        $this->middleware("can:admin.departments.viewConfirmDelete")->only("viewConfirmDelete");
        $this->middleware("can:admin.departments.inactive")->only("inactive");
        $this->middleware("can:admin.departments.inactivate")->only("inactivate");
        $this->middleware("can:admin.departments.activate")->only("activate");
    }
    public function index()
    {
        //
        $departments = Departament::where('status', 1)->OrderBy('id', 'desc')->get();


        /* return view("admin.department.index", compact('departments')); */

        return view('admin.department.index', compact('departments'));
    }
    public function inactive()
    {
        $departments = Departament::where('status', 0)->OrderBy('id', 'desc')->get();

        return view("admin.department.inactive", compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function activate($id)
    {

        $department = Departament::find($id);
        $department->status = 1;
        $department->save();
        return redirect()->route('admin.departments.index');
    }
    public function create()
    {
        //
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartment $request)
    {
        //

        $department = Departament::create($request->all());

        return redirect()->route('admin.departments.index')->with("message", "Se creó el departamento correctamente.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Departament $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departament $department)
    {
        //


        return view('admin.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departament $department)
    {
        //

        $request->validate([
            'name' => "required|unique:departaments,name,$department->id",

            'description' => "required",
        ]);

        $department->name = $request->name;

        $department->description = $request->description;
        $department->update();

        return redirect()->route('admin.departments.index')->with("message", "Se actualizó el departamento correctamente.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departament $department)
    {
        //

        $department->delete();

        return redirect()->route("admin.departments.index")->with("message-danger", "Se eliminó el departamento PERMANENTEMENTE.");
    }

    public function inactivate($id)
    {



        $department = Departament::find($id);


        $department->status = 0;
        $department->save();

        return redirect()->route('admin.departments.index')->with("message-danger", "Se inhabilito el Departamento.");
    }

    public function viewConfirmDelete($id)
    {

        $department = Departament::find($id);

        return view("admin.department.confirmDelete", compact("department"));
    }


    public function pdfList()
    {


        $actives = Departament::where('status', 1)->get();
        $inactives = Departament::where('status', 0)->get();
        $settings = Settings::find(1);
        $pdf = Pdf::loadView('admin.department.pdf.pdf', compact("actives", "inactives", "settings"));
        return $pdf->stream();
    }
}
