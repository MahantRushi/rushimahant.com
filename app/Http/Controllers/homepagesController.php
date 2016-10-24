<?php

namespace App\Http\Controllers;

use App\DataTables\homepagesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatehomepagesRequest;
use App\Http\Requests\UpdatehomepagesRequest;
use App\Repositories\homepagesRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class homepagesController extends AppBaseController
{
    /** @var  homepagesRepository */
    private $homepagesRepository;

    public function __construct(homepagesRepository $homepagesRepo)
    {
        $this->middleware('auth');
        $this->homepagesRepository = $homepagesRepo;
    }

    /**
     * Display a listing of the homepages.
     *
     * @param homepagesDataTable $homepagesDataTable
     * @return Response
     */
    public function index(homepagesDataTable $homepagesDataTable)
    {
        return $homepagesDataTable->render('homepages.index');
    }

    /**
     * Show the form for creating a new homepages.
     *
     * @return Response
     */
    public function create()
    {
        return view('homepages.create');
    }

    /**
     * Store a newly created homepages in storage.
     *
     * @param CreatehomepagesRequest $request
     *
     * @return Response
     */
    public function store(CreatehomepagesRequest $request)
    {
        $input = $request->all();

        $imageName = time().'.'.$request->backgroundImage->getClientOriginalExtension();

        $request->backgroundImage->move(public_path('uploads'), $imageName);

        $input['backgroundImage'] = '/uploads/'.$imageName;

        $homepages = $this->homepagesRepository->create($input);

        Flash::success('Homepages saved successfully.');

        return redirect(route('homepages.index'));
    }

    /**
     * Display the specified homepages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $homepages = $this->homepagesRepository->findWithoutFail($id);

        if (empty($homepages)) {
            Flash::error('Homepages not found');

            return redirect(route('homepages.index'));
        }

        return view('homepages.show')->with('homepages', $homepages);
    }

    /**
     * Show the form for editing the specified homepages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $homepages = $this->homepagesRepository->findWithoutFail($id);

        if (empty($homepages)) {
            Flash::error('Homepages not found');

            return redirect(route('homepages.index'));
        }

        return view('homepages.edit')->with('homepages', $homepages);
    }

    /**
     * Update the specified homepages in storage.
     *
     * @param  int              $id
     * @param UpdatehomepagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehomepagesRequest $request)
    {
        $homepages = $this->homepagesRepository->findWithoutFail($id);

        if (empty($homepages)) {
            Flash::error('Homepages not found');

            return redirect(route('homepages.index'));
        }

        $input = $request->all();

        if(isset($request->backgroundImage)){
            $imageName = time().'.'.$request->backgroundImage->getClientOriginalExtension();

            $request->backgroundImage->move(public_path('uploads'), $imageName);


            $input['backgroundImage'] = '/uploads/'.$imageName;
        }


        $homepages = $this->homepagesRepository->update($input, $id);

        Flash::success('Homepages updated successfully.');

        return redirect(route('homepages.index'));
    }

    /**
     * Remove the specified homepages from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $homepages = $this->homepagesRepository->findWithoutFail($id);

        if (empty($homepages)) {
            Flash::error('Homepages not found');

            return redirect(route('homepages.index'));
        }

        $this->homepagesRepository->delete($id);

        Flash::success('Homepages deleted successfully.');

        return redirect(route('homepages.index'));
    }
}
