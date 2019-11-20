<?php

namespace App\Http\Controllers;

use App\Project;
use App\Repositories\Interfaces\ProjectRepositoryInterface;
use App\Transformers\ProjectTransformer;
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

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse {
        /** @var Project */
        $project = null;

        DB::transaction(function () use ($request, &$project) {
            $attributes = ProjectTransformer::transform($request)->intoFillableArray($this->projectRepository->getFillable());
            $project = $this->projectRepository->create($attributes);

        });
        $result = (($project instanceof Project));

        return response()->json($result);
    }

    public function getAll(){
        return DataTables::of($this->projectRepository::all())->make();
    }
}
