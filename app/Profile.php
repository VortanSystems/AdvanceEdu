<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'description',
    ];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/xmoIlhCzDR87jYFnnhEDMFLN5UEMZ7spD2KcS5pb.png';
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
