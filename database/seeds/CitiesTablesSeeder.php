<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!App\Country::where('name','Spain')->exists()) {
            DB::table('countries')->insert([
                'id' => 1,
                'name'  => 'Spain',
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime
            ]);

            DB::table('regions')->insert([
                ['id' => 1, 'country_id' => 1,'name' => 'Albacete', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 2, 'country_id' => 1,'name' => 'Ciudad Real', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 3, 'country_id' => 1,'name' => 'Cuenca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 4, 'country_id' => 1,'name' => 'Guadalajara', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 5, 'country_id' => 1,'name' => 'Toledo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 6, 'country_id' => 1,'name' => 'Huesca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 7, 'country_id' => 1,'name' => 'Teruel', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 8, 'country_id' => 1,'name' => 'Zaragoza', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 9, 'country_id' => 1,'name' => 'Ceuta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 10, 'country_id' => 1,'name' => 'Madrid', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 11, 'country_id' => 1,'name' => 'Murcia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 12, 'country_id' => 1,'name' => 'Melilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 13, 'country_id' => 1,'name' => 'Navarra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 14, 'country_id' => 1,'name' => 'Almería', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 15, 'country_id' => 1,'name' => 'Cádiz', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 16, 'country_id' => 1,'name' => 'Córdoba', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 17, 'country_id' => 1,'name' => 'Granada', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 18, 'country_id' => 1,'name' => 'Huelva', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 19, 'country_id' => 1,'name' => 'Jaén', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 20, 'country_id' => 1,'name' => 'Málaga', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 21, 'country_id' => 1,'name' => 'Sevilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 22, 'country_id' => 1,'name' => 'Asturias', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 23, 'country_id' => 1,'name' => 'Cantabria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 24, 'country_id' => 1,'name' => 'Ávila', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 25, 'country_id' => 1,'name' => 'Burgos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 26, 'country_id' => 1,'name' => 'León', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 27, 'country_id' => 1,'name' => 'Palencia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 28, 'country_id' => 1,'name' => 'Salamanca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 29, 'country_id' => 1,'name' => 'Segovia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 30, 'country_id' => 1,'name' => 'Soria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 31, 'country_id' => 1,'name' => 'Valladolid', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 32, 'country_id' => 1,'name' => 'Zamora', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 33, 'country_id' => 1, 'name' => 'Barcelona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 34, 'country_id' => 1, 'name' => 'Gerona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 35, 'country_id' => 1, 'name' => 'Lérida', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 36, 'country_id' => 1, 'name' => 'Tarragona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 37, 'country_id' => 1, 'name' => 'Badajoz', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 38, 'country_id' => 1, 'name' => 'Cáceres', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 39, 'country_id' => 1, 'name' => 'Coruña, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 40, 'country_id' => 1, 'name' => 'Lugo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 41, 'country_id' => 1, 'name' => 'Orense', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 42, 'country_id' => 1, 'name' => 'Pontevedra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 43, 'country_id' => 1, 'name' => 'Rioja, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 44, 'country_id' => 1, 'name' => 'Baleares, Islas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 45, 'country_id' => 1, 'name' => 'Álava', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 46, 'country_id' => 1, 'name' => 'Guipúzcoa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 47, 'country_id' => 1, 'name' => 'Vizcaya', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 48, 'country_id' => 1, 'name' => 'Palmas, Las', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 49, 'country_id' => 1, 'name' => 'Tenerife, Santa Cruz De', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 50, 'country_id' => 1, 'name' => 'Alicante', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 51, 'country_id' => 1, 'name' => 'Castellón', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['id' => 52, 'country_id' => 1, 'name' => 'Valencia', 'created_at' => new DateTime, 'updated_at' => new DateTime]
            ]);

            // Some Valencia cities only
            DB::table('cities')->insert([
                ["id" => 1, "region_id" => 52, "name" => "Ademuz", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 2, "region_id" => 52, "name" => "Ador", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 3, "region_id" => 52, "name" => "Agullent", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 4, "region_id" => 52, "name" => "Aielo de Malferit", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 5, "region_id" => 52, "name" => "Aielo de Rugat", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 6, "region_id" => 52, "name" => "Alaquàs", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 7, "region_id" => 52, "name" => "Albaida", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 8, "region_id" => 52, "name" => "Albal", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 9, "region_id" => 52, "name" => "Albalat de la Ribera", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 10, "region_id" => 52, "name" => "Albalat dels Sorells", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 11, "region_id" => 52, "name" => "Albalat dels Tarongers", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 12, "region_id" => 52, "name" => "Alberic", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 13, "region_id" => 52, "name" => "Alborache", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 14, "region_id" => 52, "name" => "Alboraya", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 15, "region_id" => 52, "name" => "Albuixech", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 16, "region_id" => 52, "name" => "Alcàntera de Xúquer", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 17, "region_id" => 52, "name" => "Alcàsser", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 18, "region_id" => 52, "name" => "Alcublas", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 19, "region_id" => 52, "name" => "Alcúdia de Crespins, l'", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 20, "region_id" => 52, "name" => "Alcúdia, l'", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 21, "region_id" => 52, "name" => "Aldaia", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 22, "region_id" => 52, "name" => "Alfafar", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 23, "region_id" => 52, "name" => "Alfara de la Baronia", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 24, "region_id" => 52, "name" => "Alfara del Patriarca", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 25, "region_id" => 52, "name" => "Alfarp", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 26, "region_id" => 52, "name" => "Alfarrasí", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 27, "region_id" => 52, "name" => "Alfauir", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 28, "region_id" => 52, "name" => "Algar de Palancia", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 29, "region_id" => 52, "name" => "Algemesí", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 30, "region_id" => 52, "name" => "Algimia de Alfara", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 31, "region_id" => 52, "name" => "Alginet", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 32, "region_id" => 52, "name" => "Almàssera", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 33, "region_id" => 52, "name" => "Almiserà", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 34, "region_id" => 52, "name" => "Almoines", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 35, "region_id" => 52, "name" => "Almussafes", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 36, "region_id" => 52, "name" => "Alpuente", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 37, "region_id" => 52, "name" => "Alqueria de la Comtessa, l'", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 38, "region_id" => 52, "name" => "Alzira", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 39, "region_id" => 52, "name" => "Andilla", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 40, "region_id" => 52, "name" => "Anna", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 41, "region_id" => 52, "name" => "Antella", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 42, "region_id" => 52, "name" => "Aras de los Olmos", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 43, "region_id" => 52, "name" => "Atzeneta d'Albaida", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 44, "region_id" => 52, "name" => "Ayora", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 45, "region_id" => 52, "name" => "Barx", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 46, "region_id" => 52, "name" => "Barxeta", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 47, "region_id" => 52, "name" => "Bèlgida", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 48, "region_id" => 52, "name" => "Bellreguard", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 49, "region_id" => 52, "name" => "Bellús", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 50, "region_id" => 52, "name" => "Benagéber", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 51, "region_id" => 52, "name" => "Benaguasil", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 52, "region_id" => 52, "name" => "Benavites", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 53, "region_id" => 52, "name" => "Beneixida", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 54, "region_id" => 52, "name" => "Benetússer", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 55, "region_id" => 52, "name" => "Beniarjó", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 56, "region_id" => 52, "name" => "Beniatjar", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 57, "region_id" => 52, "name" => "Benicolet", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 58, "region_id" => 52, "name" => "Benicull de Xúquer", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 59, "region_id" => 52, "name" => "Benifaió", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 60, "region_id" => 52, "name" => "Benifairó de la Valldigna", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 61, "region_id" => 52, "name" => "Benifairó de les Valls", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 62, "region_id" => 52, "name" => "Beniflá", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 63, "region_id" => 52, "name" => "Benigánim", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 64, "region_id" => 52, "name" => "Benimodo", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 65, "region_id" => 52, "name" => "Benimuslem", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 66, "region_id" => 52, "name" => "Beniparrell", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 67, "region_id" => 52, "name" => "Benirredrà", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 68, "region_id" => 52, "name" => "Benisanó", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 69, "region_id" => 52, "name" => "Benissoda", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 70, "region_id" => 52, "name" => "Benisuera", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 71, "region_id" => 52, "name" => "Bétera", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 72, "region_id" => 52, "name" => "Bicorp", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 73, "region_id" => 52, "name" => "Bocairent", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 74, "region_id" => 52, "name" => "Bolbaite", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 75, "region_id" => 52, "name" => "Bonrepòs i Mirambell", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 76, "region_id" => 52, "name" => "Bufali", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 77, "region_id" => 52, "name" => "Bugarra", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 78, "region_id" => 52, "name" => "Buñol", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 79, "region_id" => 52, "name" => "Burjassot", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 80, "region_id" => 52, "name" => "Calles", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 81, "region_id" => 52, "name" => "Camporrobles", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 82, "region_id" => 52, "name" => "Canals", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 83, "region_id" => 52, "name" => "Canet d'En Berenguer", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 84, "region_id" => 52, "name" => "Carcaixent", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 85, "region_id" => 52, "name" => "Càrcer", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 86, "region_id" => 52, "name" => "Carlet", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 87, "region_id" => 52, "name" => "Carrícola", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 88, "region_id" => 52, "name" => "Casas Altas", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 89, "region_id" => 52, "name" => "Casas Bajas", "created_at" => new DateTime, "updated_at" => new DateTime],
                ["id" => 90, "region_id" => 52, "name" => "Casinos", "created_at" => new DateTime, "updated_at" => new DateTime],
            ]);

        }
    }
}
