<?php

namespace App\Http\Controllers;

use App\Models\Aqua;
use Illuminate\Http\Request;

/**
 * Class AquaController
 * @package App\Http\Controllers
 */
class AquaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aquas = Aqua::paginate();

        return view('aqua.index', compact('aquas'))
            ->with('i', (request()->input('page', 1) - 1) * $aquas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aqua = new Aqua();
        return view('aqua.create', compact('aqua'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Aqua::$rules);

        $aqua = Aqua::create($request->all());

        return redirect()->route('aquas.index')
            ->with('success', 'Aqua created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aqua = Aqua::find($id);

        return view('aqua.show', compact('aqua'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aqua = Aqua::find($id);

        return view('aqua.edit', compact('aqua'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Aqua $aqua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aqua $aqua)
    {
        request()->validate(Aqua::$rules);

        $aqua->update($request->all());

        return redirect()->route('aquas.index')
            ->with('success', 'Aqua updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aqua = Aqua::find($id)->delete();

        return redirect()->route('aquas.index')
            ->with('success', 'Aqua deleted successfully');
    }
}
