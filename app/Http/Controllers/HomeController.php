<?php

namespace App\Http\Controllers;

use App\Project;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use App\Repositories\Interfaces\ProjectRepositoryInterface;
use App\Transformers\ProjectTransformer;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository) {
        $this->employeeRepository = $employeeRepository;
    }

    public function index(){
        return view('home');
    }
}
