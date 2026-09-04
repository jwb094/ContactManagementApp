<?php

namespace App\Services;
use App\Models\Tag;
use Illuminate\Support\Str;
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


    public function createTag(array $data): Tag{
        
        $tagData =["name" => $data['name'],
                "slug" => Str::slug($data['name'])];

        $newTag = Tag::create($tagData);
 
        return $newTag;
    }


    public function UpdateTag(array $updatedTagData ,int $updatedTagDataId){
        $tag = Tag::findOrFail($updatedTagDataId);

        $updateTagData =["name" => $updatedTagData['name'],
                "slug" => Str::slug($updatedTagData['name'])];

        $tag->update($updateTagData);
        
        return $tag->refresh();
    }
}