<div class="form-group">
  {!! Form::label('firstquote', 'Quote Awal') !!}

  {!! Form::text('firstquote', null, ['class' => 'form-control', 'placeholder' => 'Enter Quote Awal yang berwarna ungu']) !!}

  <p class="help-block">Masukan nama produk.</p>
</div>

<div class="form-group">
  {!! Form::label('lastquote', 'Quote Akhir') !!}

  {!! Form::text('lastquote', null, ['class' => 'form-control', 'placeholder' => 'Enter Quote Akhir yang berwarna putih']) !!}

  <p class="help-block">Masukan nama produk.</p>
</div>




<div class="form-group">
  {!! Form::label('video', 'Video Name') !!}

  {!! Form::text('video', null, ['class' => 'form-control', 'placeholder' => 'Enter Quote Akhir yang berwarna putih', 'id' => 'videoname', 'readonly' => 'true']) !!}

  <p class="help-block">Masukan nama produk.</p>
</div>

<div class="form-group">
  <label for="exampleInputFile">Music</label>

  {!! Form::file('music', ['class' => 'form-control']) !!}

  <p class="help-block">Max Size 3MB</p>
</div>


<hr/>
<div class="form-group">
  <img id="blah" src="{{ asset('img/') }}/backcover.jpg" alt="your image" width="200" />
</div>

<div class="form-group">
  <label for="exampleInputFile">Cover</label>

  {!! Form::file('image', ['class' => 'form-control', 'onchange' => 'readURL(this);']) !!}

  <p class="help-block">Max Size 2MB</p>
</div>
<hr/>


<div class="form-group">
  {!! Form::label('title', 'Judul Lagu') !!}

  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter title music']) !!}

  <p class="help-block">Masukan Judul lagu.</p>
</div>

<div class="form-group">
  {!! Form::label('band', 'Nama Band') !!}

  {!! Form::text('band', null, ['class' => 'form-control', 'placeholder' => 'Enter band name']) !!}

  <p class="help-block">Masukan nama band.</p>
</div>

<div class="form-group">
  {!! Form::label('album', 'Nama Album') !!}

  {!! Form::text('album', null, ['class' => 'form-control', 'placeholder' => 'Enter album name']) !!}

  <p class="help-block">Masukan nama album.</p>
</div>

<div class="form-group">
  {!! Form::label('date', 'Tanggal album') !!}

  <div class="input-group">
    <div class="input-group-addon">
      <i class="fa fa-calendar"></i>
    </div>
    {!! Form::text('date', null, ['class' => 'form-control', 'placeholder' => 'Enter tanggal album', 'id' => 'datemask']) !!}
  </div>
  <p class="help-block">Masukan tanggal album.</p>
</div>


<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>
<a href="{{ url('/covers') }}" class="btn btn-default">CANCEL</a>

