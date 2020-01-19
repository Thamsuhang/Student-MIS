<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdmisionsRequest;
use App\Http\Requests\UpdateAdmisionsRequest;
use App\Repositories\AdmisionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdmisionsController extends AppBaseController
{
    /** @var  AdmisionsRepository */
    private $admisionsRepository;

    public function __construct(AdmisionsRepository $admisionsRepo)
    {
        $this->admisionsRepository = $admisionsRepo;
    }

    /**
     * Display a listing of the Admisions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $admisions = $this->admisionsRepository->all();

        return view('admisions.index')
            ->with('admisions', $admisions);
    }

    /**
     * Show the form for creating a new Admisions.
     *
     * @return Response
     */
    public function create()
    {
        return view('admisions.create');
    }

    /**
     * Store a newly created Admisions in storage.
     *
     * @param CreateAdmisionsRequest $request
     *
     * @return Response
     */
    public function store(CreateAdmisionsRequest $request)
    {
        $input = $request->all();

        $admisions = $this->admisionsRepository->create($input);

        Flash::success('Admisions saved successfully.');

        return redirect(route('admisions.index'));
    }

    /**
     * Display the specified Admisions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admisions = $this->admisionsRepository->find($id);

        if (empty($admisions)) {
            Flash::error('Admisions not found');

            return redirect(route('admisions.index'));
        }

        return view('admisions.show')->with('admisions', $admisions);
    }

    /**
     * Show the form for editing the specified Admisions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $admisions = $this->admisionsRepository->find($id);

        if (empty($admisions)) {
            Flash::error('Admisions not found');

            return redirect(route('admisions.index'));
        }

        return view('admisions.edit')->with('admisions', $admisions);
    }

    /**
     * Update the specified Admisions in storage.
     *
     * @param int $id
     * @param UpdateAdmisionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdmisionsRequest $request)
    {
        $admisions = $this->admisionsRepository->find($id);

        if (empty($admisions)) {
            Flash::error('Admisions not found');

            return redirect(route('admisions.index'));
        }

        $admisions = $this->admisionsRepository->update($request->all(), $id);

        Flash::success('Admisions updated successfully.');

        return redirect(route('admisions.index'));
    }

    /**
     * Remove the specified Admisions from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admisions = $this->admisionsRepository->find($id);

        if (empty($admisions)) {
            Flash::error('Admisions not found');

            return redirect(route('admisions.index'));
        }

        $this->admisionsRepository->delete($id);

        Flash::success('Admisions deleted successfully.');

        return redirect(route('admisions.index'));
    }
}
