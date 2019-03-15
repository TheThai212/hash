<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HashTable;
use App\Imports\HashImport;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\Datatables\Datatables;

class HashTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getIndex()
    {
        return view('hashtable');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(HashTable::query())->make(true);
    }
    public function importData(Request $request)
    {
//        dd( $request->file('hash_file_data'));
        Excel::import(new HashImport, request()->file('hash_file_data'));

        return response()->json([
            '200' => 'ok',
        ]);
    }
    public function index()
    {
        $data = HashTable::all();
        return view('hashtable',compact('data'));
    }
    public function import()
    {
        $data = HashTable::all();
        return view('import',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
