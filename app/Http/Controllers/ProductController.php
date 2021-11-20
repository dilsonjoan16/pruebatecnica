<?php

namespace App\Http\Controllers;

use App\Models\catalogue;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::paginate(10);

        return view('product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogue = catalogue::where("state", "AC")->get();

        return view('product_create', compact('catalogue'));
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
        //     'name' => 'required|string|max:50|unique:products,name',
        //     'stock' => 'required|integer|max:2',
        //     'image' => 'required|image|max:2056',
        //     'state' => 'required|string|max:2'
        // ]);

        $productImage = $request->all();
                if ($imagen = $request->file('image')) {
                    $file = $imagen->getClientOriginalName();
                    $imagen->move('images', $file);
                    $productImage['image'] = $file;
                }

        $product = new product;
        $product->name = $request->get('name');
        $product->stock = $request->get('stock');
        $product->image = $productImage['image'];
        $product->state = $request->get('state');
        $product->id_catalogue = $request->get('id_catalogue');
        $product->save();

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
        $product = product::find($id);

        return view('product_edit', compact('product'));
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
        //     'name' => 'required|string|max:50|unique:products,name',
        //     'stock' => 'required|integer|max:2',
        //     'image' => 'required|image|max:2056',
        //     'state' => 'required|string|max:2'
        // ]);

        $productImage = $request->all();
                if ($imagen = $request->file('image')) {
                    $file = $imagen->getClientOriginalName();
                    $imagen->move('images', $file);
                    $productImage['image'] = $file;
                }

        $product =  product::find($id);
        $product->name = $request->get('name');
        $product->stock = $request->get('stock');
        $product->image = $productImage['image'];
        $product->state = $request->get('state');
        $product->update();

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
        $product = product::find($id);
        $product->delete();
    }
}
