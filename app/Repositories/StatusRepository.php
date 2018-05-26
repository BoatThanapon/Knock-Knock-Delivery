<?php

namespace App\Repositories;

use App\Repositories\IStatusRepository;
use App\Status;

class StatusRepository implements IStatusRepository
{
    protected $status;
    
    public function __construct(Status $status)
    {
        $this->status = $status;
    }

    public function all()
    {
        return $this->status->all();
    }
}