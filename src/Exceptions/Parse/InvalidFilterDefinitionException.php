<?php

namespace Phoeni2020\RestAPI\Exceptions\Parse;

use Phoeni2020\RestAPI\Exceptions\ApiException;
use Phoeni2020\RestAPI\Exceptions\ErrorCodes;

class InvalidFilterDefinitionException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_INVALID_FILTER_DEFINITION;

    protected $message = "Filter defined incorrectly";

}