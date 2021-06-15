<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Friend;
    use Illuminate\Support\Facades\Auth;
    
    class FriendController extends Controller
    {
        /**
         * Create a new controller instance.
         * @return void
         */
        public function __construct()
        {
            $this->middleware('auth');
        }
        
        /**
         * Show the application dashboard.
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function send($id)
        {
            $friend= new Friend();
            $friend->create(['send_user_id'=>Auth::id(),'reserve_user_id'=>$id]);
            return redirect(route('admin'))->with('message','send Done');
        }
        
        public function accept($id)
        {
            $friend=Friend::where('send_user_id',$id)->where('reserve_user_id',Auth::id())->first();
            $friend->status=1;
            $friend->save();
            return redirect(route('admin'))->with('message','accept Done');
        }
        
        public function remove($id)
        {
            $friend=Friend::where('send_user_id',$id)
                ->where('reserve_user_id',Auth::id())->orwhere('reserve_user_id',$id)
                ->where('send_user_id',Auth::id())->first();
            $friend->delete();
            return redirect(route('admin'))->with('message','remove Done');
        }
    
        public function cansel($id)
        {
            $friend=Friend::where('send_user_id',$id)
                ->where('reserve_user_id',Auth::id())->orwhere('reserve_user_id',$id)
                ->where('send_user_id',Auth::id())->first();
            $friend->delete();
            return redirect(route('admin'))->with('message','cansel Done');
        }
    }
