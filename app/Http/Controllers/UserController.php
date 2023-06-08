<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
//-----------------------------------------------------------------------------------///////000***
// public function __construct()
// {                                      تسجيل الدخول لتصفح الموقع *****************************
//     $this->middleware('auth'); 
// }
//------------------------------------------------------------------------------------///////000***
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
      return "hello resourse ";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "hello resourse create ";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "hello resourse store ";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
