<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class listing extends Model
{
    use HasFactory,FilterQueryString;
    
    protected $fillable = [
        'title',
        'user_id',
        'description',
        'price',
        'category_id',
        'region_id',
        'status',
    ];

    protected $filters = ['user_id','region_id','category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
