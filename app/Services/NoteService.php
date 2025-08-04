<?php

namespace App\Services;

use App\Models\Note;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class NoteService
{
    public function create(array $data): Note
    {
        $data['user_id'] = auth()->id();
        $note = Note::create($data);
        if (!$note->save()) {
            throw new UnprocessableEntityHttpException();
        }

        return $note;
    }

    public function update(array $data, Note $note): Note
    {
        $note->update($data);
        if (!$note->save()) {
            throw new UnprocessableEntityHttpException();
        }

        return $note;
    }

    public function delete(Note $note): void
    {

    }
}
