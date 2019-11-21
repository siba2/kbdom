<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use App\Transformers\EmployeeTransformer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository) {
        $this->employeeRepository = $employeeRepository;
    }

    public function index(){
        return view('employee.index');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse {
        $project = null;

        DB::transaction(function () use ($request, &$project) {
            $attributes = EmployeeTransformer::transform($request)->intoFillableArray($this->employeeRepository->getFillable());
            $project = $this->employeeRepository->create($attributes);

        });
        $result = (($project instanceof Employee));

        return response()->json($result);
    }

    public function getAll(){
        return DataTables::of($this->employeeRepository->all())->make();
    }
}
