@extends('layer.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Авторизация</h3>
                    </div>
                    <div class="panel-body">
                       	<form method="POST" action="{{ url('/auth/login') }}" role="form" >
                       		{!! csrf_field() !!}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" >Запомнить
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Вход" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection