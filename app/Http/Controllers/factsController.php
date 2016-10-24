<?php

namespace App\Http\Controllers;

use App\DataTables\factsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatefactsRequest;
use App\Http\Requests\UpdatefactsRequest;
use App\Repositories\factsRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class factsController extends AppBaseController
{
    /** @var  factsRepository */
    private $factsRepository;

    public function __construct(factsRepository $factsRepo)
    {
        $this->middleware('auth');
        $this->factsRepository = $factsRepo;
    }

    /**
     * Display a listing of the facts.
     *
     * @param factsDataTable $factsDataTable
     * @return Response
     */
    public function index(factsDataTable $factsDataTable)
    {
        return $factsDataTable->render('facts.index');
    }

    /**
     * Show the form for creating a new facts.
     *
     * @return Response
     */
    public function create()
    {
        return view('facts.create');
    }

    /**
     * Store a newly created facts in storage.
     *
     * @param CreatefactsRequest $request
     *
     * @return Response
     */
    public function store(CreatefactsRequest $request)
    {
        $input = $request->all();

        $facts = $this->factsRepository->create($input);

        Flash::success('Facts saved successfully.');

        return redirect(route('facts.index'));
    }

    /**
     * Display the specified facts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $facts = $this->factsRepository->findWithoutFail($id);

        if (empty($facts)) {
            Flash::error('Facts not found');

            return redirect(route('facts.index'));
        }

        return view('facts.show')->with('facts', $facts);
    }

    /**
     * Show the form for editing the specified facts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facts = $this->factsRepository->findWithoutFail($id);

        if (empty($facts)) {
            Flash::error('Facts not found');

            return redirect(route('facts.index'));
        }

        return view('facts.edit')->with('facts', $facts);
    }

    /**
     * Update the specified facts in storage.
     *
     * @param  int              $id
     * @param UpdatefactsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefactsRequest $request)
    {
        $facts = $this->factsRepository->findWithoutFail($id);

        if (empty($facts)) {
            Flash::error('Facts not found');

            return redirect(route('facts.index'));
        }

        $facts = $this->factsRepository->update($request->all(), $id);

        Flash::success('Facts updated successfully.');

        return redirect(route('facts.index'));
    }

    /**
     * Remove the specified facts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facts = $this->factsRepository->findWithoutFail($id);

        if (empty($facts)) {
            Flash::error('Facts not found');

            return redirect(route('facts.index'));
        }

        $this->factsRepository->delete($id);

        Flash::success('Facts deleted successfully.');

        return redirect(route('facts.index'));
    }
}
