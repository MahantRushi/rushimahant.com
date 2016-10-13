<?php

namespace App\Http\Controllers;

use App\DataTables\worksDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateworksRequest;
use App\Http\Requests\UpdateworksRequest;
use App\Repositories\worksRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class worksController extends AppBaseController
{
    /** @var  worksRepository */
    private $worksRepository;

    public function __construct(worksRepository $worksRepo)
    {
        $this->middleware('auth');
        $this->worksRepository = $worksRepo;
    }

    /**
     * Display a listing of the works.
     *
     * @param worksDataTable $worksDataTable
     * @return Response
     */
    public function index(worksDataTable $worksDataTable)
    {
        return $worksDataTable->render('works.index');
    }

    /**
     * Show the form for creating a new works.
     *
     * @return Response
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Store a newly created works in storage.
     *
     * @param CreateworksRequest $request
     *
     * @return Response
     */
    public function store(CreateworksRequest $request)
    {
        $input = $request->all();

        if($input['end']==""){
            $input['end'] = "0000-00-00";
        }

        $works = $this->worksRepository->create($input);

        Flash::success('Works saved successfully.');

        return redirect(route('works.index'));
    }

    /**
     * Display the specified works.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $works = $this->worksRepository->findWithoutFail($id);

        if (empty($works)) {
            Flash::error('Works not found');

            return redirect(route('works.index'));
        }

        return view('works.show')->with('works', $works);
    }

    /**
     * Show the form for editing the specified works.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $works = $this->worksRepository->findWithoutFail($id);

        if (empty($works)) {
            Flash::error('Works not found');

            return redirect(route('works.index'));
        }
        if(isset($works->start)){
            $works->end = \Carbon\Carbon::now();
        }
        return view('works.edit')->with('works', $works);
    }

    /**
     * Update the specified works in storage.
     *
     * @param  int              $id
     * @param UpdateworksRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateworksRequest $request)
    {
        $works = $this->worksRepository->findWithoutFail($id);

        if (empty($works)) {
            Flash::error('Works not found');

            return redirect(route('works.index'));
        }

        $input = $request->all();

        if($input['end']==""){
            $input['end'] = "0001-11-30";
        }


        $works = $this->worksRepository->update($input, $id);

        Flash::success('Works updated successfully.');

        return redirect(route('works.index'));
    }

    /**
     * Remove the specified works from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $works = $this->worksRepository->findWithoutFail($id);

        if (empty($works)) {
            Flash::error('Works not found');

            return redirect(route('works.index'));
        }

        $this->worksRepository->delete($id);

        Flash::success('Works deleted successfully.');

        return redirect(route('works.index'));
    }
}
