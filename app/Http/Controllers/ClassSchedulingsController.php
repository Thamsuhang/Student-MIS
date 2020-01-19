<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassSchedulingsRequest;
use App\Http\Requests\UpdateClassSchedulingsRequest;
use App\Repositories\ClassSchedulingsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ClassSchedulingsController extends AppBaseController
{
    /** @var  ClassSchedulingsRepository */
    private $classSchedulingsRepository;

    public function __construct(ClassSchedulingsRepository $classSchedulingsRepo)
    {
        $this->classSchedulingsRepository = $classSchedulingsRepo;
    }

    /**
     * Display a listing of the ClassSchedulings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classSchedulings = $this->classSchedulingsRepository->all();

        return view('class_schedulings.index')
            ->with('classSchedulings', $classSchedulings);
    }

    /**
     * Show the form for creating a new ClassSchedulings.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedulings.create');
    }

    /**
     * Store a newly created ClassSchedulings in storage.
     *
     * @param CreateClassSchedulingsRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSchedulingsRequest $request)
    {
        $input = $request->all();

        $classSchedulings = $this->classSchedulingsRepository->create($input);

        Flash::success('Class Schedulings saved successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Display the specified ClassSchedulings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classSchedulings = $this->classSchedulingsRepository->find($id);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.show')->with('classSchedulings', $classSchedulings);
    }

    /**
     * Show the form for editing the specified ClassSchedulings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classSchedulings = $this->classSchedulingsRepository->find($id);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.edit')->with('classSchedulings', $classSchedulings);
    }

    /**
     * Update the specified ClassSchedulings in storage.
     *
     * @param int $id
     * @param UpdateClassSchedulingsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassSchedulingsRequest $request)
    {
        $classSchedulings = $this->classSchedulingsRepository->find($id);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');

            return redirect(route('classSchedulings.index'));
        }

        $classSchedulings = $this->classSchedulingsRepository->update($request->all(), $id);

        Flash::success('Class Schedulings updated successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Remove the specified ClassSchedulings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classSchedulings = $this->classSchedulingsRepository->find($id);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');

            return redirect(route('classSchedulings.index'));
        }

        $this->classSchedulingsRepository->delete($id);

        Flash::success('Class Schedulings deleted successfully.');

        return redirect(route('classSchedulings.index'));
    }
}
