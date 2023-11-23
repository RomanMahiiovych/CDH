<?php

namespace App\Services\External\CompaniesAPI\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class PositionsException extends Exception
{
    /**
     * Create a new exception instance.
     *
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render(): JsonResponse
    {
        $errorMessage = "PositionsException: " . $this->getMessage();

        return response()->json([
            'error' => [
                'message' => $errorMessage,
                'code'    => $this->getCode(),
            ],
        ], $this->getCode());
    }
}
