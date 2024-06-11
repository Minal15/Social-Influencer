<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemeStoreRequest;
use App\Http\Requests\ThemeUpdateRequest;
use App\Http\Resources\ThemeResource;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = Theme::all();
        return ThemeResource::collection($themes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ThemeStoreRequest $request)
    {
        $theme = Theme::create($request->validated());
        return new ThemeResource($theme);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $theme = Theme::find($id);
        return new ThemeResource($theme);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ThemeUpdateRequest $request, string $id)
    {
        $theme = Theme::find($id);
        $theme->update($request->validated());
        return new ThemeResource($theme);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $theme = Theme::find($id);
        $theme->delete();
        return response()->json(['message' => 'Theme deleted successfully'], 200);
   
    }
}
