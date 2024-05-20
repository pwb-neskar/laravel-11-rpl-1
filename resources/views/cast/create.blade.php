@extends('template.master')

@section('title-page', 'Form')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Add Data Cast</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" id="nama" placeholder="Enter Nama" value="{{ old('nama') }}">
          </div>
          @error('nama')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" name="umur" class="form-control @error('umur') {{ 'is-invalid' }} @enderror" id="umur" placeholder="Enter Umur" value="{{ old('umur') }}">
          </div>
          @error('umur')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" cols="30" rows="10" class="form-control @error('bio') {{ 'is-invalid' }} @enderror" placeholder="Enter Umur">{{ @old('bio') }}</textarea>
          </div>
          @error('bio')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  <!--/.col (left) -->
</div>
@endsection