@extends('layer.main')


@section('content')

<div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><a href="javascript:history.back();"><i class="fa fa-arrow-left"></i></a> Проект
				@can('manage',$project)
                    <a href="{{ route('project.edit', $project->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                @endcan

                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            <div class="col-lg-12">
				<p class='lead'> {{$project->title}} </p>
			</div>


            </div>
 </div>

@endsection