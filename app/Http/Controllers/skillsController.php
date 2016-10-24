<?php

namespace App\Http\Controllers;

use App\DataTables\skillsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateskillsRequest;
use App\Http\Requests\UpdateskillsRequest;
use App\Repositories\skillsRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class skillsController extends AppBaseController
{
    /** @var  skillsRepository */
    private $skillsRepository;

    public function __construct(skillsRepository $skillsRepo)
    {
        $this->skillsRepository = $skillsRepo;
    }

    /**
     * Display a listing of the skills.
     *
     * @param skillsDataTable $skillsDataTable
     * @return Response
     */
    public function index(skillsDataTable $skillsDataTable)
    {
        return $skillsDataTable->render('skills.index');
    }

    /**
     * Show the form for creating a new skills.
     *
     * @return Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created skills in storage.
     *
     * @param CreateskillsRequest $request
     *
     * @return Response
     */
    public function store(CreateskillsRequest $request)
    {
        $input = $request->all();

        $skills = $this->skillsRepository->create($input);

        Flash::success('Skills saved successfully.');

        return redirect(route('skills.index'));
    }

    /**
     * Display the specified skills.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $skills = $this->skillsRepository->findWithoutFail($id);

        if (empty($skills)) {
            Flash::error('Skills not found');

            return redirect(route('skills.index'));
        }

        return view('skills.show')->with('skills', $skills);
    }

    /**
     * Show the form for editing the specified skills.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $skills = $this->skillsRepository->findWithoutFail($id);

        if (empty($skills)) {
            Flash::error('Skills not found');

            return redirect(route('skills.index'));
        }

        return view('skills.edit')->with('skills', $skills);
    }

    /**
     * Update the specified skills in storage.
     *
     * @param  int              $id
     * @param UpdateskillsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateskillsRequest $request)
    {
        $skills = $this->skillsRepository->findWithoutFail($id);

        if (empty($skills)) {
            Flash::error('Skills not found');

            return redirect(route('skills.index'));
        }

        $skills = $this->skillsRepository->update($request->all(), $id);

        Flash::success('Skills updated successfully.');

        return redirect(route('skills.index'));
    }

    /**
     * Remove the specified skills from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $skills = $this->skillsRepository->findWithoutFail($id);

        if (empty($skills)) {
            Flash::error('Skills not found');

            return redirect(route('skills.index'));
        }

        $this->skillsRepository->delete($id);

        Flash::success('Skills deleted successfully.');

        return redirect(route('skills.index'));
    }
}
