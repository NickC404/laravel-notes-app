<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Folder::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $folder = Folder::create([
            'title' => 'Test Folder Title'
        ]);
        $folder->save();
        return response()->json($folder);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $folder = Folder::findOrFail($id);

        return response()->json($folder);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $folder = Folder::findOrFail($id);

        $folder->update($request->all());
        $folder->save();
        return response()->json($folder);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $folder = Folder::findOrFail($id);

        $folder->delete();

        return response()->json($folder);
    }
}
