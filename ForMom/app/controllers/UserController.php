<?php
	
	class UserController extends BaseController
	{
		//gets the view for the register page
		public function getCreate()
		{
			return View::make('user.register');
		}
		//gets the view for the login page
		public function getLogin()
		{
			return "login page";
		}

		//handle register form data
		public function postCreate()
		{
			$validate = Validator::make::(Input::all(), array(
				'username' => 'required|unique:user|min:4',
				'pass1' => 'required|min:6',
				'pass2' => 'required|same:pass1',
			));

			if($validate->fails())
			{
				return Redirect::route('getCreate')->withErrors($validate)->withInput();
			}
			else
			{
				$user = User::create(array(
					'username' => Input::get('username'),
					'password' => Input::get('password')
				));

				if($user)
				{
					return Redirect::route('home');
				}
			}
		}
		//handle login form data
		public function postLogin()
		{
			return "login page";
		}

	}

?>