<?php

namespace App\Http\Controllers;
use App\Http\Requests\ExportContactsRequest;
use App\Services\CSVService;

class CSVController extends Controller
{

     protected CSVService $CSVService;

     public function __construct(CSVService $CSVService){

      $this->CSVService = $CSVService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('csv.index');
    }

    /**
     * Display a CSV export PAge of the resource.
     */
    public function contact_export()
    {   
        $fields = $this->CSVService->ExportDatafields();
        return view('csv.export',['attributes' => $fields]);
    }



    /**
     * Import data from CSV file into database
     */
    public function csv_import() {


    }

    /**
     * Export data from CSV file into database
     */
    public function csv_export(ExportContactsRequest $request) {

        $formValidatedColums = $request->validated('fields');
        $formValidatedFileName = $request->validated('file_name');

        return $this->CSVService->export($formValidatedColums,$formValidatedFileName);
    }
}
