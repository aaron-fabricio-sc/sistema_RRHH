<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\StoreEmployee;
use App\Models\CiExtension;
use App\Models\Contract;
use App\Models\Departament;
use App\Models\Employee;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware("can:admin.employees.index")->only("index");
        $this->middleware("can:admin.employees.edit")->only("edit");
        $this->middleware("can:admin.employees.create")->only("create");
        $this->middleware("can:admin.employees.show")->only("show");
        $this->middleware("can:admin.employees.store")->only("store");
        $this->middleware("can:admin.employees.update")->only("update");
        $this->middleware("can:admin.employees.destroy")->only("destroy");
        $this->middleware("can:admin.employees.viewConfirmDelete")->only("viewConfirmDelete");
        $this->middleware("can:admin.employees.inactive")->only("inactive");
        $this->middleware("can:admin.employees.inactivate")->only("inactivate");
        $this->middleware("can:admin.employees.activate")->only("activate");
        $this->middleware("can:admin.employees.viewAssignUser")->only("viewAssignUser");
        $this->middleware("can:admin.employees.assignUser")->only("assignUser");
    }
    public function index()
    {
        //


        $employees = Employee::where("status", 1)->OrderBy("id", "desc")->get();


        return  view("admin.employee.index", compact("employees"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $gender = [
            "Masculino" => "Masculino",
            "Femenino" => "Femenino",

        ];

        $type_documents = [
            "Documento Nacional" => "Documento Nacional",
            "Documento Extranjero" => "Documento Extranjero",


        ];

        $ci_extensions = CiExtension::where("status", 1)->pluck("extension", "id");

        $depatments = Departament::where("status", 1)->pluck("name", "id");

        $contracts = Contract::where("status", 1)->pluck("type_contract", "id");


        $jobs = Job::where("status", 1)->pluck("name", 'id');
        return view("admin.employee.create", compact("gender", "type_documents", "ci_extensions", "depatments", "contracts", "jobs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployee $request)
    {
        //

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->firts_last_name = $request->firts_last_name;
        $employee->second_last_name = $request->second_last_name;
        $employee->birthdate = $request->birthdate;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->type_document = $request->type_document;
        $employee->document_number = $request->document_number;
        $employee->document_complement = $request->document_complement;
        $employee->ci_extension_id = $request->ci_extension_id;
        $employee->address_1 = $request->address_1;
        $employee->address_2 = $request->address_2;
        $employee->previous_work_details = $request->previous_work_details;
        $employee->start_date = $request->start_date;
        $employee->additional_employee_details = $request->additional_employee_details;
        $employee->department_id = $request->department_id;

        $employee->contract_id = $request->contract_id;
        $employee->job_id = $request->job_id;

        if ($request->hasFile('cv')) {
            $archivo = $request->file('cv');
            $archivo->move(public_path() . "/archivos//", $archivo->getClientOriginalName());
            $employee->cv = $archivo->getClientOriginalName();
        }

        if ($request->hasFile('image')) {
            $archivo = $request->file('image');
            $archivo->move(public_path() . "/imagenes//", $archivo->getClientOriginalName());
            $employee->image = $archivo->getClientOriginalName();
        }

        $employee->save();
        return redirect()->route("admin.employees.index")->with("message", "Se Creó el empleado correctamente.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //


        return view("admin.employee.show", compact("employee"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //

        $gender = [
            "Masculino" => "Masculino",
            "Femenino" => "Femenino",

        ];

        $type_documents = [
            "Documento Nacional" => "Documento Nacional",
            "Documento Extranjero" => "Documento Extranjero",


        ];

        $ci_extensions = CiExtension::where("status", 1)->pluck("extension", "id");

        $depatments = Departament::where("status", 1)->pluck("name", "id");

        $contracts = Contract::where("status", 1)->pluck("type_contract", "id");
        $jobs = Job::where("status", 1)->pluck("name", 'id');
        return view("admin.employee.edit", compact("employee", "gender", "type_documents", "ci_extensions", "depatments", "contracts", "jobs"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEmployee $request, Employee $employee)
    {
        //



        $employee->name = $request->name;
        $employee->firts_last_name = $request->firts_last_name;
        $employee->second_last_name = $request->second_last_name;
        $employee->birthdate = $request->birthdate;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->type_document = $request->type_document;
        $employee->document_number = $request->document_number;
        $employee->document_complement = $request->document_complement;
        $employee->ci_extension_id = $request->ci_extension_id;
        $employee->address_1 = $request->address_1;
        $employee->address_2 = $request->address_2;
        $employee->previous_work_details = $request->previous_work_details;
        $employee->start_date = $request->start_date;
        $employee->additional_employee_details = $request->additional_employee_details;
        $employee->department_id = $request->department_id;

        $employee->contract_id = $request->contract_id;
        $employee->job_id = $request->job_id;

        if ($request->hasFile('cv')) {
            $archivo = $request->file('cv');
            $archivo->move(public_path() . "/archivos//", $archivo->getClientOriginalName());
            $employee->cv = $archivo->getClientOriginalName();
        }

        if ($request->hasFile('image')) {
            $archivo = $request->file('image');
            $archivo->move(public_path() . "/imagenes//", $archivo->getClientOriginalName());
            $employee->image = $archivo->getClientOriginalName();
        }

        $employee->update();
        return redirect()->route("admin.employees.index")->with("message", "Se actualizó el empleado correctamente.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //


        $rutacv = public_path() . "/archivos//" . $employee->cv;
        $rutaimage = public_path() . "/imagenes//" . $employee->image;




        if (file_exists($rutaimage)) {

            if (unlink($rutaimage)) {
            } else {
                return 'Ha ocurrido un error al intentar eliminar la imagen.';
            }
        }

        if (file_exists($rutacv)) {
            if (unlink($rutacv)) {
            } else {
                return 'Ha ocurrido un error al intentar eliminar la imagen.';
            }
        }

        $employee->delete();
        return redirect()->route("admin.employees.index")->with("message-danger", "Se eliminó el empleado PERMANENTEMENTE.");
    }

    public function inactive()
    {

        $employees = Employee::where("status", 0)->OrderBy("id", "desc")->get();
        return view("admin.employee.inactive", compact("employees"));
    }
    public function inactivate($id)
    {
        $employee = Employee::find($id);

        $employee->status = 0;
        $employee->save();

        return redirect()->route("admin.employees.index")->with("message-danger", "Se inhabilitó el empleado");
    }

    public function activate($id)
    {
        $employee = Employee::find($id);

        $employee->status = 1;
        $employee->save();

        return redirect()->route("admin.employees.index")->with("message", "Se reestableció el empleado");
    }

    public function viewConfirmDelete($id)
    {

        $employee = Employee::find($id);

        return view("admin.employee.confirmDelete", compact("employee"));
    }

    public function viewAssignUser($id)
    {

        $employee = Employee::find($id);


        $users = User::pluck("name", "id");

        return view("admin.employee.assignUser", compact("employee", "users"));
    }

    public function assignUser(Request $request, $id)
    {

        $employee = Employee::find($id);

        $employee->user_id = $request->user_id;
        $employee->update();

        return redirect()->route("admin.employees.index")->with("message", "Se asignó un usuario al empleado.");
    }
}
