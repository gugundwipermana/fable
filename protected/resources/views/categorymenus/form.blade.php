<div class="form-group">
  {!! Form::label('name', 'Name') !!}

  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) !!}

  <p class="help-block">Masukan nama produk.</p>
</div>

<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>
<a href="{{ url('/categorymenus') }}" class="btn btn-default">CANCEL</a>
