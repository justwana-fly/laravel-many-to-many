<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'project_technology');
    }

    public static function generateSlug($name)
    {
        return Str::slug($name);
    }
    public function saveWithTechnologies($data)
{
    // Salva il progetto
    $project = static::create($data);

    // Salva le tecnologie associate al progetto
    if (isset($data['technologies'])) {
        $project->technologies()->sync($data['technologies']);
    }

    return $project;
}
}
