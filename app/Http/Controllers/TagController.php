<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TagService;
use App\Models\Tag;
class TagController extends Controller
{   

     protected TagService $tagService;
     public function __construct(TagService $tagService){

      $this->tagService = $tagService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $data = $this->tagService->Index($request);
        return view('tags.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('tags.add');
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
     * Show the form for editing a Tag record resource.
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit',[
            "tag" => $tag
        ]);
    }

    /**
     * Update the specified Tag record in storage.
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
}
