<?php
/**
 * Created by PhpStorm.
 * User: kalvo19
 * Date: 05/09/2019
 * Time: 20:18
 */

namespace App\Abstracts;


use Psr\Http\Server\MiddlewareInterface;

abstract class Middleware implements MiddlewareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;
}