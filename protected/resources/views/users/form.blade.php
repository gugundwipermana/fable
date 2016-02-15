<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
  {!! Form::label('name', 'Name') !!}

  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter new name']) !!}

  <p class="help-block">Masukan name article diatas.</p>
</div>

<div class="form-group">

  {!! Form::label('email', 'Email') !!}

  {!! Form::input('email', 'email', null, ['class' => 'form-control']) !!}

</div>

@if($submitButtonText == 'Save')
<div class="form-group">
  {!! Form::label('password', 'Password') !!}

  {!! Form::password('password', ['class' => 'form-control']) !!}

</div>

@endif


<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>
<a href="{{ url('/users') }}" class="btn btn-default">CANCEL</a>