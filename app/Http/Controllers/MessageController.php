<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index (){
        $messages = Message::all();
        return view('Backend.message.index',  compact('messages'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'subject'=> 'required',
            'message'=>'required',
        ]);
        Message::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'subject'=>$request->input('subject'),
            'message'=>$request->input('message'),
        ]);
        return redirect(route('website.index'));
    }
    public function show($id)
    {
        $message = Message::find($id);

        if ($message) {
            return response()->json($message);
        } else {
            return response()->json(['error' => 'Message not found'], 404);
        }
    }
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->back()->with('success', 'Message deleted successfully');
    }
}
