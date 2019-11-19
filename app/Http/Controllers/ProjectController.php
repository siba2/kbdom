<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ProjectRepositoryInterface;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProjectController extends Controller
{
    private $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository) {
        $this->projectRepository = $projectRepository;
    }

    public function index(){
        return view('project.index');
    }

    public function getAll(){
        return DataTables::of($this->projectRepository::all())->make();
    }
}
