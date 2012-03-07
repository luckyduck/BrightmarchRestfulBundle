<?php namespace Brightmarch\RestfulBundle\Exceptions;

class HttpUnauthorizedException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 401);
    }

}
