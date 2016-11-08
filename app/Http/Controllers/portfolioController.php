<?php

namespace App\Http\Controllers;

use App\DataTables\portfolioDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateportfolioRequest;
use App\Http\Requests\UpdateportfolioRequest;
use App\Repositories\portfolioRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class portfolioController extends AppBaseController
{
    /** @var  portfolioRepository */
    private $portfolioRepository;

    public function __construct(portfolioRepository $portfolioRepo)
    {
        $this->middleware('auth');
        $this->portfolioRepository = $portfolioRepo;
    }

    /**
     * Display a listing of the portfolio.
     *
     * @param portfolioDataTable $portfolioDataTable
     * @return Response
     */
    public function index(portfolioDataTable $portfolioDataTable)
    {
        return $portfolioDataTable->render('portfolios.index');
    }

    /**
     * Show the form for creating a new portfolio.
     *
     * @return Response
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created portfolio in storage.
     *
     * @param CreateportfolioRequest $request
     *
     * @return Response
     */
    public function store(CreateportfolioRequest $request)
    {
        $input = $request->all();

        $imageName = time().'.'.$request->main_image->getClientOriginalExtension();

        $request->main_image->move(public_path('uploads'), $imageName);

        $input['main_image'] = '/uploads/'.$imageName;

        $portfolio = $this->portfolioRepository->create($input);

        Flash::success('Portfolio saved successfully.');

        return redirect(route('portfolios.index'));
    }

    /**
     * Display the specified portfolio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $portfolio = $this->portfolioRepository->findWithoutFail($id);

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        return view('portfolios.show')->with('portfolio', $portfolio);
    }

    /**
     * Show the form for editing the specified portfolio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $portfolio = $this->portfolioRepository->findWithoutFail($id);

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        return view('portfolios.edit')->with('portfolio', $portfolio);
    }

    /**
     * Update the specified portfolio in storage.
     *
     * @param  int              $id
     * @param UpdateportfolioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateportfolioRequest $request)
    {
        $portfolio = $this->portfolioRepository->findWithoutFail($id);

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        $input = $request->all();
        if(isset($request->main_image)){
            $imageName = time().'.'.$request->main_image->getClientOriginalExtension();
            $request->main_image->move(public_path('uploads'), $imageName);
            $input['main_image'] = '/uploads/'.$imageName;
        }

        $portfolio = $this->portfolioRepository->update($input, $id);

        Flash::success('Portfolio updated successfully.');

        return redirect(route('portfolios.index'));
    }

    /**
     * Remove the specified portfolio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $portfolio = $this->portfolioRepository->findWithoutFail($id);

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        $this->portfolioRepository->delete($id);

        Flash::success('Portfolio deleted successfully.');

        return redirect(route('portfolios.index'));
    }
}
