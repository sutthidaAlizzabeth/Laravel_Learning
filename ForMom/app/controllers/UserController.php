<?php
	
	class UserController extends BaseController
	{
		//gets the view for the register page
		public function getCreate()
		{
			return "register page";
		}
		//gets the viw for the login page
		public function getLogin()
		{
			return "login page";
		}

		public function postCreate()
		{
			return "register page";
		}
		//gets the viw for the login page
		public function postLogin()
		{
			return "login page";
		}

	}

?>