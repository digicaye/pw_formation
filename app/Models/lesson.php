<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    use HasFactory;
    protected $fillable=['title','description','slug','author_id'];
    protected $swith=['author'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
