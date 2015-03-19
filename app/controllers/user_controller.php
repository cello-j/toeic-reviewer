<?php
class UserController extends AppController
{
    public function index()
    {
	$this->set(get_defined_vars());
    }
    public function welcome()
    {
        $this->set(get_defined_vars());
	$username = Param::get('username');
	$password = Param::get('password');
	$loggeduser = User::get_user($username, $password);
	$this->set('userlist', $loggeduser);
    }
       
    public function view()
    {
      	$userlist = User::get_all_user();
       	$this->set(get_defined_vars());
    }
}