<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ParticipantExport;
use App\Imports\ParticipantImport;
use Maatwebsite\Excel\Facades\Excel;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function export(){
        return Excel::download(new ParticipantExport, 'participants.xlsx');
    }

    public function import(Request $request){

        request()->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        Excel::import(new ParticipantImport, $request->file('file')->store('temp'));
        return back()->with('success'   , 'Participants importados con suceso');
    }
}
