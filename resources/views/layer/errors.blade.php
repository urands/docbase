@section('errors')        
        {{--Ошибки--}}
        @if ($errors->has())
        <div class="container">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <div class="alert alert-danger" role="alert">
                      <button class="close" aria-label="Close" data-dismiss="alert" type="button">
                          <span aria-hidden="true">×</span>
                      </button>
                      <ul>                         
                          @foreach($errors->all() as $error)                         
                              <li> {{{ $error }}}</li>                         
                          @endforeach   
                      </ul>
                  </div>
              </div>
          </div>
        </div>
      @endif
@endsection