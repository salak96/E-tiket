<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class events extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public function categories():HasMany
    {
    return $this->hasMany(categories::class);
    }
    

}