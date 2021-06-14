<?php


namespace App\src\Application\Shared;


class BasicResponse
{
    private $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * @return array|mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array|mixed $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }
}
