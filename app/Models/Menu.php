<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded= ['id'];

    public function posts()
    {
        return $this->belongsTo(Posts::class);
    }

    public function parent()
    {
        return $this->hasOne(Menu::class, 'id', 'parent_id')->orderBy('sort_order');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id')->orderBy('sort_order');
    }

    public function tree()
    {
        return static::with(implode('.', array_fill(0, 100, 'children')))->where('parent_id', '=', '0')->orderBy('sort_order')->get();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug'=> [
                'source'=> 'title'
            ]
        ];
    }
}
