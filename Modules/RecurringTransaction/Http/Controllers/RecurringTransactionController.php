<?php

namespace Modules\RecurringTransaction\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecurringTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recurringtransaction::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recurringtransaction::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('recurringtransaction::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('recurringtransaction::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
