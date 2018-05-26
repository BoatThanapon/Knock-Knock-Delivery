<?php

namespace App\Http\Controllers;

use App\Repositories\IStatusRepository;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Status;

class StatusController extends Controller
{
    protected $statusRepository;

    public function __construct(IStatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    public function GetAllStatuses(Request $request)
    {
        // $statuses = Status::paginate(10);
        $statuses = $this->statusRepository->all();
        $data = [
            'status' => $statuses
        ];

        return response()->json($data, 200);
    }
}
