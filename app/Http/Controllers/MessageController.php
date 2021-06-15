<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Message;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    
    class MessageController extends Controller
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
        public function write($id)
        {
            $user= User::find($id);
            return view('admin.message.write',compact('user'));
        }
        
        public function send(Request $request,$id)
        {
            $message= new Message();
            $message->create(['send_user_id'=>Auth::id(),'reserve_user_id'=>$id,'message'=>$request->message]);
            return redirect(route('admin'))->with('message','send Done');
        }
    }
