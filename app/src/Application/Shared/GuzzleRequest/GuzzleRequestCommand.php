<?php

namespace App\src\Application\Shared\GuzzleRequest;

class GuzzleRequestCommand
{
    private $method;
    private $route;

    public function __construct($method, $route)
    {
        $this->method = $method;
        $this->route = $route;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method): void
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param mixed $route
     */
    public function setRoute($route): void
    {
        $this->route = $route;
    }
}
