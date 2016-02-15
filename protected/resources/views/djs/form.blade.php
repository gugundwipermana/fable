<div class="row">
  <div class="col-md-6">
    <div class='box box-info'>
      <div class='box-body'>


        <div class="form-group">
          {!! Form::label('name', 'DJ Name') !!}

          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter DJ name']) !!}

          <p class="help-block">Masukan nama DJ.</p>
        </div>

        <div class="form-group">

          {!! Form::label('type', 'Type') !!}

          {!! Form::select('type', array('1' => 'Fable DJ Squad Teams', '2' => 'Internasional'), null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
          {!! Form::label('title', 'Title') !!}

          {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter title']) !!}

          <p class="help-block">Masukan title DJ.</p>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>

          {!! Form::textarea('description', null, ['id' => 'editor1', 'rows' => '10', 'cols' => '80']) !!}
        </div>



      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class='box box-info'>
      <div class='box-body'>



      <div class="form-group">
        {!! Form::label('facebook', 'Facebook') !!}

        <div class="form-inline">
          <div class="form-group">

            <label for="">https://www.facebook.com/</label>
            {!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'Enter Facebook']) !!}
            
          </div>
        </div>

        <p class="help-block">Masukan code facebook DJ.</p>
      </div>
      <div class="form-group">
        {!! Form::label('twitter', 'Twitter') !!}

        <div class="form-inline">
          <div class="form-group">

            <label for="">https://www.twitter.com/</label>
            {!! Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'Enter Twitter']) !!}
            
          </div>
        </div>

        <p class="help-block">Masukan code twitter DJ.</p>
      </div>
      <div class="form-group">
        {!! Form::label('instagram', 'Instagram') !!}

        <div class="form-inline">
          <div class="form-group">

            <label for="">https://www.instagram.com/</label>
            {!! Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'Enter Instagram']) !!}
            
          </div>
        </div>

        <p class="help-block">Masukan code instagram DJ.</p>
      </div>


      </div>
    </div>
  </div>





  <div class="col-md-12">
    <div class='box box-info'>
      <div class='box-body'>

      <div class="form-group">
        <img id="blah" src="#" alt="your image" />
      </div>

      <div class="form-group">
        <label for="exampleInputFile">Image DJ</label>

        {!! Form::file('image', ['class' => 'form-control', 'onchange' => 'readURL(this);']) !!}

        <p class="help-block">350 x 350 Max Size 2MB</p>
      </div>

      <div class="form-group">
        <label for="exampleInputFile">Background</label>

        {!! Form::file('background', ['class' => 'form-control']) !!}

        <p class="help-block">Please input your background DJ. 1920 x 1920 Max Size 2MB</p>
      </div>



      <button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>
      <a href="{{ url('/djs') }}" class="btn btn-default">CANCEL</a>

      </div>
    </div>
  </div>

</div>