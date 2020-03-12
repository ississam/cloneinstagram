<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath=$this->image ?  $this->image:'profile/7NMxapGYdofvw9vbtrBh3GXGbXO8wHDldUp66smv.png';
        return '/storage/' . $imagePath;
    }
    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
