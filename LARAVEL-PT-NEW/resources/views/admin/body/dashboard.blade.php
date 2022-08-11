@extends('admin.index')

@section('content')
   
   

    <div class="row" style="width:80%;margin-left: 20%;margin-top:2%">
      <div class="col-sm-6">
         <button class='btn-primary btn-lg' style="width: 90%" action="{{ url('admin/piechart') }}" onclick="piechart(this)">Pie Chart</button>
      </div>
      <div class="col-sm-6">
         <button class='btn-primary btn-lg' style="width: 90%" action="{{ url('admin/linechart') }}" onclick="linechart(this)">Line Chart</button>
      </div>
    </div>
  
    @yield('linechart')
@endsection