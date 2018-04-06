<?php

namespace App\Http\Controllers;

use App\Message;
use App\Rom;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Rom::all();
        return view('rooms.index', compact('rooms'));
    }

    public function show($id)
    {
        $room = Rom::find($id);
        if(!$room)
        {
            throw new ModelNotFoundException("Sala não existe");
        }
        $user = Auth::user();
        $user->room_id = $room->id;
        $user->save();

        return view('rooms.show', compact('room'));
    }

    public function create(Request $request, $id)
    {
        $room = Rom::find($id);
        if(!$room)
        {
            throw new ModelNotFoundException("Sala não existe");
        }
        $message = new Message();

        $message->content = $request->get('content');
        $message->room_id =  $room->id;
        $message->user_id = Auth::user()->id;

        $message->save();

        return response()->json(['message' => $message], 201);
    }
}
