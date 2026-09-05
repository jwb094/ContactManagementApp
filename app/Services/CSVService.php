<?php

namespace App\Services;

use Illuminate\Support\Facades\Schema;

class CSVService{

    public function ExportDatafields(){
              return Schema::getColumnListing('contacts');
    }




    public function ExportData(){
        
    }

    public function ImportData(){}

}