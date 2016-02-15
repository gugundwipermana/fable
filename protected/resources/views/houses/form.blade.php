
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>

          {!! Form::textarea('description', null, ['id' => 'editor1', 'rows' => '10', 'cols' => '80']) !!}
        </div>



      <button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>

		<a href="{{ url('/houses') }}" class="btn btn-default">CANCEL</a>

   