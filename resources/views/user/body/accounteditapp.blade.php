@extends('user.index')

@section('content')
<div class="main1">

    <div class="main">
        <script type="text/javascript">
            function formatDate(date){
            var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();
            
            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;
            
            return [year, month, day].join('-');
            
            }
            
            function getAge(dateString){
            var birthdate = new Date().getTime();
            if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')){
            // variable is undefined or null value
            birthdate = new Date().getTime();
            }
            birthdate = new Date(dateString).getTime();
            var now = new Date().getTime();
            // now find the difference between now and the birthdate
            var n = (now - birthdate)/1000;
            if (n < 604800){ // less than a week
            var day_n = Math.floor(n/86400);
            if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')){
            // variable is undefined or null
            return '';
            }else{
            return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';
            }
            } else if (n < 2629743){ // less than a month
            var week_n = Math.floor(n/604800);
            if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')){
            return '';
            }else{
            return week_n + ' week' + (week_n > 1 ? 's' : '') + ' old';
            }
            } else if (n < 31562417){ // less than 24 months
            var month_n = Math.floor(n/2629743);
            if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')){
            return '';
            }else{
            return month_n + ' month' + (month_n > 1 ? 's' : '') + ' old';
            }
            }else{
            var year_n = Math.floor(n/31556926);
            if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')){
            return year_n = '';
            }else{
            return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
            }
            }
        
            }
            
            function getAgeVal(pid){
            var birthdate = formatDate(document.getElementById("txtbirthdate").value);
            var count = document.getElementById("txtbirthdate").value.length;
            if (count=='10'){
            var age = getAge(birthdate);
            var age1 = getAge(birthdate);
            var str = age;
            var str1 = age1;
            var res = str.substring(0, 1);
            if (res =='-' || res =='0'){
            document.getElementById("txtbirthdate").value = "";
            document.getElementById("age").value = "";
            document.getElementById("age1").value = "";
            $('#txtbirthdate').focus();
            return false;
            }else{
            document.getElementById("age").value = age;
            document.getElementById("age1").value = age1;
            }
            }else{
            document.getElementById("age").value = age;
            document.getElementById("age1").value = age1;
            return false;
            }
        
            document.getElementById("age").value = age;
            document.getElementById("age1").value = age1;
            
            }
            </script>
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('EDIT PROFILE') }}</div>
        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-right">
                                        <a class="btn btn-success" href="{{ url('applicant/account') }}">Back </a>
                                    </div>
                                </div>
                            </div>        
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input. <br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                              
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong class="details" id="fname_error">Firstname:</strong>
                                            <input type="text" id="form_fname" name="firstname" value="{{ $acc['firstname']}}"  class="form-control" placeholder="Firstname">
                                            
                                        </div>
                                    </div>
                            
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong class="details" id="lname_error">Surname:</strong>
                                            <input type="text" id="form_lname" name="lastname"value="{{ $acc['lastname']}}"  class="form-control" placeholder="Surname">
                                        </div>
                                    </div>
                            
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Middlename:</strong>
                                            <input type="text" name="middlename" value="{{ $acc['middlename']}}"  class="form-control" placeholder="Middlename(optional)">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong class="details" id="birthplace_error">Birthplace:</strong>
                                            <input type="text" id="form_birthplace" name="birthplace" value="{{ $acc['birthplace']}}"  class="form-control" placeholder="Birthplace">
                                        </div>
                                    </div>
                            
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Birthday:</strong>
                                            <input type="date" id="txtbirthdate" name="birthday"  class="form-control datepicker" placeholder="Birthday" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);">
                                        </div>
                                    </div>
                            
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Age:</strong>
                                            <input type="hidden" id="age" autocomplete="off" name="age" value="{{ $acc['age'] }}">
                                            <input type="text" id="age1" value="{{ $acc['age'] }}" class="form-control" disabled>
                                            
                                                 
                                        </div>
                                    </div>
                            
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong class="details" id="address_error">Address:</strong>
                                            <input type="text" id="form_address" name="address" value="{{ $acc['address']}}"  class="form-control" placeholder="Home Address">
                                        </div>
                                    </div>
                                             
                            
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Email:</strong>
                                            <input type="text" name="email" value="{{ $acc['email']}}" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                            
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Phone:</strong>
                                            <input type="tel" name="phone" value="{{ $acc['phonenumber']}}" class="form-control" maxlength="11" placeholder="Phone number ex.09123456789">
                                        </div>
                                    </div>
            
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                <strong>Gender:</strong>
                                                    <div class="container">
                                                        <div class="row">
                                                        <span>Male</span>
                                                        <input type="radio"  class="col-sm" name="gender"  value='Male' {{ $acc['gender']=="Male" ? "checked" : "" }} class="form-control">
                                                        <span>Female</span>
                                                        <input type="radio"  class="col-sm" name="gender"  value='Female' {{ $acc['gender']=="Female" ? "checked" : "" }} class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="input-group control-group increment" >
                                        <div class="form-group">
                                        <strong class="details">Profile Picture</strong><br>
                                        <input type="file" name="image[]" class="form-control" multiple>
                                        </div>
                                    
                                    </div>   
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>                      
            </div>
        </div>
    </div>


</div>
@endsection
