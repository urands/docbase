@extends('layer.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Регистрация пользователя</h3>
                    </div>
                    <div class="panel-body">
  

   <form method="POST" action="{{ url('auth/register') }} " class="form-signin">
    {!! csrf_field() !!}

    <div>
        Name
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input class="form-control"  type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input class="form-control" type="password" name="password_confirmation">
    </div>

    <div>
        <button class="form-control" type="submit">Register</button>
    </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endsection