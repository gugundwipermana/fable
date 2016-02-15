<div class="form-group">

  {!! Form::label('category_menu_id', 'Category Menu') !!}

  {!! Form::select('category_menu_id', $categorymenus, null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
  {!! Form::label('title', 'Menu Title') !!}

  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter menu title']) !!}

  <p class="help-block">Masukan judul menu.</p>
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Description</label>

  {!! Form::textarea('description', null, ['id' => 'editor1', 'rows' => '10', 'cols' => '80']) !!}
</div>


<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>
<a href="{{ url('/menus') }}" class="btn btn-default">CANCEL</a>
