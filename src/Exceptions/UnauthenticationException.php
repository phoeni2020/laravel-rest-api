<?php

namespace Phoeni2020\RestAPI\Exceptions;

class UnauthenticationException extends ApiException
{
    protected $statusCode = 401;

    protected $code = ErrorCodes::UNAUTHENTICATION_EXCEPTION;

    protected $message = "Not authenticated to perform this request";
}
