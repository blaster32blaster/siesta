<?php

namespace Castlebranch\Siesta;

/**
 * Class RespondsWithErrors
 * @package App\Http\Base
 */
trait RespondsWithErrors
{
    /**********************************************
     * Client Errors (4xx)
     **********************************************/
    /**
     * Respond with a 400 Bad Request error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorBadRequest($message = 'Bad Request')
    {
        return $this->respondWithError($message, 400);
    }

    /**
     * Respond with a 401 Unauthorized error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorUnauthorized($message = 'Unauthorized')
    {
        return $this->respondWithError($message, 401);
    }

    /**
     * Respond with a 402 Payment Required error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorPaymentRequired($message = 'Payment Required')
    {
        return $this->respondWithError($message, 402);
    }

    /**
     * Respond with a 403 Forbidden error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorForbidden($message = 'Forbidden')
    {
        return $this->respondWithError($message, 403);
    }

    /**
     * Respond with a 404 Not Found error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorNotFound($message = 'Not Found')
    {
        return $this->respondWithError($message, 404);
    }

    /**
     * Respond with a 405 Method Not Allowed error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorMethodNotAllowed($message = 'Method Not Allowed')
    {
        return $this->respondWithError($message, 405);
    }

    /**
     * Respond with a 406 Not Acceptable error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorNotAcceptable($message = 'Not Acceptable')
    {
        return $this->respondWithError($message, 406);
    }

    /**
     * Respond with a 407 Proxy Authentication Required error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorProxyAuthenticationRequired($message = 'Proxy Authentication Required')
    {
        return $this->respondWithError($message, 407);
    }

    /**
     * Respond with a 408 Request Timeout error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorRequestTimeout($message = 'Request Timeout')
    {
        return $this->respondWithError($message, 408);
    }

    /**
     * Respond with a 409 Conflict error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorConflict($message = 'Conflict')
    {
        return $this->respondWithError($message, 409);
    }

    /**
     * Respond with a 410 Gone error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorGone($message = 'Gone')
    {
        return $this->respondWithError($message, 410);
    }

    /**
     * Respond with a 411 Length Required.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorLengthRequired($message = 'Length Required')
    {
        return $this->respondWithError($message, 411);
    }

    /**
     * Respond with a 412 Precondition Failed error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorPreconditionFailed($message = 'Precondition Failed')
    {
        return $this->respondWithError($message, 412);
    }

    /**
     * Respond with a 413 Payload Too Large error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorPayloadTooLarge($message = 'Payload Too Large')
    {
        return $this->respondWithError($message, 413);
    }

    /**
     * Respond with a 414 URI Too Long error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorUriTooLong($message = 'URI Too Long')
    {
        return $this->respondWithError($message, 414);
    }

    /**
     * Respond with a 415 Unsupported Media Type error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorUnsupportedMediaType($message = 'Unsupported Media Type')
    {
        return $this->respondWithError($message, 415);
    }

    /**
     * Respond with a 417 Expectation Failed error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorExpectationFailed($message = 'Expectation Failed')
    {
        return $this->respondWithError($message, 417);
    }

    /**
     * Respond with a 418 I'm a Teapot error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorTeapot($message = "I'm a Teapot")
    {
        return $this->respondWithError($message, 418);
    }

    /**
     * Respond with a 421 Misdirected Request error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorMisdirectedRequest($message = 'Misdirected Request')
    {
        return $this->respondWithError($message, 421);
    }

    /**
     * Respond with a 422 Unprocesssable Entity error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorUnprocessableEntity($message = 'Unprocesssable Entity')
    {
        return $this->respondWithError($message, 422);
    }

    /**
     * Respond with a 423 Locked error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorLocked($message = 'Locked')
    {
        return $this->respondWithError($message, 423);
    }

    /**
     * Respond with a 424 Failed Dependency error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorFailedDependency($message = 'Failed Dependency')
    {
        return $this->respondWithError($message, 424);
    }

    /**
     * Respond with a 426 Upgrade Required error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorUpgradeRequired($message = 'Upgrade Required')
    {
        return $this->respondWithError($message, 426);
    }

    /**
     * Respond with a 428 Precondition Required error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorPreconditionRequired($message = 'Precondition Required')
    {
        return $this->respondWithError($message, 428);
    }

    /**
     * Respond with a 429 Too Many Requests error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorTooManyRequests($message = 'Too Many Requests')
    {
        return $this->respondWithError($message, 429);
    }

    /**
     * Respond with a 431 Request Header Fields Too Large error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorRequestHeaderFieldsTooLarge($message = 'Request Header Fields Too Large')
    {
        return $this->respondWithError($message, 431);
    }

    /**
     * Respond with a 451 Unavailable For Legal Reasons error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorUnavailableForLegalReasons($message = 'Unavailable For Legal Reasons')
    {
        return $this->respondWithError($message, 451);
    }

    /**********************************************
     * Server Errors (5xx)
     **********************************************/
    /**
     * Respond with a 500 Internal Server Error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorInternalServerError($message = 'Internal Server Error')
    {
        return $this->respondWithError($message, 500);
    }

    /**
     * Respond with a 501 Not Implemented error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorNotImplemented($message = 'Not Implemented')
    {
        return $this->respondWithError($message, 501);
    }

    /**
     * Respond with a 502 Bad Gateway error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorBadGateway($message = 'Bad Gateway')
    {
        return $this->respondWithError($message, 502);
    }

    /**
     * Respond with a 503 Service Unavailable error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorServiceUnavailable($message = 'Service Unavailable')
    {
        return $this->respondWithError($message, 503);
    }

    /**
     * Respond with a 504 Gateway Timeout error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorGatewayTimeout($message = 'Gateway Timeout')
    {
        return $this->respondWithError($message, 504);
    }

    /**
     * Respond with a 505 HTTP Version Not Supported error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorHttpVersionNotSupported($message = 'HTTP Version Not Supported')
    {
        return $this->respondWithError($message, 505);
    }

    /**
     * Respond with a 506 Variant Also Negotiates error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorVariantAlsoNegotiates($message = 'Variant Also Negotiates')
    {
        return $this->respondWithError($message, 506);
    }

    /**
     * Respond with a 507 Insufficient Storage error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorInsufficientStorage($message = 'Insufficient Storage')
    {
        return $this->respondWithError($message, 507);
    }

    /**
     * Respond with a 508 Loop Detected error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorLoopDetected($message = 'Loop Detected')
    {
        return $this->respondWithError($message, 508);
    }

    /**
     * Respond with a 510 Not Extended error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorNotExtended($message = 'Not Extended')
    {
        return $this->respondWithError($message, 510);
    }

    /**
     * Respond with a 511 Network Authentication Required error.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorNetworkAuthenticationRequired($message = 'Network Authentication Required')
    {
        return $this->respondWithError($message, 511);
    }

    /**
     * Responds with a generic 400 Bad Request status code.
     *
     * @param $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithError($message, $statusCode = 400)
    {
        return response()->json([
            'errors' => [
                'message' => $message,
            ],
        ], $statusCode);
    }

    /**********************************************
     * Shorthand Errors
     **********************************************/
    /**
     * Respond with an array of validation errors using a conventional 422 Unprocessable Entity status.
     *
     * @param array $errors
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorValidation(array $errors)
    {
        return $this->errorArray($errors, 422);
    }

    /**
     * Respond with an array of errors.
     *
     * @param array $errors
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorArray(array $errors, $statusCode = 400)
    {
        return response()->json([
            'errors' => $errors,
        ], $statusCode);
    }
}