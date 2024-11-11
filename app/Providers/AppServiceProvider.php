<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
         //Macro for success message
         Response::macro('success',function($message, $data =[], $statusCode = 200){
            return response()->json([
                'status'=>true,
                'message'=>$message,
                'data'=>$data
            ], $statusCode)  ;
        });

            //Macro for Error Message
        Response::macro('error',function($message, $data =[], $statusCode = 404){
                return response()->json([
                    'status'=>false,
                    'message'=>$message,
                    'data'=>$data
                ], $statusCode)  ;
        });

    }
}
