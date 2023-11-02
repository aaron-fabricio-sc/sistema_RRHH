<?php

namespace Database\Seeders;

use App\Models\CiExtension;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CiExtensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $lapaz = new CiExtension();
        $lapaz->extension = "LP";
        $lapaz->name = "LA PAZ";


        $lapaz->save();
        $oruro = new Ciextension();
        $oruro->extension = "OR";
        $oruro->name = "ORURO";


        $oruro->save();

        $cochabamba = new Ciextension();
        $cochabamba->extension = "CB";
        $cochabamba->name = "COCHABAMBA";


        $cochabamba->save();

        $santa = new Ciextension();
        $santa->extension = "SC";
        $santa->name = "SANTA CRUZ";


        $santa->save();

        $potosi = new Ciextension();
        $potosi->extension = "PT";
        $potosi->name = "POTOSI";



        $potosi->save();

        $beni = new Ciextension();
        $beni->extension = "BN";
        $beni->name = "BENI";

        $beni->save();

        $pando = new Ciextension();
        $pando->extension = "PA";
        $pando->name = "PANDO";


        $pando->save();

        $chuquisaca = new Ciextension();
        $chuquisaca->extension = "CH";
        $chuquisaca->name = "CHUQUISACA";



        $chuquisaca->save();

        $tarija = new Ciextension();
        $tarija->extension = "TJ";
        $tarija->name = "TARIJA";



        $tarija->save();
    }
}
