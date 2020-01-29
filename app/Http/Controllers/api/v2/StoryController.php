<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Resources\StoryResource;
use App\Http\Resources\StoryResourceCollection;
use App\story;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():StoryResourceCollection
    {
        return new StoryResourceCollection(story::paginate());
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
        $request->validate([
            'title' => 'required',
            'subject' => 'required',
            'body' => 'required',
            'publish' => 'required'
        ]);
        $story = story::create($request->all());
        return new StoryResource($story);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(story $story):StoryResource
    {
       
        return new StoryResource($story);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, story $story)
    {
        $story->update($request->all());
        return new StoryResource($story);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(story $story)
    {
        $story->delete();
        return response()->json('delete succsess');
        
    }
}
