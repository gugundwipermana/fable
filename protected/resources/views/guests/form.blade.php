<div class="form-group">

  {!! Form::label('event_id', 'Event') !!}

  {!! Form::select('event_id', $events, null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
  {!! Form::label('name', 'Your Full Name') !!}

  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter fullname']) !!}

  <p class="help-block">Masukan nama anda.</p>
</div>

<div class="form-group">
  {!! Form::label('age', 'Age') !!}

  {!! Form::text('age', null, ['class' => 'form-control', 'placeholder' => 'Enter Age']) !!}

  <p class="help-block">Masukan umur.</p>
</div>

<div class="form-group">
  {!! Form::label('phone', 'Phone Number') !!}

  {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter your phone number']) !!}

  <p class="help-block">Masukan no handphone.</p>
</div>

<div class="form-group">
  {!! Form::label('email', 'Your Email') !!}

  {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Your Email']) !!}

  <p class="help-block">Masukan nama produk.</p>
</div>


<div class="form-group">

  {!! Form::label('genre', 'Genre') !!}

  {!! Form::select('genre', array('1' => 'Hip Hop', '2' => 'Dangdut'), null, ['class' => 'form-control']) !!}

</div>



<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>
