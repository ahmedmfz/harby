<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    use HasFactory;


    /**
     * Get all of the page's comments.
    */
    public function images() : MorphMany
    {
        return $this->morphMany(Image::class, 'imagable');
    }
    
}
