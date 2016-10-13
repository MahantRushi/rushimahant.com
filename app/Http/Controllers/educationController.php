<?php

namespace App\Http\Controllers;

use App\DataTables\educationDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateeducationRequest;
use App\Http\Requests\UpdateeducationRequest;
use App\Repositories\educationRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class educationController extends AppBaseController
{
    /** @var  educationRepository */
    private $educationRepository;

    public function __construct(educationRepository $educationRepo)
    {
        $this->middleware('auth');
        $this->educationRepository = $educationRepo;
    }

    /**
     * Display a listing of the education.
     *
     * @param educationDataTable $educationDataTable
     * @return Response
     */
    public function index(educationDataTable $educationDataTable)
    {
        return $educationDataTable->render('education.index');
    }

    /**
     * Show the form for creating a new education.
     *
     * @return Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created education in storage.
     *
     * @param CreateeducationRequest $request
     *
     * @return Response
     */
    public function store(CreateeducationRequest $request)
    {
        $input = $request->all();

        $education = $this->educationRepository->create($input);

        Flash::success('Education saved successfully.');

        return redirect(route('education.index'));
    }

    /**
     * Display the specified education.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $education = $this->educationRepository->findWithoutFail($id);

        if (empty($education)) {
            Flash::error('Education not found');

            return redirect(route('education.index'));
        }

        return view('education.show')->with('education', $education);
    }

    /**
     * Show the form for editing the specified education.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $education = $this->educationRepository->findWithoutFail($id);

        if (empty($education)) {
            Flash::error('Education not found');

            return redirect(route('education.index'));
        }

        return view('education.edit')->with('education', $education);
    }

    /**
     * Update the specified education in storage.
     *
     * @param  int              $id
     * @param UpdateeducationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateeducationRequest $request)
    {
        $education = $this->educationRepository->findWithoutFail($id);

        if (empty($education)) {
            Flash::error('Education not found');

            return redirect(route('education.index'));
        }

        $education = $this->educationRepository->update($request->all(), $id);

        Flash::success('Education updated successfully.');

        return redirect(route('education.index'));
    }

    /**
     * Remove the specified education from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $education = $this->educationRepository->findWithoutFail($id);

        if (empty($education)) {
            Flash::error('Education not found');

            return redirect(route('education.index'));
        }

        $this->educationRepository->delete($id);

        Flash::success('Education deleted successfully.');

        return redirect(route('education.index'));
    }
}
