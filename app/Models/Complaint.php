<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'listing_id',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
