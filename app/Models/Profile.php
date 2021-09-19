<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? '/storage/'  . $this->image : '/storage/profile/pbKhxMeDdFpLdv00qwHaMLxdSlbjgi0fOv5Kcfse.jpg';
        return $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    use HasFactory;
}
