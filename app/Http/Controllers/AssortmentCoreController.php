<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests\AssortmentStore;
use App\Repositories\Interfaces\AssortmentRepositoryInterface;
use App\Transformers\AssortmentTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class AssortmentCoreController extends Controller {
    private $assortmentRepository;

    public function __construct(AssortmentRepositoryInterface $assortmentRepository) {
        $this->assortmentRepository = $assortmentRepository;
    }

    public function index() {
        return view('assortment.index');
    }

    public function create() {
        return view('assortment.create');
    }

    public function edit($id) {
        $model = $this->assortmentRepository->find($id);

        return view('assortment.edit')->with('model', $model);
    }

    public function delete($id) {
        DB::transaction(function () use (&$id) {
            $this->assortmentRepository->delete($id);
        });

        return redirect()->to('assortment')->with('success', __("Pomyślnie usunięto wpis."));
    }

    public function store(AssortmentStore $request) {
        DB::transaction(function () use ($request) {
            $attributes = AssortmentTransformer::transform($request)->intoFillableArray($this->assortmentRepository->getFillable());
            $this->assortmentRepository->create($attributes);

        });

        return redirect()->to('assortment')->with('success', __("Pomyślnie dodano wpis."));
    }

    public function update(AssortmentStore $request, $id) {
        DB::transaction(function () use ($request, &$id) {
            $attributes = AssortmentTransformer::transform($request)->intoFillableArray($this->assortmentRepository->getFillable());
            $this->assortmentRepository->update($attributes, $id);

        });

        return redirect()->to('assortment')->with('success', __("Pomyślnie edytowano wpis."));
    }

    public function getAll(Request $request) {
        return DataTables::of($this->assortmentRepository->all())

            ->addColumn('options', function ($assortment) {
                $view = view('assortment.components.options')
                    ->with('id', $assortment->id);
                return $view;
            })
            ->make();
    }
}
