<?php

namespace App\Services;
use App\Models\Contact;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Schema;

class CSVService
{

    public function ExportDatafields()
    {
        return Schema::getColumnListing('contacts');
    }




    public function export(array $fields, string $fileName)
    {

        $downloadFileName = $fileName . ".csv";

        $contacts = Contact::select($fields)->get();

        $csvHeaders = array_map(
            fn($field) => ucwords(str_replace('_', ' ', $field)),
            $fields
        );


        return response()->streamDownload(function () use (
            $contacts,
            $fields,
            $csvHeaders
        ) {
            $handle = fopen('php://output', 'w');

            // CSV header
            fputcsv($handle, $csvHeaders);

            // CSV rows
            foreach ($contacts as $contact) {
                $row = [];

                foreach ($fields as $field) {
                    $row[] = $contact->{$field};
                }

                fputcsv($handle, $row);
            }

            fclose($handle);
        }, $downloadFileName);
    }

    public function ImportData(UploadedFile $importFile)
    {

        $databaseQueryCount = 0;
        
        //Get the Headers(first row) from the CSV/XLS/XLSX
        $csvFile = fopen($importFile->getRealPath(), 'r');
        
        $headers = fgetcsv($csvFile);

        
        while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE){    
                $data = array_combine($headers, $getData);
            
                Contact::create($data);

                $databaseQueryCount++;
        }
        fclose($csvFile);

        return   $databaseQueryCount;
    }



}
