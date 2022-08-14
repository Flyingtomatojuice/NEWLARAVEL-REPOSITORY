@extends('admin.index')

@section('content')
<!-- DISPLAY ANNOUNCEMENTS -->
<div class="maincontent">
    
<div class="card" style="height: 100%;">
  <div class="card-header"><h1> {{ __('List of Announcements') }} </h1></div>    
  <div class="card-body text-center">                  
      <table class="table table-boredered table-responsive-lg table-hover" >
          <tr>
              <th>Announcement ID</th>        
              <th>Announcement Title</th>
              <th>Date Created</th>
              <th>Date Updated</th>
              <th>Action</th>            
          </tr>
          @foreach ($app as $list)
          <tr>
              <td>{{$list->id}}</td>
              <td>{{$list->title}}</td>
              <td>{{$list->created_at}}</td>
              <td>{{$list->updated_at}}</td>         
         <td>
                  
                <a class='btn btn-primary' id='edit-annc' href={{ url("/admin/editannouncement/".$list['id']) }}>Edit</a>
                 
                  <input name="_method" type="hidden" value="Delete">
                  <button class='btn btn-danger' action={{ "/admin/deleteAnnouncement/".$list['id'] }} onclick="destroyData(this)">Delete</button>
                 
          </td>
          </tr>
          @endforeach
          <div class="d-flex justify-content-center">
          <tr>
            <th>
                {!! $app->links() !!}
            </th>
          </tr>
          </div>
      </table>
     
  </div>
</div>
</div>


</div>
 
@endsection
