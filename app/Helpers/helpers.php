<?php
    
    //change locale language in app function
    if(!function_exists('friend'))
    {
        //$id => language id we want change it
        function friend($id)
        {
            $friend=\App\Models\Friend::where('send_user_id',$id)
                ->where('reserve_user_id',\Illuminate\Support\Facades\Auth::id())->orwhere('reserve_user_id',$id)
                ->where('send_user_id',\Illuminate\Support\Facades\Auth::id())->first();
            if(!$friend)
            {
                echo '<a href="'.route('friend.send',$id).'" class="small-box-footer">send requset <i class="fas fa-arrow-circle-right"></i></a>';
            }elseif($friend->status==0)
            {
                if($friend->send_user_id==\Illuminate\Support\Facades\Auth::id())
                {
                    echo '<a href="'.route('friend.cansel',$id).'" class="small-box-footer">cansel requset <i class="fas fa-arrow-circle-right"></i></a>';
                }elseif($friend->reserve_user_id==\Illuminate\Support\Facades\Auth::id())
                {
                    echo '<a href="'.route('friend.accept',$id).'" class="small-box-footer">accept requset <i class="fas fa-arrow-circle-right"></i></a>';
                }
            }elseif($friend->status==1)
            {
                echo '<a href="'.route('friend.remove',$id).'" class="small-box-footer">remove friend <i class="fas fa-arrow-circle-right"></i></a>';
            }
        }
    }