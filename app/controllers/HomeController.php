<?php

class HomeController extends BaseController {

    public function __construct(){
    	// echo 'sssss';
        // $this->beforeFilter('auth');
    }
    public function index(){

    	if (Session::has('username')) {
	    	echo 'session success and session is '.Session::get('username');
    	}else{
    		echo 'session faild';
    	}
    }

	// public function index()
	// {
 //            $id = intval(Auth::user()->id);

 //            $user = User::find($id)->myconcern()->lists('user_id_to');

 //            array_push($user,$id);

 //            $weibosobj = Weibo::whereIn('user_id',$user)->orderBy('subtime','desc')->paginate(2);
 //            $weibosarr = array();
 //            $i = 0;
    
 //            foreach($weibosobj as $value){
 //                $weibosarr[$i]['id'] = $value->id;
 //                $weibosarr[$i]['user_id'] = $value->user_id;
 //                $weibosarr[$i]['content'] = $value->content;
 //                $weibosarr[$i]['subtime'] = $value->subtime;
 //                //根据微博表中的用户id去检索用户名和头像
 //                $uid = $value->user_id;
 //                $users = User::find($uid);
 //                $weibosarr[$i]['alias'] = $users['alias'];
 //                $weibosarr[$i]['photo'] = $users['photo'];
 //                //根据微博的id去获取所有的评论
 //                $comments = DB::table('comments')
 //                    ->join('users','comments.user_id','=','users.id')
 //                    ->select('users.id','users.alias','comments.content','comments.subtime')
 //                    ->where('weibo_id',$value->id)
 //                    ->orderBy('comments.subtime','desc')
 //                    ->get();
 //                $weibosarr[$i]['comment']='';
 //                $j=0;
 //                foreach($comments as $comment){
 //                    $str1 = '<div class="name">';
 //                    $useralias = $comment->alias;
 //                    $str2 = '</div><div class="time"><span class="green">';
 //                    $subtime = $comment->subtime;
 //                    $str3 = '</span></div><div class="text">';
 //                    $commcon = $comment->content;
 //                    $str4 = '</div><div class="span12 hr hr8"></div>';
 //                    $weibosarr[$i]['comment'] .=$str1.$useralias.$str2.$subtime.$str3.$commcon.$str4;
 //                    $j++;
 //                }
 //                $weibosarr[$i]['commentcount'] = $j;
 //                $i++;
 //            }
 //            //dd($weibosarr);
 //            return View::make('layout.home',['weibos'=>$weibosarr,'weibopage'=>$weibosobj]);
	// }

 //    public function show($id){

 //        $user = User::find($id);
 //        $weibo = User::find($id)->weibo()->orderBy('subtime','desc')->get();

 //        $data = array('weibos'=>$weibo);
 //        return View::make('layout.home',$data);
 //    }

 //    public function store(){
 //        $content = nl2br(Input::get('w_content'));
 //        $u_id = Auth::user()->id;
 //        $weibo = new Weibo;

 //        $weibo->user_id = $u_id;
 //        $weibo->content = $content;
 //        $weibo->subtime = date('Y-m-d H:i:s');
 //        $weibo->save();
 //        return Redirect::to('home');
 //    }
}
