<?php

class UserController extends \BaseController {

	protected $user; 

	/**
	 * Constructor
	 *
	 * @return Response
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//show all available users
		$users = $this->user->all();
		return View::make('user.index')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$input['password'] = Hash::make($input['password']);

		$rules = array('username'=>'required|max:50', 'email'=>'unique:users,email', 'password'=>'required|max:50');
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$this->user->fill($input);
		$this->user->save();

		return Redirect::route('user.index');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->user->find($id);
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


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
