@extends('main')

@section('title', ' | Chats')

@section('content')


  <h2 class="tittle"><a href="chat.php">
  <img src="../images/icon (2).png" alt="" />
    </a>CHAT ROOM</h2>
   <script src="../js/lightbox.js"></script>
   <div class="row">
     <div class="col-md-6 col-md-offset-3" style="border-bottom: 1px solid #ece1e1; padding:20px; margin-bottom: 20px;" >
       <form class="form-vertical" id="form" method="POST" action="{{route('chats.store')}}">
            {{ csrf_field() }}
         <div class="form-group">
           <textarea name="msg" id="msg"  class="form-control" placeholder="What's up?" required=""></textarea>
         </div>
         {{-- <div class="form-group" style="pulll-right">
           <input type="file" name="image_upload" value="Upload Image">
         </div> --}}
         <button type="submit" name="comment" id="send" class="btn btn-default">Post</button>
       </form>
     </div>

   </div>

   <div class="messages">
     @foreach ($chats as $chat)


     <div class="col-md-6 col-md-offset-3" style="margin-top: 20px; ">
   <div class="media">
     <a class="pull-left" href="#">
       <img class="media-object" src="../images/avatar (1).png" alt="Rex Asare" />
     </a>
     <div class="media-body" id="body">
       <h4 class="media-heading"><a href="#">{{ $chat->name }}</a></h4>
       <p>{{ $chat->msg }}</p>
       <ul class="list-inline">
         <li>{{ date('M j, Y h:ia', strtotime($chat->created_at)) }}</li>
       </ul>


     </div>
   </div>
</div>

   @endforeach
   </div>


@endsection