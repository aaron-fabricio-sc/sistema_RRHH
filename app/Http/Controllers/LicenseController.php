<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLicense;
use App\Models\Employee;
use App\Models\License;
use DateTime;
use DateInterval;
use DatePeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Settings;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware("can:admin.licenses.index")->only("index");
        $this->middleware("can:admin.licenses.edit")->only("edit");
        $this->middleware("can:admin.licenses.create")->only("create");
        $this->middleware("can:admin.licenses.show")->only("show");
        $this->middleware("can:admin.licenses.store")->only("store");
        $this->middleware("can:admin.licenses.update")->only("update");
        $this->middleware("can:admin.licenses.destroy")->only("destroy");
        $this->middleware("can:admin.licenses.viewConfirmDelete")->only("viewConfirmDelete");
        $this->middleware("can:admin.licenses.inactive")->only("inactive");
        $this->middleware("can:admin.licenses.inactivate")->only("inactivate");
        $this->middleware("can:admin.licenses.activate")->only("activate");



        $this->middleware("can:admin.licenses.requetsView")->only("requetsView");
        $this->middleware("can:admin.licenses.requets")->only("requets");

        $this->middleware("can:admin.licenses.activityLicenses")->only("activityLicenses");




        $this->middleware("can:admin.licenses.confirmLicense")->only("confirmLicense");

        $this->middleware("can:admin.licenses.refuseLicense")->only("refuseLicense");
        $this->middleware("can:admin.licenses.refuseLicense")->only("allLicenses");
    }
    public function index()
    {
        //

        $licenses = License::where("status", 1)->OrderBy("id", "desc")->get();

        return view("admin.license.index", compact("licenses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("admin.license.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $license = License::create($request->all());
        return redirect()->route("admin.licenses.index")->with("message", "Se creo correctamente la licencia.");
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
    public function edit(License $license)
    {
        //


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, License $license)
    {
        //

        $request->validate([
            "type_license" => "required",
            "description" => "required"
        ]);


        $license->update($request->all());

        return redirect()->route("admin.licenses.index")->with("message", "Se actualizó la licencia.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function inactive()
    {
        $licenses = License::where("status", 0)->OrderBy("id", "desc")->get();

        return view("admin.license.inactive", compact("licenses"));
    }

    public function viewConfirmDelete(string $id)
    {

        $license = License::find($id);

        return view("admin.license.confirmDelete", compact("license"));
    }




    public function inactivate(string $id)
    {
        $license = License::find($id);

        $license->status = 0;

        $license->save();

        return redirect()->route("admin.licenses.index")->with("message-danger", "Se inhabilitó la licencia.");
    }

    public function activate(string $id)
    {

        $license = License::find($id);

        $license->status = 1;

        $license->save();

        return redirect()->route("admin.licenses.index")->with("message", "Se habilito la licencia.");
    }

    public function requetsView()
    {
        $userId = Auth::id();

        $licenses = License::where("status", 1)->pluck("type_license", "id");
        return view("admin.license.requetsView", compact("userId", "licenses"));
    }

    public function requets(Request $request)
    {
        $settings = Settings::first();
        $maxDays = $settings->totalLicenseDays;

        $userId = $request->userId;
        $licenseId = $request->type_license;
        $start_date = $request->start_date;
        $final_date = $request->final_date;


        $start = new DateTime($start_date);
        $end = new DateTime($final_date);
        if ($end < $start) {
            return redirect()->route("admin.licenses.requetsView")->with("message-danger", "La fecha final es menor que la fecha inicial.");
        }
        $end->modify('+1 day'); // Incluir el día final en el cálculo

        $interval = new DateInterval('P1D');
        $period = new DatePeriod($start, $interval, $end);

        $businessDays = 0;

        foreach ($period as $date) {
            if ($date->format('N') < 6) { // 6 y 7 son sábado y domingo
                $businessDays++;
            }
        }



        $days = $businessDays;


        $employee = Employee::where("user_id", $userId)->first();



        if (!$employee) {
            return redirect()->route("admin.licenses.requetsView")->with("message-danger", "No estas vinculado a un Empleado.");
        } else if ($days > $maxDays) {
            return redirect()->route("admin.licenses.requetsView")->with("message-danger", "No puede sobrepasar los dias maximos de licencias.");
        } else {

            $employee->licenses()->attach($licenseId, [
                "start_date" => $start_date,
                "final_date" => $final_date,
                "days" => $days,

            ]);
            return redirect()->route("admin.licenses.requetsView")->with("message", "Solicitud enviada correctamente.");
        }
    }

    public function activityLicenses()
    {
        $userId = Auth::id();
        $employee = Employee::where("user_id", $userId)->first();


        if (is_null($employee)) {
            return redirect()->route("news.index")->with("message-danger", "No estas vinculado a un empleado.");
        }


        $licenses = $employee->licenses()->withPivot('start_date', 'final_date', 'status_license', 'status_license', 'status')->get();




        return view("admin.license.stateLicenses", compact("licenses"));
    }


    public function filterLicense(Request $request)
    {

        //$employees = Employee::where("status", 1)->pluck("name", "id");
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

        return view("admin.license.filterLicense", compact("month", "years"));
    }

    public function filterLicenseReport(Request $request)
    {
        $request->validate([
            "employee_id" => "required",
            "month" => "required",
            "year" => "required"
        ]);

        $employee_id = $request->employee_id;
        $month = $request->month;
        $year = $request->year;


        $settings = Settings::first();

        $licenses = DB::table('employee_license')
            ->where('employee_id', $employee_id)
            ->whereRaw('MONTH(final_date) = ?', [$month])
            ->whereRaw('YEAR(final_date) = ?', [$year])
            ->join('licenses', 'employee_license.license_id', '=', 'licenses.id')
            ->get();

        $maximoDias = $settings->totalLicenseDays;
        $count = 0;
        $diferencia = 0;

        $totalDiasTomados = 0;


        foreach ($licenses as $license) {
            if ($license->status_license == 2) {
                $count++;
                $totalDiasTomados += $license->days;
            }
        }


        $diferencia = abs($maximoDias - $totalDiasTomados);

        $settings = Settings::find(1);

        $employee = Employee::find($employee_id);

        $pdf = Pdf::loadView('admin.license.pdf.report', compact("employee", "licenses", "month", "year", "count", "diferencia", "maximoDias", "totalDiasTomados", "settings"));
        return $pdf->stream();
    }
    public function allLicenses()
    {

        $allLicenses = DB::table("employee_license")->get();


        //        return $allLicenses;



        return view("admin.license.allLicenses", compact("allLicenses"));
    }

    public function confirmLicense($data)
    {


        $decodedData = json_decode(base64_decode($data));
        // return $decodedData;
        $idEmployee = $decodedData->employee_id;
        $idLicense = $decodedData->license_id;
        $dateInit = $decodedData->start_date;
        $dateFinal = $decodedData->final_date;



        DB::table('employee_license')
            ->where('employee_id', $idEmployee)
            ->where('license_id', $idLicense)
            ->where('start_date', $dateInit)
            ->where("final_date", $dateFinal)
            ->update(['status_license' => 2]);





        return redirect()->route("admin.licenses.allLicenses")->with("message", "Solicitud  aceptada.");
    }

    public function refuseLicense($data)
    {
        $decodedData = json_decode(base64_decode($data));

        $idEmployee = $decodedData->employee_id;
        $idLicense = $decodedData->license_id;
        $dateInit = $decodedData->start_date;
        $dateFinal = $decodedData->final_date;

        DB::table('employee_license')
            ->where('employee_id', $idEmployee)
            ->where('license_id', $idLicense)
            ->where('start_date', $dateInit)
            ->where("final_date", $dateFinal)
            ->update(['status_license' => 1]);

        return redirect()->route("admin.licenses.allLicenses")->with("message-danger", "Solicitud  rechazada.");
    }
}
