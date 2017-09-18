<?php

namespace App\Action;

use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;


class HelloAction
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {

	if(!empty($request->getAttribute('name')))
	{
		return new JsonResponse(['message' => 'Hello', 'name' => $request->getAttribute('name')]);
	}
	else
	{
        	return new JsonResponse(['message' => 'Hello world this is Zend Expressive!']);
	}

    }
}
