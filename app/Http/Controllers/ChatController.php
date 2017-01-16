<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Chat;

use App\User;

use Auth;

use Response;

use Image;


class ChatController extends Controller
{


  public function __construct(){

      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $chats = Chat::all();
      return view('chats.index')->withChats($chats);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'msg' => 'required|min:5|max:2000'
        ]);

        $chat = new Chat;
        $user_id = Auth::id();


        $user = User::find($user_id);

        $chat->msg = $request->msg;
        $chat->approved = true;
        $chat->user()->associate($user);

        //save our image
        if($request->hasFile('image_upload')){
          $image = $request->file('image_upload');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/chats/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);

          $chat->img_file = $filename;
        }

        $chat->save();


         return redirect()->route('chats.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
