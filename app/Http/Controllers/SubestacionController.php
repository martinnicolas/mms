<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSubestacionRequest;
use App\Http\Requests\UpdateSubestacionRequest;
use App\Repositories\SubestacionRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SubestacionController extends AppBaseController
{
    /** @var  SubestacionRepository */
    private $subestacionRepository;

    public function __construct(SubestacionRepository $subestacionRepo)
    {
        $this->subestacionRepository = $subestacionRepo;
    }

    /**
     * Display a listing of the Subestacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->subestacionRepository->pushCriteria(new RequestCriteria($request));
        $subestacions = $this->subestacionRepository->all();

        return view('subestacions.index')
            ->with('subestacions', $subestacions);
    }

    /**
     * Show the form for creating a new Subestacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('subestacions.create');
    }

    /**
     * Store a newly created Subestacion in storage.
     *
     * @param CreateSubestacionRequest $request
     *
     * @return Response
     */
    public function store(CreateSubestacionRequest $request)
    {
        $input = $request->all();

        $subestacion = $this->subestacionRepository->create($input);

        Flash::success('Subestacion saved successfully.');

        return redirect(route('subestacions.index'));
    }

    /**
     * Display the specified Subestacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subestacion = $this->subestacionRepository->findWithoutFail($id);

        if (empty($subestacion)) {
            Flash::error('Subestacion not found');

            return redirect(route('subestacions.index'));
        }

        return view('subestacions.show')->with('subestacion', $subestacion);
    }

    /**
     * Show the form for editing the specified Subestacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subestacion = $this->subestacionRepository->findWithoutFail($id);

        if (empty($subestacion)) {
            Flash::error('Subestacion not found');

            return redirect(route('subestacions.index'));
        }

        return view('subestacions.edit')->with('subestacion', $subestacion);
    }

    /**
     * Update the specified Subestacion in storage.
     *
     * @param  int              $id
     * @param UpdateSubestacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubestacionRequest $request)
    {
        $subestacion = $this->subestacionRepository->findWithoutFail($id);

        if (empty($subestacion)) {
            Flash::error('Subestacion not found');

            return redirect(route('subestacions.index'));
        }

        $subestacion = $this->subestacionRepository->update($request->all(), $id);

        Flash::success('Subestacion updated successfully.');

        return redirect(route('subestacions.index'));
    }

    /**
     * Remove the specified Subestacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subestacion = $this->subestacionRepository->findWithoutFail($id);

        if (empty($subestacion)) {
            Flash::error('Subestacion not found');

            return redirect(route('subestacions.index'));
        }

        $this->subestacionRepository->delete($id);

        Flash::success('Subestacion deleted successfully.');

        return redirect(route('subestacions.index'));
    }
}
