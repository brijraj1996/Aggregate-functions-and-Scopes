<?php

namespace App\Models;

use App\Scopes\PostScope as ScopesPostScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\PostScope;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function vote()
    {
        return $this->hasOne(Vote::class);
    }

    
    //              Local Scope methods : 
    // public function scopePopular($query)
    // {
    //     return $query->where('id', '>=', '15');
    // }

    // public function scopeActive($query)
    // {
    //     return $query->where('description' , 'like', 'Assu%');
    // }


    //--------------------------------------------------------------

    //                  Anonymous Scope method :      
    // protected static function booted()
    //     {
    //         static::addGlobalScope('post', function (Builder $builder) {
    //             $builder->where('id', '>=', 15)
    //             ->where('description', 'like', 'Assu%');
    //         });
    //    }


    //----------------------------------------------------------------


    protected static function booted()
    {
        static::addGlobalScope(new PostScope);
    }

}
