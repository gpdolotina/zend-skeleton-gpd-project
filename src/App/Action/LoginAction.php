<?php

namespace App\Action;

use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;


class LoginAction
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {

    	$user_name = 'admin';

        if($_GET['USER_NAME'] == $user_name)
        {
            $data = [
            'success' => true,
            'message' => 'Successfully Logged In',
            'user_name' => $_GET['USER_NAME']
            ];
        }
        else
        {
            $data = [
                'success' => false,
                'message' => 'Invalid Username'
            ];
        }

        return new JsonResponse($data);

    }
}
