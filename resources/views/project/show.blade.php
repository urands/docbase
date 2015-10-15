@extends('layer.main')


@section('content')

<div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><a href="javascript:history.back();"><i class="fa fa-arrow-left"  title="Вернуться назад"></i></a> {{$project->title}} <em>({{$project->pressmark}})</em>    
				@can('manage',$project)
                    <a href="{{ route('project.edit', $project->id)}}"><i class="fa fa-pencil-square-o" title="Редактировать проект"></i></a>
                @endcan

                   </h1>
                </div>
            @can('manage',$project)
            <div class="col-lg-12">
                <a href="{{route('document.create', $project->id)}}" > <button class="btn btn-outline btn-primary btn-lg btn-block" type="button">Создать новый документ</button> </a>
                <br/>
            </div>

            <div class="col-lg-12">
                <a href="{{route('project.create')}}" > <button class="btn btn-outline btn-primary btn-lg btn-block" type="button">Список документов проекта</button> </a>
                <br/>
            </div>

            @endcan



                <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                
                <blockquote>
                   <p class='text-muted'>{{$project->description}}</p>
                </blockquote>


                <div class='panel panel-default'>
                <div class='panel-heading'>Дополнительные файлы</div>
                <div class='panel-body'>
                <ul>
                @foreach( $project->getUsers() as $user )
                   <li>{{$user}}</li>
                @endforeach
                </ul>
                </div>
                </div>
                    
                <div class='panel panel-default'>
                <div class='panel-heading'>Доступ разрешен</div>
                <div class='panel-body'>
                <ul>
                @foreach( $project->getUsers() as $user )
                   <li>{{$user}}</li>
                @endforeach
                </ul>
                </div>
                </div>


			</div>


            </div>
 </div>

@endsection