<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

      /**

    * Get the user that authored the room.

    */

    public function author()

    {
 
        return $this->belongsTo(User::class,'author_id');
 
    }
    
    function RoomViews() {
 
     return view('welcome',array(
 
       'rooms' => $rooms
 
   ));
   }

}
