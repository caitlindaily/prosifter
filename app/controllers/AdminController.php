<?php

class AdminController extends BaseController {

    public function getIndex() {

        return View::make('admin.index');

    }

    // DELETE ME
    public function getRoles() {
        return View::make('admin.roles');

    }

    // DELETE ME
    public function getNewRole() {
        return View::make('admin.new-role');
    }

    public function getUsers() {
        $users = User::paginate(5);


        return View::make('admin.users')->with('users', $users);
    }

    public function getNewUser() {

        $users = User::orderBy('created_at', 'desc')->paginate(5);


        return View::make('admin.new-user')->with('users', $users);

    }

    public function postUser() {
        // save a new user
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->fails()) {

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

            if (Input::hasFile('image') && Input::file('image')->isValid()) {
                $post->addUploadedImage(Input::file('image'));
                $post->save();
            }

            Session::flash('successMessage', 'Post added successfully!');
            return Redirect::action('AdminController@getIndex');
        }
    }

    public function putUsers($id) {
        // update existing user
    }

    public function deleteUser($id) {
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('successMessage', 'User deleted successfully');

        return Redirect::action('AdminController@getUsers');
    }

    public function getProfile() {
        return View::make('admin.my-profile');
    }
}