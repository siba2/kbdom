<?php

namespace App\Http\Controllers;

use DB;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use App\Transformers\EmployeeTransformer;
use Illuminate\Http\Request;

class HomeController extends Controller {
    private $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository) {
        $this->employeeRepository = $employeeRepository;
    }

    public function index() {
        $employee = $this->employeeRepository->first();

        return view('home')->with('employee', $employee);
    }

    public function updateEmployee(Request $request){
        DB::transaction(function () use ($request) {
            $attributes = EmployeeTransformer::transform($request)->intoFillableArray($this->employeeRepository->getFillable());
            $this->employeeRepository->update($attributes, 1);

        });
    }
}
