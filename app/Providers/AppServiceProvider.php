<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use DB;
use Hash;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('validateHash', function ($atribute, $value, $parameters, $validator) {
            return Hash::check($value, $parameters[0]);
        });

        Validator::extend('uniqueIfExternalCondition', function ($attribute, $value, $parameters, $validator) {
            /*
             * param[0]: main table
             * param[1]: secondary tables
             * param[3]: whereRaw
             */
            $result = DB::table($parameters[0])
                ->where($attribute, '=', $value)
                ->whereExists(function ($query) use($parameters) {
                    $query->select(DB::raw(1))
                        ->from($parameters[1])
                        ->whereRaw($parameters[2]);
                })->get();

            return $result->isEmpty();
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
