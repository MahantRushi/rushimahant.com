<?php

namespace App\Http\Controllers;

use App\DataTables\testimonialsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatetestimonialsRequest;
use App\Http\Requests\UpdatetestimonialsRequest;
use App\Repositories\testimonialsRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class testimonialsController extends AppBaseController
{
    /** @var  testimonialsRepository */
    private $testimonialsRepository;

    public function __construct(testimonialsRepository $testimonialsRepo)
    {
        $this->testimonialsRepository = $testimonialsRepo;
    }

    /**
     * Display a listing of the testimonials.
     *
     * @param testimonialsDataTable $testimonialsDataTable
     * @return Response
     */
    public function index(testimonialsDataTable $testimonialsDataTable)
    {
        return $testimonialsDataTable->render('testimonials.index');
    }

    /**
     * Show the form for creating a new testimonials.
     *
     * @return Response
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Store a newly created testimonials in storage.
     *
     * @param CreatetestimonialsRequest $request
     *
     * @return Response
     */
    public function store(CreatetestimonialsRequest $request)
    {
        $input = $request->all();

        $imageName = time().'.'.$request->photo->getClientOriginalExtension();

        $request->photo->move(public_path('uploads'), $imageName);

        $input['photo'] = '/uploads/'.$imageName;

        $testimonials = $this->testimonialsRepository->create($input);

        Flash::success('Testimonials saved successfully.');

        return redirect(route('testimonials.index'));
    }

    /**
     * Display the specified testimonials.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testimonials = $this->testimonialsRepository->findWithoutFail($id);

        if (empty($testimonials)) {
            Flash::error('Testimonials not found');

            return redirect(route('testimonials.index'));
        }

        return view('testimonials.show')->with('testimonials', $testimonials);
    }

    /**
     * Show the form for editing the specified testimonials.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testimonials = $this->testimonialsRepository->findWithoutFail($id);

        if (empty($testimonials)) {
            Flash::error('Testimonials not found');

            return redirect(route('testimonials.index'));
        }

        return view('testimonials.edit')->with('testimonials', $testimonials);
    }

    /**
     * Update the specified testimonials in storage.
     *
     * @param  int              $id
     * @param UpdatetestimonialsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetestimonialsRequest $request)
    {
        $testimonials = $this->testimonialsRepository->findWithoutFail($id);

        if (empty($testimonials)) {
            Flash::error('Testimonials not found');

            return redirect(route('testimonials.index'));
        }

        $imageName = time().'.'.$request->photo->getClientOriginalExtension();

        $request->photo->move(public_path('uploads'), $imageName);

        $input = $request->all();
        $input['photo'] = '/uploads/'.$imageName;

        $testimonials = $this->testimonialsRepository->update($input, $id);

        Flash::success('Testimonials updated successfully.');

        return redirect(route('testimonials.index'));
    }

    /**
     * Remove the specified testimonials from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testimonials = $this->testimonialsRepository->findWithoutFail($id);

        if (empty($testimonials)) {
            Flash::error('Testimonials not found');

            return redirect(route('testimonials.index'));
        }

        $this->testimonialsRepository->delete($id);

        Flash::success('Testimonials deleted successfully.');

        return redirect(route('testimonials.index'));
    }
}
