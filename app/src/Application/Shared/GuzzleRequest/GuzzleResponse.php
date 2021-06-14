<?php

namespace App\src\Application\Shared\GuzzleRequest;

use App\src\Application\Shared\BasicResponse;

class GuzzleResponse extends BasicResponse
{
    private $status;

    public function __construct($status, $data = [])
    {
        $this->status = $status;
        parent::__construct($data);
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }
}
