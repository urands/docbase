@extends('layer.full')


@section('content')


@if (Auth::check())

<div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                @if (empty ($project) )
                    <h1 class="page-header">Создать новый проект</h1>
                @else
                	<h1 class="page-header">Редактировать проект</h1>
                @endif
                </div>
                <!-- /.col-lg-12 -->
            <div class="col-lg-12">
				@if (empty ($project) )
            		{!! Form::open(array('route' => 'project.store', 'enctype' => 'multipart/form-data' ) ) !!}   
            	@else
            		{!! Form::model($project, array('route' => array('project.update', $project->id ), 'enctype' => 'multipart/form-data' , 'method' => 'PUT') ) !!}   
            	@endif 
    	
            	<div class="form-group">
                         {!! Form::label('title','Наименование проекта') !!}
                         {!! Form::text('title', null , array('class' => 'form-control' ) ) !!}
                         <p class="help-block">полное наименование проекта</p>
                </div>

            	<div class="form-group">
                         {!! Form::label('pressmark','Шифр проекта') !!}
                         {!! Form::text('pressmark', null , array('class' => 'form-control' ) ) !!}
                         <p class="help-block">шифр проекта</p>
               </div>


                <div class="form-group">
                         {!! Form::label('type','Тип проекта') !!}
                         {!! Form::select( 'type', $type, null , array('class' => 'form-control' ) ) !!}
                         <p class="help-block">выберите тип проект</p>
                </div>


                <div class="form-group">
                         {!! Form::label('description','Описание проекта') !!}
                         {!! Form::textarea('description', null , array('class' => 'form-control' ) ) !!}
                         <p class="help-block">описание проекта</p>
                </div>

                @if (empty ($project) )   
                 <div class="form-group">
                         {!! Form::label('users','Список пользователей проекта') !!}
                     
                         {!! Form::select( 'users[]', $users, Auth::id(), array('class' => 'form-control' ,'multiple' => 'multiple' ) ) !!}
                         <p class="help-block">выберите пользователей имеющих доступ к данному проекту, используя Ctrl+Left Click</p>
                </div>
                @else
                	<div class='panel panel-default'>
                	<div class='panel-heading'>Доступ разрешен</div>
                		<div class='panel-body'>
                	<ul>
                	@foreach( $project->getUsers() as $user )
                		<li> {{$user}}</li>
                	@endforeach
                	</ul>
                	</div>
                	</div>

                @endif 


     			<div class="form-group">
     			@if (empty ($project) )     
               		  {!! Form::button('Создать проект', array('class' => 'btn btn-default', 'type' => 'submit' ) ) !!}
               	@else
					  {!! Form::button('Сохранить изменения', array('class' => 'btn btn-default', 'type' => 'submit' ) ) !!}
               	@endif

                </div>
	
		    	{!! Form::close() !!}
			</div>
      </div>
 </div>

 @else
 <div class="container-fluid">
	     <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Операция запрещена</h1>
         </div>
  </div>

 @endif

@endsection