@extends('layouts.master')


@section('content')

      <div role="main" class="main">

        <section class="page-top">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li class="active">Edit</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h2>Edit Profile</h2>
              </div>
            </div>
          </div>
        </section>

        <div class="container">

          <div class="row">
            <div class="col-md-12">

              <div class="row featured-boxes login">
                <div class="col-md-12">
                  <div class="featured-box featured-box-secundary default info-content">
                    <div class="box-content">
                      <h4>Please edit desired fields</h4>
                      {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'files' => true)) }}
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-6">
                              <label>First Name</label>
                              {{ Form::text('first_name', null, array('class' => 'form-control input-lg')) }}
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-6">
                              <label>Last Name</label>
                              {{ Form::text('last_name', null, array('class' => 'form-control input-lg')) }}
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-6">
                              <label>Email</label>
                              {{ Form::email('email', null, array('class' => 'form-control input-lg')) }}
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <span>{{ Form::submit('Submit', array('class' => 'btn btn-primary pull-right push-bottom')) }}</span>
                          </div>
                        </div>
                      {{ Form::close() }}
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

@stop