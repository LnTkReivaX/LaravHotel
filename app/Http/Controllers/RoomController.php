<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
  /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	/**public function IdShow($id) en attendant de trouver la suite
	{
		$room - \App\Models\Room::find(1); // trouver la room avec l'id n°1

        $rooms - \App\Models\Room::find(1)->rooms; //get from user id 1
        foreach ($rooms as $room)
        {
            //loop on rooms
        }
	}*/

	public function show($room_name) {

		$room = \App\Models\Room::where('room_name',$room_name)->first(); //get first room with room_nam == $room_name
	 
		return view('rooms/single',array( //Pass the room to the view
	 
			'room' => $room
	 
		));
	 
	 }
	

}
