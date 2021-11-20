<?php

namespace App\Http\Controllers;

use App\Models\catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogue = catalogue::paginate(10);

        return view('catalogue', compact('catalogue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogue_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:40|unique:catalogues,name',
        //     'state' => 'required|string|max:2'
        // ]);

        $catalogue = new catalogue;
        $catalogue->name = $request->get('name');
        $catalogue->state = $request->get('state');
        $catalogue->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogue = catalogue::find($id);

        return view('catalogue_edit', compact('catalogue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:40|unique:catalogues,name',
        //     'state' => 'required|string|max:2'
        // ]);

        $catalogue = catalogue::find($id);
        $catalogue->name = $request->get('name');
        $catalogue->state = $request->get('state');
        $catalogue->update();


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalogue = catalogue::find($id);
        $catalogue->delete();
    }

}
