<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = false;
    protected $fillable =  [
        'id',
        'name'
    ];

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
