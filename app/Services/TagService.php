<?php

namespace App\Services;
// use App\Http\Request;
// use App\Http\Request;
use App\Models\Tag;

class TagService
{

    public function Index(object $inputData): array
    {


        $query =  Tag::query();

        if (!empty($inputData['name'])) {
            $query->where(
                'name',
                'LIKE',
                '%' . $inputData['name'] . '%'
            );
        }
     


        $tags = $query
            ->orderBy('name', 'ASC')
            ->latest()
            ->paginate(10)
            ->withQueryString();



        return [
            "tags" => $tags
        ];
    }


    public function createTag(){}


    public function UpdateTag(){}
}