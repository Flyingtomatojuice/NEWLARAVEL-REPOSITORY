@extends('admin.index')

@section('content')
<h1> <span class="blue" style="margin-left:15%; ">List of Applicants</span></h1>
{{-- <button class="button-30" id="btn-import" role="button">Import</button>
<button class="button-31" id="btn-export" role="button">Export</button> --}}


<div class="row">

  <!-- IMPORT-->
  <div class="col-sm-6">
    
  <div class="column-import">
    <div class="card">
      <div class="panel panel-default">
        <div class="panel-heading"><h5>Import</h5></div>
        <div class="panel-body">
          <form id='importfile' action="{{ route('import.file') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type='file' name='file' id="file" />
            <button type='submit' class='btn-primary'>Import</button>
          </form>
        </div>
      </div>
      </div>
    </div>

  </div>
  <!-- EXPORT -->
  <div class="col-sm-6">
    <div class="column-export">
      <div class="card">
        {{-- <div class="row">
          <div class="col-sm-12">
            @if (Session::has('missing'))
          <div class="alert alert-danger">{{ Session::get('missing') }} </div>
         @endif
         @if (Session::has('success'))
          <div class="alert alert-success">{{ Session::get('success') }} </div>
         @endif
          </div>
        </div> --}}
        <div class="row">
          
        <div class="col-sm-8">
          <form method='post' id="export" action="{{ route('export') }}">
            @csrf
           
          <div class="select">
              <select name="exportFile" id="exportfile">
                  <option value="">Select Export File Type</option>
                  <option value="pdf">PDF File</option>
                  <option value="csv">CSV File</option>
                  <option value="excel">EXCEL File</option>
              </select>
            </div>
        </div>
          <div class="col-sm-4">
            <button type='submit' class='btn-primary btn-lg'>Export</button>
          </div>    
        </form>
        </div>
        </div>
      </div>

  </div>
</div>

<div class="applicant-div">
     
<table>
    <thead>
      <tr>
        <th>Application ID</th>
        <th>FullName</th>
        <th>Email</th>
        <th>Phonenumber</th>
        <th>Address</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($app as $list)
      <tr>
              
        <td data-column="Application ID">{{ $list->user_id }}</td>
        <td data-column="FullName">{{ $list->lastname }}, {{ $list->firstname }} {{ $list->middlename }}.</td>
        <td data-column="Email">{{ $list->email }}</td>
        <td data-column="Phonenumber">{{ $list->phonenumber }}</td>
        <td data-column="Address">{{ $list->address }}</td>
        <td>
          <a href="{{ url('admin/deleteApplicant/'.$list->user_id)}}">
          <button class="btn-danger" style="cursor: pointer"
           onclick=deleteapplicant(this)>Delete
          </button>
          </a>
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
     
    
    </tbody>
  </table>
</div>
@endsection