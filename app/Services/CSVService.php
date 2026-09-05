<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Support\Facades\Schema;

class CSVService{

    public function ExportDatafields(){
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

    public function ImportData(){}

}