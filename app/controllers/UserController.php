<?php

class UserController extends BaseController {

	public function info()
	{
		$info=User::all();
		$data=array('info'=>$info);
		return View::make('user.info',$data);
	 }

	 
	public function login()
	{
		return View::make('user.login');
	}
	
	public function loginForm()
	{

		$email=Input::get('email');
		$pass=md5(Input::get('password'));
		$credentials=Input::only('email', 'password');
		$rules= array('email'=>'required|max:255',
		'password'=>'required|max:255|exists:users,password,email,'.$email);
		$errorMessages = array(
			'required' => 'The field is required.',
			'max' => 'Max field length is 255.',
			'exists' => 'The field is invalid.'
		);
		$val=Validator::make(array('email'=>$email, 'password'=>$pass),$rules,$errorMessages);
			if($val->fails())
			{
				return Redirect::to('/')->withErrors($val->errors())->withInput();
			
			}
			$user= User::where(array('email'=> $email, 'password'=> $pass))->first();
			Session::put('user_id_hash', base64_encode($user->id));
		 	return Redirect::to('info');
	
	}

	//task calendar
	public function todo()
	{
		// $user=User::find(base64_decode(Session::get('user_id_hash')));
		// $info=To_do::where('user_id',$user)->first();
		
		 $ses_id=User::find(base64_decode(Session::get('user_id_hash')));
		 $todo=To_do::where('user_id',$ses_id->id)->get();
		 $data=array('info'=>$todo);
		// $info=To_do::all();
		// $data=array('info'=>$info);
		// return View::make('user.info',$data);
		return View::make('user.todo',$data);
		// echo "<pre>";
		// var_dump($todo);	
	}
	public function taskEnter()
	{
		
	   $insert=Input::all();
	   $todo= new To_do;
		$todo->task_name=$insert['task_name'];
		$todo->today=$insert['today'];
		$todo->task_expire=$insert['task_expire'];
	   $todo->description=$insert['description'];
	   $todo->done=$insert['done'];
	   $todo->user_id=$insert['user_id'];								
				//DB::table('users')->insert($data);
				$todo->save();
			   return Redirect::route('info');
	}
	
	public function deleteTask($id)
	{
		To_do::where('id', $id)->delete();
		return Redirect::to('todo');
	}
   
	//edit user info
	
	public function edit()
	 {
		
		$id= User::loggedUserId();
	 	$info=User::where('id', $id)->first();
	 	return View::make('user.edit', array('info'=>$info));
	 }
	 public function update()
	{
		$id= User::loggedUserId();
		
		$update=Input::all();
		$data=array(
					
					'name'=>$update['name'],
					'email'=>$update['email'],
					'password'=>md5($update['password']),
					'confirmed'=>$update['confirmed'],
					'role_id'=>$update['role_id']					
				);
				User::where('id', $id)->update($data);
				return Redirect::to('info');
	}
	
	//new user

	public function new()
	{
		return View::make('user.new');
	}

	public function save()
	{
		$insert=Input::all();
		$user= new User;
		$user->name=$insert['name'];
		$user->email=$insert['email'];
		$user->password=md5($insert['password']);
		$user->confirmed=$insert['confirmed'];
		$user->role_id=$insert['role_id'];									
				//DB::table('users')->insert($data);
				$user->save();
			   return Redirect::route('info');
	}

	//logout user
	public function logout() 
	{
		//Auth::logout();
		Session::flush('user_id_hash');
		return Redirect::to('/');
	}

	//delete user
	public function delete($id)
	 {	
	 	User::where('id',$id)->delete();
	 	return Redirect::route('info');

	 }



}
