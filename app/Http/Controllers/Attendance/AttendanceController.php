<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\Attendances;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Settings;
use DateTime;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * 
     * 
     */


    public function __construct()
    {
        $this->middleware("can:attendances.index")->only("index");
        $this->middleware("can:attendances.edit")->only("edit");
        $this->middleware("can:attendances.create")->only("create", "store");

        $this->middleware("can:attendances.show")->only("show");

        $this->middleware("can:attendances.update")->only("update");
        $this->middleware("can:attendances.destroy")->only("destroy");
    }
    public function index()
    {
        //

        $attendances = Attendances::all();



        return view("attendance.index", compact("attendances"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //



        return view("attendance.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  

        $settings = Settings::find(1);

        $entrance = $settings->entrance;
        $departure = $settings->departure;

        $arrivalTolerance = $settings->arrivalTolerance;
        $attendance = new Attendances();
        $date =  Date("Y-m-d");
        $entrada =  Date("H:i:s");
        $attendanceDate = Attendances::where("employee_id", $request->employee_id)->whereDate("fecha", $date)->first();
        if ($attendanceDate) {
            return redirect()->route("attendances.create")->with("message-danger", "Usted hoy ya registró su entrada el día de hoy.");
        } else {
            $attendance->fecha = $date;

            $attendance->entrada = $entrada;

            $entradaSettings = new DateTime($entrance);
            $entradaRegistro = new DateTime($entrada);
            $interval = $entradaSettings->diff($entradaRegistro);
            $minutes = $interval->h * 60 + $interval->i;

            if ($entradaRegistro < $entradaSettings) {
                $attendance->tipo_asistencia = "Temprano";
            }

            if ($entradaRegistro > $entradaSettings && $minutes < $arrivalTolerance) {
                $attendance->tipo_asistencia = "Puntual";
            }
            if ($entradaRegistro > $entradaSettings && $minutes > $arrivalTolerance) {
                $attendance->tipo_asistencia = "Tarde";
            }

            $attendance->minutos_diferencia = $minutes;
            $attendance->employee_id = $request->employee_id;



            $attendance->save();

            return redirect()->route("attendances.create")->with("message", "Se regristró su entrada.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $attendances = Attendances::where("employee_id", $id)->get();
        $nameEmployee = Employee::find($id);
        return view("attendance.show", compact("attendances", "nameEmployee"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function salida(Request $request)
    {

        $fecha = Date("Y-m-d");

        $salida = Date("H:i:s");
        $attendanceDate = Attendances::where("employee_id", $request->employee_id)->whereDate("fecha", $fecha)->whereNotNull("salida")->first();


        if ($attendanceDate) {
            return redirect()->route("attendances.create")->with("message-danger", "Usted ya registró su salida el día de hoy.");
        } else {
            $attendances = Attendances::where("employee_id", $request->employee_id)->whereDate("fecha", $fecha)->where("salida", null)->first();


            $attendances->salida = $salida;

            $attendances->save();

            return redirect()->route("attendances.create")->with("message", "Se regristró su Salida.");
        }
    }

    public function viewReports()
    {

        $month = [
            "01" => "Enero",
            "02" => "Febrero",
            "03" => "Marzo",
            "04" => "Abril",
            "05" => "Mayo",
            "06" => "Junio",
            "07" => "Julio",
            "08" => "Agosto",
            "09" => "Septiembre",
            "10" => "Octubre",
            "11" => "Noviembre",
            "12" => "Diciembre",


        ];
        $years = array();

        for ($year = 2021; $year <= 2060; $year++) {
            $years[$year] = $year;
        }


        return view("attendance.reports", compact("month", "years"));
    }

    public function dataReport(Request $request)
    {

        $month = $request->month;
        $year = $request->year;




        $employeeAttendance = Attendances::where("employee_id", $request->employee_id)->whereYear("fecha", $request->year)->whereMonth("fecha", $request->month)->get();

        $employee = Employee::find($request->employee_id);

        $settings = Settings::find(1);

        $pdf = Pdf::loadView('attendance.pdf.report', compact("employeeAttendance", "employee", "month", "year", "settings"));
        return $pdf->stream();
    }
}
