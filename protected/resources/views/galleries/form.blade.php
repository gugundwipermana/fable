<div class="form-group">
  {!! Form::label('title', 'Gallery Title') !!}

  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter event title']) !!}

  <p class="help-block">Masukan judul event.</p>
</div>

<div class="form-group">
  {!! Form::label('date', 'Tanggal Gallery') !!}

  <div class="input-group">
    <div class="input-group-addon">
      <i class="fa fa-calendar"></i>
    </div>
    {!! Form::text('date', null, ['class' => 'form-control', 'placeholder' => 'Tahun/Bulan/Tanggal', 'id' => 'datemask']) !!}
  </div>
  <p class="help-block">Masukan tanggal gallery.</p>
</div>

<hr/>

<div class="form-group">
  <img id="blah" src="{{ asset('file_upload/img/galleries/') }}/{{ $gallery->cover or '' }}" alt="your image" />
</div>

<div class="form-group">
  <label for="exampleInputFile">Cover</label>

  {!! Form::file('image', ['class' => 'form-control', 'onchange' => 'readURL(this);']) !!}

  <p class="help-block">736 x 1011. Max Size 2MB</p>
</div>


<div class="form-group">
  {!! Form::label('video', 'Video Name') !!}

  {!! Form::text('video', null, ['class' => 'form-control', 'placeholder' => 'Video Name', 'id' => 'videoname', 'readonly' => 'true']) !!}

  <p class="help-block">Nama Video otomatis terisi</p>
</div>

<div class="form-group">
  {!! Form::label('youtube', 'Youtube Code') !!}

  <div class="form-inline">
    <div class="form-group">

      <label for="">https://www.youtube.com/watch?v=</label>
      {!! Form::text('youtube', null, ['class' => 'form-control', 'placeholder' => 'Enter youtube code']) !!}
      
    </div>
  </div>

  <p class="help-block">Masukan Code URL Embed Youtube.</p>
</div>


<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>
<a href="{{ url('/galleries') }}" class="btn btn-default">CANCEL</a>