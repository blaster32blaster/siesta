<?php

namespace Castlebranch\Siesta;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Class Controller
 * @package App\Http\Controllers
 */
abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, RespondsWithErrors, ValidatesRequests;

    /**
     * The status code of the returned response, defaulting to 200.
     *
     * @var int
     */
    protected $statusCode = 200;

    /**
     * Returns a JsonResponse indicating the resource was successfully created with the resource's data.
     *
     * @param $data
     * @return JsonResponse
     */
    protected function respondWithCreated($data)
    {
        $this->setStatusCode(201);
        return $this->respondWithArray($data);
    }

    /**
     * Returns a JsonResponse indicating the request has been accepted for processing.
     *
     * @param $data
     * @return JsonResponse
     */
    protected function respondWithAccepted($data)
    {
        $this->setStatusCode(202);
        return $this->respondWithArray($data);
    }

    /**
     * Returns a response indicating success, but without content.
     *
     * @return Response
     */
    protected function respondWithNoContent()
    {
        return response()->make('', 204);
    }

    /**
     * Returns a JsonResponse containing the specified array and headers, with the current status code.
     *
     * @param array $data
     * @param array $headers
     * @return JsonResponse
     */
    protected function respondWithArray(array $data, array $headers = [])
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }

    /**
     * Returns the current status code.
     *
     * @return int
     */
    protected function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets the current status code.
     *
     * @param $statusCode
     * @return $this
     */
    protected function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
}