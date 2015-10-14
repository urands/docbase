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
			</div>


            </div>
 </div>

@endsection