<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasUuids;
    use HasTimestamps;
    protected $fillable = ['title'];
}
