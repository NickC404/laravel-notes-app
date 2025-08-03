<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Note::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
//        $request->validate([
//            'title' => 'required|string|max:255',
//            'content' => 'required|text|max:65535',
//        ]);
        $input = [
            'title' => 'Test Note Title',
            'content' => 'Test Note Content',
            'user_id' => auth()->user()->id,
        ];
        $note = Note::create($input);
        $note->save();
        return response()->json($note);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $note = Note::findOrFail($id);

        return response()->json($note);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $note = Note::findOrFail($id);

        $note->update($request->all());
        $note->save();
        return response()->json($note);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
