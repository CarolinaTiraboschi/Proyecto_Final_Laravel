@extends('template')
<link href="/css/multi-select.css" rel="stylesheet" type="text/css">

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/jquery.multi-select.js"></script>
@section('pageTitle', 'Edita tu historia')


@section('mainContent')

<br>
<div class="container">
<div class="col-12 profile_username">
  <h3 style="text-align:center;">Edita tu historia</h3>
</div>
              <div class="col-md-12">
                @if (count($errors))
                  <div class="card-text" style='background-color: rgba(186, 13, 13, 0.40);'>
                    <div class="card-body">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li class="text-danger"> {{ $error }} </li>
                    @endforeach
                  </ul>
                </div>
                </div>
                <br>
                @endif
                  <form method="post" action="">

                      @csrf
                      {{ method_field('put') }}

                      <div class="form-group">
                        <h4>  <label for="name">Título</label></h4>
                          <input type="text" class="form-control" name="title" value="{{old('title', $postToUpdate->title) }}">
                          @error ('title')
                            <i style="color: red;"> {{ $errors->first('title') }}</i>
                          @enderror
                      </div>

                      <div class="form-group">
                          <h4><label for="description">Cuerpo Principal</label></h4>
                          <textarea class="form-control"  rows="10" name="paragraph">"{{old('paragraph', $postToUpdate->paragraph)}}"</textarea>
                          @error ('paragraph')
                            <i style="color: red;"> {{ $errors->first('paragraph') }}</i>
                          @enderror
                      </div>


              <div class="form-group">
                <label>Género:</label>
                <select multiple="multiple" name="category_id[]" id="category_id">
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                  @endforeach
                </select>
                <script type="text/javascript">
                $("#category_id").multiSelect({});
                </script>
              </div>

                      <button type="submit" class="btn btn-primary">Guardar cambios</button>
                  </form>


              </div>

  </div>


  @endsection
