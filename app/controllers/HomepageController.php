<?php
/**
 * Created by PhpStorm.
 * User: kalvo19
 * Date: 05/09/2019
 * Time: 20:11
 */

namespace App\Controllers;

use App\Abstracts\Controller;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

class HomepageController extends Controller
{
    public function index(ServerRequest $request, Response $response, array $args) {
        return $this->container->get('view')->render($response, 'Homepage.twig', $args);
    }
}