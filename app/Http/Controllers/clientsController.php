<?php

namespace App\Http\Controllers;

use App\DataTables\clientsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateclientsRequest;
use App\Http\Requests\UpdateclientsRequest;
use App\Repositories\clientsRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class clientsController extends AppBaseController
{
    /** @var  clientsRepository */
    private $clientsRepository;

    public function __construct(clientsRepository $clientsRepo)
    {
        $this->middleware('auth');
        $this->clientsRepository = $clientsRepo;
    }

    /**
     * Display a listing of the clients.
     *
     * @param clientsDataTable $clientsDataTable
     * @return Response
     */
    public function index(clientsDataTable $clientsDataTable)
    {
        return $clientsDataTable->render('clients.index');
    }

    /**
     * Show the form for creating a new clients.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created clients in storage.
     *
     * @param CreateclientsRequest $request
     *
     * @return Response
     */
    public function store(CreateclientsRequest $request)
    {
        $input = $request->all();

        $imageName = time().'.'.$request->logo->getClientOriginalExtension();

        $request->logo->move(public_path('uploads'), $imageName);

        $input['logo'] = '/uploads/'.$imageName;

        $clients = $this->clientsRepository->create($input);

        Flash::success('Clients saved successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Display the specified clients.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clients = $this->clientsRepository->findWithoutFail($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        return view('clients.show')->with('clients', $clients);
    }

    /**
     * Show the form for editing the specified clients.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clients = $this->clientsRepository->findWithoutFail($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        return view('clients.edit')->with('clients', $clients);
    }

    /**
     * Update the specified clients in storage.
     *
     * @param  int              $id
     * @param UpdateclientsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclientsRequest $request)
    {
        $clients = $this->clientsRepository->findWithoutFail($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        $imageName = time().'.'.$request->logo->getClientOriginalExtension();

        $request->logo->move(public_path('uploads'), $imageName);

        $input = $request->all();
        $input['logo'] = '/uploads/'.$imageName;

        $clients = $this->clientsRepository->update($input, $id);

        Flash::success('Clients updated successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified clients from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clients = $this->clientsRepository->findWithoutFail($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        $this->clientsRepository->delete($id);

        Flash::success('Clients deleted successfully.');

        return redirect(route('clients.index'));
    }
}
