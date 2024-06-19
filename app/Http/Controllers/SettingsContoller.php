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


        $setting->update($request->all());
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
}
