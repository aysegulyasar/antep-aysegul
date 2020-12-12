<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        //$products=Product::all();

        $products=Product::with(['user'])->get();
        return view('product.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('product.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product ->name = $request->name;
        $product ->price= $request->price;
        $product->created_by=$request->created_by;
        $product ->save();
        return back();

/*
        $name = $request->get('name');
        $price =$request->get('price');
        $created_by =User::find(6);

       Product::create([
            'name'=>$name,
            'price'=>$price,
            'created_by'=>$created_by->id
        ]);


        return back();*/

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function export(): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        return Excel::download(new ProductExport, 'products.xlsx');
    }
}
