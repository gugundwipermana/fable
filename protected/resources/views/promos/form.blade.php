<div class="form-group">
  {!! Form::label('title', 'Judul Promo') !!}

  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter title']) !!}

  <p class="help-block">Masukan title DJ.</p>
</div>

<div class="form-group">
  {!! Form::label('date', 'Tanggal Promo') !!}

  <div class="input-group">
    <div class="input-group-addon">
      <i class="fa fa-calendar"></i>
    </div>
    {!! Form::text('date', null, ['class' => 'form-control', 'placeholder' => 'Tahun/Bulan/Tanggal', 'id' => 'datemask']) !!}
  </div>
  <p class="help-block">Masukan tanggal promo.</p>
</div>


<div class="form-group">
  <label for="exampleInputEmail1">Description</label>

  {!! Form::textarea('description', null, ['id' => 'editor1', 'rows' => '10', 'cols' => '80']) !!}
</div>


<div class="form-group">
  <label for="exampleInputFile">Image</label>

  {!! Form::file('image', ['class' => 'form-control']) !!}

  <p class="help-block">736 x 1011. Max Size 2MB</p>
</div>



<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>
<a href="{{ url('/promos') }}" class="btn btn-default">CANCEL</a>
