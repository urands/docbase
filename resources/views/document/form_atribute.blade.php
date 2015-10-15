  <div class="row">
     <div class="col-lg-12">
                @if (empty ($project) )
                    {!! Form::open(array('route' => 'project.store', 'enctype' => 'multipart/form-data' ) ) !!}   
                @else
                    {!! Form::model($project, array('route' => array('project.update', $project->id ), 'enctype' => 'multipart/form-data' , 'method' => 'PUT') ) !!}   
                @endif 

                <div class="form-group">
                {!! Form::label('designator','Обозначение') !!}
                <div class="input-group">
                         <span class="input-group-addon"><a href="#"><i class="fa fa-external-link"  title="Выбрать новое обозначение"></i></a></span>
                         {!! Form::text('designator', null , array('class' => 'form-control' , 'placeholder' => 'Выберите обозначение...', 'disabled') ) !!}
                </div>
                <p class="help-block">Обозначение без указания вида документа. Например: <strong>АЕСН.589800.015</strong>. Вы можете выбрать новое обозначение из БД.</p>
                </div>
        
                <div class="form-group">
                         {!! Form::label('name','Наименование документа') !!}
                        {!! Form::text('name', null , array('class' => 'form-control' , 'placeholder' => 'Введите наименование...') ) !!}      
                         <p class="help-block">полное наименование документа</p>
                </div>


                <div class="form-group">
                {!! Form::label('formation','Вид документа') !!}
                <div class="input-group">
                        <span class="input-group-addon"><a href="#"><i class="fa fa-external-link"  title="Выбрать новое обозначение"></i></a></span>
                        {!! Form::text('formation', null , array('class' => 'form-control' , 'placeholder' => 'Выберите вид документа...', 'disabled') ) !!}      
                </div>
                    <p class="help-block">вид документа согласно ГОСТ 2.102</p>
                </div>


                <div class="form-group">
                         {!! Form::label('document_type','Характер документа') !!}
                     
                         {!! Form::select( 'document_type', array( 0 => "0 - Документ находящийся в разработке",
                                                                   1 => "1 - Оригинал",
                                                                   2 => "2 - Подлинник",
                                                                   3 => "3 - Дубликат",
                                                                   4 => "4 - Копия"

                         ), 0, array('class' => 'form-control' , 'disabled') ) !!}
                         <p class="help-block">Характер и коды документа согласно ГОСТ 2.102 и ГОСТ 2.104.</p>
                </div>
     


                <div class="form-group">
                         {!! Form::label('pressmark','Шифр проекта') !!}
                         {!! Form::text('pressmark', null , array('class' => 'form-control' ) ) !!}
                         <p class="help-block">шифр проекта</p>
               </div>


                <div class="form-group">
                         {!! Form::label('type','Тип проекта') !!}
                     
                         <p class="help-block">выберите тип проект</p>
                </div>


                <div class="form-group">
                         {!! Form::label('description','Описание проекта') !!}
                         {!! Form::textarea('description', null , array('class' => 'form-control' ) ) !!}
                         <p class="help-block">описание проекта</p>
                </div>

 
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
