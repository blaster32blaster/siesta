<?php

namespace Castlebranch\Siesta;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * Class Request
 * @package App\Http\Base
 */
abstract class Request extends FormRequest
{
    /**
     * A constant reflecting the HTTP PATCH method.
     *
     * @var string
     */
    const PATCH_RULES = 'PATCH';
    /**
     * A constant reflecting the HTTP POST method.
     *
     * @var string
     */
    const POST_RULES = 'POST';
    /**
     * A constant reflecting the HTTP PUT method.
     *
     * @var string
     */
    const PUT_RULES = 'PUT';
    /**
     * An array of validation rules.
     *
     * @var array
     */
    protected $rules = [];
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return array_get($this->rules, $this->method(), []);
    }
    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return JsonResponse
     */
    public function response(array $errors)
    {
        return new JsonResponse($errors, 422);
    }
    /**
     * Handle a failed validation attempt.
     *
     * @param Validator $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException($this->response([
            'errors' => $this->formatErrors($validator)
        ]));
    }
}