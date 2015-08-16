<?php

class AuthController extends BaseController {

	public function index()
	{
		//
        return View::make('login');
	}


	public function store()
	{
		//用户登录验证
		// // }if($request){
		// 	echo 'sss';
		// 	print_r($request);
		// }else{
		// 	echo '111';
		// $header = Request::header();
		// if($header){
		// 	Log::info('request success!!!');
		// 	echo  '111';
		// }else{
		// 	Log::info('2222222222222222222222222222222222222');
		// 	echo 'faild';
		// }
        $username = Input::get('username');
        $password = Input::get('password');
        $c = DB::table('users')->where('user_name','=',$username)->get();
        Log::info('qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq');
        // echo App::fatal();
        // $a = Auth::attempt(array('user_name'=>$username,'password'=>$password));
        if(!is_null($c[0]) && $c[0]->user_name == $password){
        	Session::put('username', $username);
            // return Redirect::to('home');
            echo 'status:200,data:success';	
        }else{
        	// $c[0]->user_name;
        	// print_r($c);
        	echo 'sssss';
            // return http_redirect()ct::back()->withInput()->with('failure','用户名密qqqqqqq码错误');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

}
