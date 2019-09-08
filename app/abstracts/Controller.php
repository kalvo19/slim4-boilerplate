<?php
/**
 * Created by PhpStorm.
 * User: kalvo19
 * Date: 05/09/2019
 * Time: 20:15
 */

namespace App\Abstracts;

use Psr\Container\ContainerInterface;

abstract class Controller
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Controller constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }
}