<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests\ContractorStore;
use App\Repositories\Interfaces\ContractorRepositoryInterface;
use App\Transformers\ContractorTransformer;
use Yajra\DataTables\DataTables;

class ContractorController extends Controller {
    private $contractorRepository;

    public function __construct(ContractorRepositoryInterface $contractorRepository) {
        $this->contractorRepository = $contractorRepository;
    }

    public function index() {
        return view('contractor.index');
    }

    public function create() {
        return view('contractor.create');
    }

    public function edit($id) {
        $model = $this->contractorRepository->find($id);

        return view('contractor.edit')->with('model', $model);
    }

    public function delete($id) {
        DB::transaction(function () use (&$id) {
            $this->contractorRepository->delete($id)->with('success', __("Pomyślnie usunięto wpis."));
        });

        return redirect()->to('contractor');
    }

    public function store(ContractorStore $request) {
        DB::transaction(function () use ($request) {
            $attributes = ContractorTransformer::transform($request)->intoFillableArray($this->contractorRepository->getFillable());
            $this->contractorRepository->create($attributes)->with('success', __("Pomyślnie dodano wpis."));

        });

        return redirect()->to('contractor');
    }

    public function update(ContractorStore $request, $id) {
        DB::transaction(function () use ($request, &$id) {
            $attributes = ContractorTransformer::transform($request)->intoFillableArray($this->contractorRepository->getFillable());
            $this->contractorRepository->update($attributes, $id)->with('success', __("Pomyślnie edytowano wpis."));

        });

        return redirect()->to('contractor');
    }

    public function getAll() {
        return DataTables::of($this->contractorRepository->all())
            ->addColumn('options', function ($contractor) {
                $view = view('contractor.components.options')
                    ->with('id', $contractor->id);
                return $view;
            })
            ->make();
    }
}
