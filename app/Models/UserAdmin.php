<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'is_admin',
        // Voeg andere velden toe die je wilt kunnen beheren
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
