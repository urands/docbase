@extends('layer.main')


@section('content')

<div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Список проектов</h1>
                </div>
                <!-- /.col-lg-12 -->
            <div class="col-lg-12">
				<a href="{{route('project.create')}}" > <button class="btn btn-outline btn-primary btn-lg btn-block" type="button">Создать новый проект</button> </a>
				<br/>
			</div>
            </div>

            <div class="row">
			<div class="col-lg-12">
            <div class="panel panel-default">
            <div class="panel-heading">Список проектов</div>
            <div class="panel-body">
            @foreach( $projects as $key => $project )
            	 <div class="col-lg-3">
            	 
            	 <div>
            	 <a href="{{ route('project.show', $project->id) }}" >
            	 	<p> <h4>{{ $project->title }}</h4></p>
            	 </a>
            	 	<em>{{ $project->pressmark }}</em>
            	
	           	 	</div>
           	 	

            	 </div>

            @endforeach
            </div></div>
            </div></div>
 </div>

@endsection