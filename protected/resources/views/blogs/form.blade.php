<div class="form-group">
  {!! Form::label('title', 'Judul') !!}

  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter judul']) !!}

  <p class="help-block">Masukan nama produk.</p>
</div>

<div class="form-group">
  {!! Form::label('subtitle', 'Sub Judul') !!}

  {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Enter sub judul']) !!}

  <p class="help-block">Masukan nama produk.</p>
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Description</label>

  {!! Form::textarea('description', null, ['id' => 'editor1', 'rows' => '10', 'cols' => '80']) !!}
</div>


<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>

<a href="{{ url('/blogs') }}" class="btn btn-default">CANCEL</a>
