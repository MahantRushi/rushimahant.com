<?php

namespace App\Http\Controllers;

use App\DataTables\socialsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatesocialsRequest;
use App\Http\Requests\UpdatesocialsRequest;
use App\Repositories\socialsRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class socialsController extends AppBaseController
{
    /** @var  socialsRepository */
    private $socialsRepository;

    public function __construct(socialsRepository $socialsRepo)
    {
        $this->socialsRepository = $socialsRepo;
    }

    /**
     * Display a listing of the socials.
     *
     * @param socialsDataTable $socialsDataTable
     * @return Response
     */
    public function index(socialsDataTable $socialsDataTable)
    {
        return $socialsDataTable->render('socials.index');
    }

    /**
     * Show the form for creating a new socials.
     *
     * @return Response
     */
    public function create()
    {
        return view('socials.create');
    }

    /**
     * Store a newly created socials in storage.
     *
     * @param CreatesocialsRequest $request
     *
     * @return Response
     */
    public function store(CreatesocialsRequest $request)
    {
        $input = $request->all();

        $socials = $this->socialsRepository->create($input);

        Flash::success('Socials saved successfully.');

        return redirect(route('socials.index'));
    }

    /**
     * Display the specified socials.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $socials = $this->socialsRepository->findWithoutFail($id);

        if (empty($socials)) {
            Flash::error('Socials not found');

            return redirect(route('socials.index'));
        }

        return view('socials.show')->with('socials', $socials);
    }

    /**
     * Show the form for editing the specified socials.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $socials = $this->socialsRepository->findWithoutFail($id);

        if (empty($socials)) {
            Flash::error('Socials not found');

            return redirect(route('socials.index'));
        }

        return view('socials.edit')->with('socials', $socials);
    }

    /**
     * Update the specified socials in storage.
     *
     * @param  int              $id
     * @param UpdatesocialsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesocialsRequest $request)
    {
        $socials = $this->socialsRepository->findWithoutFail($id);

        if (empty($socials)) {
            Flash::error('Socials not found');

            return redirect(route('socials.index'));
        }

        $socials = $this->socialsRepository->update($request->all(), $id);

        Flash::success('Socials updated successfully.');

        return redirect(route('socials.index'));
    }

    /**
     * Remove the specified socials from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $socials = $this->socialsRepository->findWithoutFail($id);

        if (empty($socials)) {
            Flash::error('Socials not found');

            return redirect(route('socials.index'));
        }

        $this->socialsRepository->delete($id);

        Flash::success('Socials deleted successfully.');

        return redirect(route('socials.index'));
    }
}
