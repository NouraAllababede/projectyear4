<?php

namespace App\Exceptions;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
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
            // تحديد مستوى السجل بشكل آمن
            $level = 'error';

            // تخصيص المستوى بناءً على نوع الاستثناء
            if ($e instanceof \Illuminate\Database\QueryException) {
                $level = 'critical';
            }

            // استخدام logger بدون facade لتجنب A facade root has not been set
            app('log')->log($level, $e->getMessage(), [
                'exception' => $e,
                'context' => $this->buildExceptionContext($e),
            ]);
        });
    }
}