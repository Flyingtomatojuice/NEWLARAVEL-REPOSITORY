@extends('admin.index')

@section('content')
{{-- <button class="button-29" role="button">Create Announcement</button> --}}
<div class="space">
    space
</div>

<div class="create-announcement">
  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="row">
    <div class="col-sm-12" style="text-align: center; font-size:30px">
      <label>Create Announcement</label>
    </div>
  </div>
 <!-- --> 
 <form action="{{ route('upload-announce')}}" method="POST"  enctype="multipart/form-data">
  @csrf
<div class="card" style="width: 100%;">
  <div class="card-header">  
      
      <strong class="details">Title</strong><br>
      <input type="text" name="title" class="form-control form-control-lg"><br> <br> 
      <strong class="details">Content</strong><br>
      <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10"></textarea><br>
      <strong class="details">Image Upload</strong><br>
      <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control" multiple>
          
      </div>
       
  </div>      
</div>
<div class="d-flex justify-content-end">
      <input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg form-control">
</div>
<br>
<a href="{{ route('announcementlist') }}">
  <button type="button" class="btn btn-primary btn-lg form-control">List of Announcement</button>
  </a>
</form>
</div>

@endsection