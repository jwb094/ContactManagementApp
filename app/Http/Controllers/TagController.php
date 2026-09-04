<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTagRequest;
use App\Http\Requests\UpdateTagRequest;
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
    public function store(CreateTagRequest $request)
    {
        $newTag = $this->tagService->createTag($request->validated());

        if (!$newTag->id) {
            return  redirect(route('admin.tags.new'))
                ->with('status', false)->with('message', "New Tag didn't save, try again please");;
        }
        return  redirect(route('admin.tags.index'))
                    ->with('status', true)
                    ->with('message', "New Tag added ");
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
    public function update(UpdateTagRequest $request, Tag $tag)
    {
         $this->tagService->UpdateTag($request->validated(),$tag->id);

        return redirect()->
                    route('admin.tags.index')
                    ->with('success', "Tag was updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
            $tag->delete();
            return redirect()->route('admin.tags.index')->with('Status',"Tag Record was delete");
    }
}
