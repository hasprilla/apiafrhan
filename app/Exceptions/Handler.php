<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json([
            'res' => __('Loca datos proporcionados no son validos.'),
            'errores' => $exception->errors(),

        ], $exception->status);
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ModelNotFoundException) {
            return response()->json([
                'res' => false,
                'error' => 'Recurso no encontrado'
            ], 400);
        }

        if ($exception instanceof RouteNotFoundException) {
            return response()->json([
                'res' => false,
                'error' => 'No tiene permiso para acceder a esta ruta'
            ], 401);
        }

        return parent::render($request, $exception);
    }
}
