@extends('user.index')

@section('content')
<div class="padding">
 @foreach ($anc as $a)
 <div class="instagram-card">
  <div class="instagram-card-header">
    <img src="{{url('/images/admin.png')}}" class="instagram-card-user-image"/>
    <a class="instagram-card-user-name" href="">ADMIN</a>
    <div class="instagram-card-time">{{ $a->updated_at }}</div>
  </div>

  <div class="instagram-card-content">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @php
        $image =  explode('|',$a->file);
        @endphp
        @foreach($image as $key => $image)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
          <img class="imagedone" width=100% height=100% src="{{ URL::to($image)}}" >
       
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>

  <div class="instagram-card-content">
  <h2><p class="likes">{{ $a->title }}</h2>
  <p>{{ $a->content }}
  </div>
  <div class="instagram-card-footer">
    <a class="footer-action-icons" href="#"><i class="fa fa-heart-o"></i></a>
    <input class="comments-input" type="text" placeholder="Leave a comment..."/>
    <a class="footer-action-icons" href="#"><i class="fa fa-ellipsis-h"></i></a>
  </div>
  <br>
  <br>
@endforeach
  </div>
</div>
  
  
  
@endsection