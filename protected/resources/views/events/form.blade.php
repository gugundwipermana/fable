<div class="form-group">
  {!! Form::label('title', 'Event Title') !!}

  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter event title']) !!}

  <p class="help-block">Masukan judul event.</p>
</div>

<div class="form-group">
  {!! Form::label('date', 'Tanggal Event') !!}

  <div class="input-group">
    <div class="input-group-addon">
      <i class="fa fa-calendar"></i>
    </div>
    {!! Form::text('date', null, ['class' => 'form-control', 'placeholder' => 'Tahun/Bulan/Tanggal', 'id' => 'datemask']) !!}
  </div>
  <p class="help-block">Masukan tanggal event.</p>
</div>

<div class="form-group">

  {!! Form::label('type', 'Type') !!}

  {!! Form::select('type', array('1' => 'Nasional', '2' => 'Internasional'), null, ['class' => 'form-control']) !!}

</div>

<hr/>

<div class="form-group">
  <img id="blah" src="{{ asset('file_upload/img/events/') }}/{{ $event->cover or '' }}" alt="your image" />
</div>

<div class="form-group">
  <label for="exampleInputFile">Cover</label>

  {!! Form::file('image', ['class' => 'form-control', 'onchange' => 'readURL(this);']) !!}

  <p class="help-block">736 x 1011. Max Size 2MB</p>
</div>

<div class="form-group">
  {!! Form::label('video', 'Video Name') !!}

  {!! Form::text('video', null, ['class' => 'form-control', 'placeholder' => 'Video name', 'id' => 'videoname', 'readonly' => 'true']) !!}

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


<div class="form-group">
  <label for="exampleInputEmail1">Description</label>

  {!! Form::textarea('description', null, ['id' => 'editor1', 'rows' => '10', 'cols' => '80']) !!}
</div>




<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>

<a href="{{ url('/events') }}" class="btn btn-default">CANCEL</a>