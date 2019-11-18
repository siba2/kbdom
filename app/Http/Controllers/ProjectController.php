<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProjectController extends Controller
{
    public function index(){
        return view('project.index');
    }

    public function getAll(){
        return DataTables::of(User::all())->make();
    }
}
