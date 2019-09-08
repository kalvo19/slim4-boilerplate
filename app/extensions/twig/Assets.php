<?php
/**
 * Created by PhpStorm.
 * User: kalvo19
 * Date: 08/09/2019
 * Time: 13:17
 */

namespace App\Extensions\Twig;

use Psr\Container\ContainerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Assets extends AbstractExtension
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Assets constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFunctions()
    {
        return new TwigFunction('assets', [
            $this,
            'assets'
        ]);
    }

    public function assets(string $path): string
    {
        return $this->container->get('request')->getUri()->getScheme() // "http" o "https"
            . '://' . $this->container->get('request')->getUri()->getHost() // "://slim4-boilerplate" o "://[nombre de la aplicación]"
            . ':' . $this->container->get('request')->getUri()->getPort() // ":80" por defecto
            . 'public' . $path;
    }
}