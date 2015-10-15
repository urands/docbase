@extends('layer.main')


@section('content')


@if (Auth::check())

<div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                @if (empty ($project) )
                    <h1 class="page-header"><a href="javascript:history.back();"><i class="fa fa-arrow-left"  title="Вернуться назад"></i></a> Создать новый документ</h1>
                @else
                	<h1 class="page-header"><a href="javascript:history.back();"><i class="fa fa-arrow-left"  title="Вернуться назад"></i></a> Редактировать документ</h1>
                @endif
                </div>


<div class="col-lg-12">


<div class="wizard" data-initialize="wizard" id="myWizard">
  <div class="steps-container">
    <ul class="steps">
      <li data-step="1" data-name="campaign" ><span class="badge">1</span>Загрузка файлов<span class="chevron"></span></li>
      <li data-step="2" class="active" ><span class="badge">2</span>Заполнение атрибутов<span class="chevron"></span></li>
      <li data-step="3" data-name="template"><span class="badge">3</span>Проверка и создание<span class="chevron"></span></li>
    </ul>
  </div>
  <div class="actions">
    <button type="button" class="btn btn-default btn-prev"><span class="glyphicon glyphicon-arrow-left"></span>Назад</button>
    
  </div>
  <div class="step-content">
    <div class="step-pane active sample-pane alert" data-step="1">

    <div class="row">
    {!! Form::open(array('route' => 'project.store', 'enctype' => 'multipart/form-data' ) ) !!}   
    <div class="col-lg-12">
                   <div class="form-group">
                         {!! Form::label('title','Загрузить файл документа') !!}
                         {!! Form::file('file', null , array('class' => 'form-control' ) ) !!}
                         <p class="help-block">файл документа - это основной файл документа для проверки и печати. Все текстовые файлы должны быть в формате PDF.
                        <br/><small class="text-danger">Загрузка возможна только в формате PDF или ZIP.</small></p>
                        <div class="row">
                        <div class="col-lg-3">
                        {!! Form::label('title','Формат листа') !!}
                        {!! Form::select( 'sheet_format', array( -1 => "Формат не определен",
                                                                   0 => "А0 841х1189мм",
                                                                   1 => "А1 594х841мм",
                                                                   2 => "А2 420х594",
                                                                   3 => "А3 297х420",
                                                                   4 => "А4 210х297"

                         ), -1, array('class' => 'form-control' ) ) !!}

                        </div>    
                        <div class="col-lg-3">
                        {!! Form::label('title','Масштаб') !!}
                        {!! Form::select( 'sheet_format', array( -1 => "Формат не определен",
                                                                   0 => "А0 841х1189мм",
                                                                   1 => "А1 594х841мм",
                                                                   2 => "А2 420х594",
                                                                   3 => "А3 297х420",
                                                                   4 => "А4 210х297"

                         ), -1, array('class' => 'form-control' ) ) !!}

                        </div>
                        <div class="col-lg-2">
                        {!! Form::label('title','Кол. страниц') !!}
                        {!! Form::number( 'sheet_count', 1,array('class' => 'form-control' ) ) !!}

                        </div>

                         </div>

                        </div>

                        </div>
    </div>
                    <div class="row">
                    <div class="col-lg-12">
                        <hr/>
                        <div class="form-group">
                         {!! Form::label('title','Загрузить исходный файл документа') !!}
                         {!! Form::file('file', null , array('class' => 'form-control' ) ) !!}
                         <p class="help-block">Исходный файл: это файлы разработанные в исходной программе проектирования. Если исходный документ состоит из нескольких файлов, необходимо создать ZIP архив.</p>

                        <div class="row">
                        <div class="col-lg-4">
                        {!! Form::label('title','Программа проектирования') !!}
                        {!! Form::select( 'sheet_format', array( -1 => "Программа не определена",
                                                                   0 => "А0 841х1189мм",
                                                                   1 => "А1 594х841мм",
                                                                   2 => "А2 420х594",
                                                                   3 => "А3 297х420",
                                                                   4 => "А4 210х297"

                         ), -1, array('class' => 'form-control' ) ) !!}

                        </div>    
                        <div class="col-lg-2">
                        {!! Form::label('title','Версия') !!}
                        {!! Form::select( 'sheet_format', array( -1 => "Версия не определена",
                                                                   0 => "А0 841х1189мм",
                                                                   1 => "А1 594х841мм",
                                                                   2 => "А2 420х594",
                                                                   3 => "А3 297х420",
                                                                   4 => "А4 210х297"

                         ), -1, array('class' => 'form-control' ) ) !!}

                        </div>
 

                         </div>


                        </div>




                    </div>
                    </div>

                    <div class="row">
                     <div class="col-lg-12">
                     <hr/>
                     <div class="form-group">
                            {!! Form::button('Загрузить файлы', array('class' => 'btn btn-default', 'type' => 'submit' ) ) !!}
                            {!! Form::button('Пропустить загрузку', array('class' => 'btn btn-default btn-next', 'type' => 'button' ) ) !!}

                    </div>
                    </div>
                    </div>
                {!! Form::close() !!}
    
        <hr />
        <p class="help-block">Если пропустить загрузку файлов, характер документа будет: "находящийся в разработке". Данный документ не подписанный (не заверенный) разработчиком и предназначенный для дальнейшей проработки.</p>

    </div>
    <div class="step-pane sample-pane alert" data-step="2">
    @include ('document.form_atribute')
    </div>
    <div class="step-pane sample-pane bg-danger alert" data-step="3">
      <h4>Design Template</h4>
      <p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip. Sea lettuce lettuce water chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek soko chicory celtuce parsley jÃ­cama salsify. </p>
    </div>
  </div>
</div>

</div>





















     
                <!-- /.col-lg-12 -->
       
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


@section ('script')

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    jQuery(document).ready(function($) {
        $('#myWizard').wizard(2);
    });
    </script>

@endsection