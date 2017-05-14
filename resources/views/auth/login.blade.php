@extends('layouts.master')

@section('content')

    <div style="z-index: 1003;" class="col-xs-12 col-md-4 col-md-offset-4">

        <h2 style="color:#000; font-weight:700; margin-top: 15%; margin-bottom: 30px;" class="text-center">Welcome to your remote Reference App </h2>
        <p class="text-center">An application that allows you to look up your debt status</p>

        <div style="box-shadow:2px 2px 5px grey; padding-top: 60px;" class="well well-lg">

            {!! Form::open(['url' => url('/login')]) !!}

                <div class="form-group">

                    <label>Username</label>
                    <input name="username" type="text" class="form-control" placeholder="Username">

                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Password">

                </div>

                <div class="form-group">

                    <label>
                      <input type="checkbox" name="remember"> Remember me
                    </label>

                </div>

                <button type="submit" class="btn btn-default">Submit</button>

            {!! Form::close() !!}

        </div>

    </div>

@endsection
