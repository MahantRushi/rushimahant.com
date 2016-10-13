<?php

namespace App\Http\Controllers;

use App\DataTables\servicesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateservicesRequest;
use App\Http\Requests\UpdateservicesRequest;
use App\Repositories\servicesRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class servicesController extends AppBaseController
{
    /** @var  servicesRepository */
    private $servicesRepository;

    public function __construct(servicesRepository $servicesRepo)
    {
        $this->middleware('auth');
        $this->servicesRepository = $servicesRepo;
    }

    /**
     * Display a listing of the services.
     *
     * @param servicesDataTable $servicesDataTable
     * @return Response
     */
    public function index(servicesDataTable $servicesDataTable)
    {
        return $servicesDataTable->render('services.index');
    }

    /**
     * Show the form for creating a new services.
     *
     * @return Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created services in storage.
     *
     * @param CreateservicesRequest $request
     *
     * @return Response
     */
    public function store(CreateservicesRequest $request)
    {
        $input = $request->all();

        $imageName = time().'.'.$request->logo->getClientOriginalExtension();

        $request->logo->move(public_path('uploads'), $imageName);

        $input['logo'] = '/uploads/'.$imageName;

        $services = $this->servicesRepository->create($input);

        Flash::success('Services saved successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Display the specified services.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        return view('services.show')->with('services', $services);
    }

    /**
     * Show the form for editing the specified services.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        return view('services.edit')->with('services', $services);
    }

    /**
     * Update the specified services in storage.
     *
     * @param  int              $id
     * @param UpdateservicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateservicesRequest $request)
    {
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        $imageName = time().'.'.$request->logo->getClientOriginalExtension();

        $request->logo->move(public_path('uploads'), $imageName);

        $input = $request->all();
        $input['logo'] = '/uploads/'.$imageName;


        $services = $this->servicesRepository->update($input, $id);

        Flash::success('Services updated successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified services from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        $this->servicesRepository->delete($id);

        Flash::success('Services deleted successfully.');

        return redirect(route('services.index'));
    }
}
