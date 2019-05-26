<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
      $imagePath = ($this->image) ? $this->image : '/profile/d4Qr1uaS5aQEBYYtiyQCe4eEVJ8LqoACuq5PsDkZ.png';
      return '/storage/' . $imagePath;
    }

    public function followers()
    {
      return $this->belongsToMany(User::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
