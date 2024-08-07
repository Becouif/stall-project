<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Inertia\Inertia;
use Inertia\Response;

use App\Models\Product;

use Spatie\MediaLibrary\HasMedia;

use Illuminate\Http\Redirectresponse;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        return Inertia::render('products/Index',[
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Inertia::render('products/Show',[
            'product' => Product::find($id),
        ]);
    }


}
