<?php

class AdminController extends BaseController {

    public function showAdmin() {

        return View::make('admin.admin-index');

        // return View::make('posts.index')->with('posts', $posts);
    }

    public function showAdminRoles() {
        return View::make('admin.roles');

    }

    public function showAdminNewRole() {
        return View::make('admin.new-role');
    }

    public function showAdminUsers() {
        return View::make('admin.users');
    }

    public function showAdminNewUsers() {
        return View::make('admin.new-user');
    }

    public function showAdminProfile() {
        return View::make('admin.my-profile');
    }
}