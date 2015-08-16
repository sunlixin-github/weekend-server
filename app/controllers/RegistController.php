<?php

class RegistController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return View::make('login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $userinfo = Input::all();
        $username = $userinfo['email'];
        $password = $userinfo['password1'];
        $alias = $userinfo['alias'];

        //查询表中是否有重复的email注册地址，如果有则不允许注册，否则新增记录
        $find = User::where('username',$username)->first();
        if(is_null($find)){
            $user = new User;
            $user->username = $username;
            $user->password = Hash::make($password);
            $user->alias = $alias;
            $user->brief = '';
            $user->photo = 'default.png';
            $user->save();
            //return $username.$password.$alias;
            return Redirect::to('login');
        }else{
            return 'ERROR,The Name Has Been Used!';
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
