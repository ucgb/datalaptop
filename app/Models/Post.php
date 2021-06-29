<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\User;

class Post extends Model
{
    protected $fillable = ['nama', 'nip', 'alamat', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}


