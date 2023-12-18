<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    protected $fillable = ['name'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

