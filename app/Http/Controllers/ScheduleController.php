<?php

namespace App\Http\Controllers;

use DB;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use App\Transformers\EmployeeTransformer;
use Illuminate\Http\Request;

class ScheduleController extends Controller {
    public function index() {
        return view('home');
    }

    public function day() {
        return view('home');
    }

    public function week() {
        return view('home');
    }
}
