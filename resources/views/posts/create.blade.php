@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/p" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
      <h2>Add a new post</h2>
    </div>
    <div class="col-8 offset-2">
      <div class="form-group row">
        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

          <input id="caption"
            type="text"
            class="form-control @error('caption') is-invalid @enderror"
            name="caption"
            value="{{ old('caption') }}"
            autocomplete="caption" autofocus>

          @error('caption')
            <strong>{{ $message }}</strong>
          @enderror
      </div>
      <div class="row">
        <label for="image" class="col-md-4 col-form-label">Post Image</label>
        <input type="file" class="form-control-file" id="image" name="image">
        @if($errors->has('caption'))
          <strong>{{ $error->first('image') }}</strong>
        @endif
      </div>

      <div class="row pt-4">
        <button class="btn btn-primary">Add new post</button>
      </div>
    </div>
  </form>
</div>
@endsection
