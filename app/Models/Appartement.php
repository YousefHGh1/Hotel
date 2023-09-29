<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $cast = [
    //     'room_id' => 'array',
    // ];
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

}