<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSVController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('csv.csv');
    }

    /**
     * Display a CSV export PAge of the resource.
     */
    public function contact_export()
    {
        return view('csv.export');
    }



    /**
     * Import data from CSV file into database
     */
    public function csv_import() {}

    /**
     * Export data from CSV file into database
     */
    public function csv_export() {}
}
