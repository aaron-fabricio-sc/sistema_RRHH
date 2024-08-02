<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class settingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $settings = new Settings();

        $settings->entrance = "08:00:00";
        $settings->departure = "18:00:00";
        $settings->totalLicenseDays = 16;
        $settings->arrivalTolerance = "40";
        $settings->company_name = "Default Company Name";

        $settings->company_email = "Default Company Email";
        $settings->company_phone = "Default Company Phone";
        $settings->company_address = "Default Company Address";
        $settings->company_message = "Default Company Message";


        $settings->save();
    }
}
