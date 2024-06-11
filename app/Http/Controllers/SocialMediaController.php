<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialMediaStoreRequest;
use App\Http\Requests\SocialMediaUpdateRequest;
use App\Http\Resources\SocialMediaResource;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialMedia = SocialMedia::all();
        return SocialMediaResource::collection($socialMedia);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SocialMediaStoreRequest $request)
    {
        $socialMedia = SocialMedia::create($request->validated());
        return new SocialMediaResource($socialMedia);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $socialMedia = SocialMedia::find($id);
        return new SocialMediaResource($socialMedia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SocialMediaUpdateRequest $request, string $id)
    {
        $socialMedia = SocialMedia::find($id);
        $socialMedia->update($request->validated());
        return new SocialMediaResource($socialMedia);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $socialMedia = SocialMedia::find($id);
        $socialMedia->delete();
        return response()->json(['message' => 'SocialMedia deleted successfully'], 200);
    }
}
