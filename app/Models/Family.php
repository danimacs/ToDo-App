<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function tasks()
    {
        return $this->hasMany(Task::class)->orderBy('updated_at', 'desc');
    }
}
