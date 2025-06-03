<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Iluminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    protected $table = 'post';
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::Class, 'user_id');
    }
}