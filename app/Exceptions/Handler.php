<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;
use Exception;
use Carbon\Carbon;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        Log::warning("Error");
        $this->reportable(function (Throwable $e) {

        });
    }

    public function render($request, Throwable $exception)
    {
//        try{
//            $line = $exception->getLine();
//            $file = $exception->getFile();
//            $browser = $request->header('User-Agent');
//            $data = [
//                'ip'       => \Request::ip(),
//                'app_name' => env('APP_NAME'),
//                'line'     => $line,
//                'file'     => $file,
//                'content_text'  => $exception->getMessage(),
//                'browser'  => $browser,
//                'created_at'  => Carbon::now()
//            ];
//            $response = Http::post(env('APP_URL_API_LOG'),$data);
//        }catch (\Exception $exception)
//        {
//
//        }

        return parent::render($request, $exception);
    }
}
