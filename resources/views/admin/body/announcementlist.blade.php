@extends('admin.index')

@section('content')
<!-- DISPLAY ANNOUNCEMENTS -->
<div class="maincontent">
    
<div class="card">
  <div class="card-header">{{ __('List of Announcements') }}</div>    
  <div class="card-body">                  
      <table class="table table-boredered table-responsive table-hover" >
          <tr>
              <th>Announcement ID</th>        
              <th>Announcement Title</th>
              <th>Date Created</th>
              <th>Date Updated</th>
              <th>Action</th>            
          </tr>
          @foreach ($anc as $list)
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
      </table>
  </div>
</div>
</div>


</div>
 
@endsection
