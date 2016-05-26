<?php
namespace Api\Resources;

use Phancy\Http\Request;
use Phancy\Http\Response;
use Phancy\Interfaces\Resource;
use Phancy\Phancy;

class WelcomeResource implements Resource
{
    public function endpoints(Phancy $phancy)
    {
        $phancy->get('/', function (Request $request, Response $response) {
            $response->setData('Hello World');
        });
    }
}
