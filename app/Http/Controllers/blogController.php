<?php

namespace App\Http\Controllers;

use App\DataTables\blogDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateblogRequest;
use App\Http\Requests\UpdateblogRequest;
use App\Repositories\blogRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class blogController extends AppBaseController
{
    /** @var  blogRepository */
    private $blogRepository;

    public function __construct(blogRepository $blogRepo)
    {
        $this->middleware('auth');
        $this->blogRepository = $blogRepo;
    }

    /**
     * Display a listing of the blog.
     *
     * @param blogDataTable $blogDataTable
     * @return Response
     */
    public function index(blogDataTable $blogDataTable)
    {
        return $blogDataTable->render('blogs.index');
    }

    /**
     * Show the form for creating a new blog.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created blog in storage.
     *
     * @param CreateblogRequest $request
     *
     * @return Response
     */
    public function store(CreateblogRequest $request)
    {
        $input = $request->all();

        $imageName = time().'.'.$request->main_image->getClientOriginalExtension();

        $request->main_image->move(public_path('uploads'), $imageName);

        $input['main_image'] = '/uploads/'.$imageName;

        $blog = $this->blogRepository->create($input);

        Flash::success('Blog saved successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified blog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified blog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified blog in storage.
     *
     * @param  int              $id
     * @param UpdateblogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateblogRequest $request)
    {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $input = $request->all();
        if(isset($request->main_image)){
            $imageName = time().'.'.$request->main_image->getClientOriginalExtension();
            $request->main_image->move(public_path('uploads'), $imageName);
            $input['main_image'] = '/uploads/'.$imageName;
        }

        $blog = $this->blogRepository->update($input, $id);

        Flash::success('Blog updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified blog from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $this->blogRepository->delete($id);

        Flash::success('Blog deleted successfully.');

        return redirect(route('blogs.index'));
    }
}
