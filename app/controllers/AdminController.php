<?php

class AdminController extends BaseController {

    public function __construct()
    {
       // call base controller constructor
       parent::__construct();

       // run auth filter before all methods on this controller 
       $this->beforeFilter('auth.basic');
    }


    public function getIndex() 
    {
        return View::make('admin.index');
    }

    
    public function getRoles() 
    {
        return View::make('admin.roles');
    }

    
    public function getNewRole() 
    {
        return View::make('admin.new-role');
    }

    public function getUsers() 
    {
        $users = User::orderBy('created_at', 'desc')->paginate(5);
        return View::make('admin.users')->with('users', $users);
    }

    public function getNewUser() 
    {

        $users = User::orderBy('created_at', 'desc')->paginate(5);
        return View::make('admin.new-user')->with('users', $users);
    }

    public function postUser() 
    {
        // save a new user
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->fails()) 
        {
            Session::flash('errorMessage', 'Houston we have a problem!');
            return Redirect::back()->withInput()->withErrors($validator);
        
        } else {

            $user = new User();
            $user->first_name = Input::get('firstName');
            $user->last_name = Input::get('lastName');
            $user->email = Input::get('email');
            $user->role = Input::get('role');
            $user->password = Hash::make(Input::get('password'));


            $user->save();

            if (Input::hasFile('image') && Input::file('image')->isValid()) 
            {
                $post->addUploadedImage(Input::file('image'));
                $post->save();
            }

            Session::flash('successMessage', 'Post added successfully!');
            return Redirect::action('AdminController@getIndex');
        }
    }

    public function getUser($id) 
    {
        $user = User::find($id);
        return View::make('admin.edit-users')->with('user', $user);
    }

    public function putUser($id) 
    {
        $user = new User();

        if ($id != null) 
        {
            $user = User::findOrFail($id);
        }

        $user = User::find($id);
        $user->first_name = Input::get('first_name');
        $user->last_name = Input::get('last_name');
        $user->email = Input::get('email');
        $user->role = Input::get('role');

        $user->save();

        return Redirect::action('AdminController@getUsers');

    }

    public function deleteUser($id) 
    {
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('successMessage', 'User deleted successfully');
        return Redirect::action('AdminController@getUsers');
    }


    public function getProfile() 
    {
        return View::make('admin.my-profile');
    }

    public function getAdminRole($id) 
    {
        $user = User::find($id);

        $user->role = 'admin';
        $user->save();
        return Redirect::action('AdminController@getUsers');
    }

    public function getUserRole($id) 
    {
        $user = User::find($id);

        $user->role = 'user';
        $user->save();
        return Redirect::action('AdminController@getUsers');
    }
}