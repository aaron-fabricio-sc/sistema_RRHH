<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;


class SettingsContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $settings = Settings::find(1);

        return view("admin.settings.settingsHours", compact("settings"));
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
        //
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





        $setting = Settings::find($id);

        $request->validate([
            'entrance' => 'required',
            'departure' => 'required',
            'totalLicenseDays' => 'required',
            'arrivalTolerance' => 'required'
        ]);

        $setting->entrance = $request->entrance;
        $setting->departure = $request->departure;
        $setting->totalLicenseDays = $request->totalLicenseDays;
        $setting->arrivalTolerance = $request->arrivalTolerance;


        $setting->update();
        return redirect()->route("admin.settings.index")->with("message", "Se actualizó la configuración.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function viewSettingsHours()
    {
    }

    public function getViewSettingsCompany()
    {
        $settings = Settings::find(1);

        return view("admin.settings.dataCompany", compact("settings"));
    }

    public function updateDataCompany(Request $request)
    {

        $setting = Settings::find(1);
        $request->validate([
            'company_logo' => 'image|nullable', // Asegúrate de validar el archivo como una imagen
            'company_name' => 'required',
            'company_email' => 'required',
            'company_phone' => 'required',
            'company_address' => 'required',
            'company_message' => 'required',

        ]);

        if ($request->hasFile('company_logo')) {
            $file = $request->file('company_logo');
            $image = file_get_contents($file);
            $base64 = base64_encode($image);

            // Aquí puedes guardar $base64 en tu base de datos o hacer lo que necesites con él
        }



        $setting->company_logo = $base64;
        $setting->company_name = $request->company_name;
        $setting->company_email = $request->company_email;
        $setting->company_phone = $request->company_phone;
        $setting->company_address = $request->company_address;
        $setting->company_message = $request->company_message;
        $setting->update();
        return redirect()->route("admin.settings.getViewSettingsCompany")->with("message", "Se actualizó la configuración.");
    }
}
