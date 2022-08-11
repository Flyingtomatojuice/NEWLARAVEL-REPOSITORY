@extends('user.index')

@section('content')
   
<!-- PROFILE -->
    <div class="profile">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            .{{ Session::get('success') }}
          </div>
       
    @endif
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
          <div class="row">
            <div class="col-sm-12">
                <h1>Application ID : {{ '2022A'.$acc['id'] }}</h1>
            </div>
          </div>
        <div class="row">
            
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="fname_error">Firstname:</strong>
                    <input type="text" id="form_fname" name="firstname" value="{{ $acc['firstname'] }}" readonly class="form-control" placeholder="Firstname">
                    
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="lname_error">Surname:</strong>
                    <input type="text" id="form_lname" name="lastname" value=" {{ $acc['lastname']}} " readonly class="form-control" placeholder="Surname">
                </div>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Middlename:</strong>
                    <input type="text" name="middlename" value=" {{ $acc['middlename']}} " readonly class="form-control" placeholder="Middlename(optional)">
                </div>
            </div>
        </div>

        <div class="row bday-age">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="birthplace_error">Birthplace:</strong>
                    <input type="text" id="form_birthplace" value="{{ $acc['birthplace']}}" readonly class="form-control" placeholder="Birthplace">
                </div>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Birthday:</strong>
                    <input type="text" name="birthday" value="{{ $acc['birthday']}}" readonly  class="form-control"  placeholder="Birthday" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);">
                </div>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Age:</strong>
        
                    <input type="text"  class="form-control" value=" {{ $acc['age']}}" disabled>
                </div>
            </div>
        </div>
        
        <div class="row gen-em-mob">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details">Gender:</strong>
                    <input type="text" name="address" value="  {{ $acc['gender']}} " readonly class="form-control" placeholder="Gender">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="email_error">Email:</strong>
                    <input type="text" id="form_email" name="email" value="  {{ $acc['email']}} " readonly class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="phone_error">Phone:</strong>
                    <input type="tel" id="form_phone" name="phonenumber" value="  {{ $acc['phonenumber']}} " readonly class="form-control" maxlength="11" placeholder="Phone number ex.09123456789">
                </div>
            </div>        
        </div>

        <div class="row address">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="details" id="address_error">Address:</strong>
                    <input type="text" id="form_address" name="address" value=" {{ $acc['address']}}" readonly class="form-control" placeholder="Home Address">
                </div>
            </div>
        </div>
        <div class="row address">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="details" id="address_error">Postal Code:</strong>
                    <input type="text" id="form_address" name="postal" value=" {{ $acc['postalcode']}}" readonly class="form-control" placeholder="Home Address">
                </div>
            </div>
        
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a href="#"  style="width:100%; height=30%; font-size:20px" class='btn btn-primary btnEdit'>Edit</a>
            </div>
        </div>
        

    </div> 


    <!-- UPDATE DIV -->
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
    <div class="update-profile">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-icon">
                    <span><i class="icon icon-user"></i></span>
                </div>
            </div>
        </div>
       
        <form method="post" id="update-form" action="{{ url('update-data/'.$acc['id']) }}" enctype="multipart/form-data" >
            {{ @csrf_field() }}
            @method('PUT')
       <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong class="details" id="fname_error">Firstname:</strong>
                <input type="text" id="form_fname" name="fname" value="{{ $acc['firstname'] }}"  class="form-control" placeholder="Firstname">
            </div>
        </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="fname_error">Lastname:</strong>
                    <input type="text" id="form_fname" name="lname" value="{{ $acc['lastname'] }}"  class="form-control" placeholder="Firstname">
                    
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="fname_error">Middlename:</strong>
                    <input type="text" id="form_fname" name="mname" value="{{ $acc['middlename'] }}"  class="form-control" placeholder="Firstname"> 
                </div>
            </div>
       </div>


       <div class="row ">
             <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="birthplace_error">Birthplace:</strong>
                    <input type="text" id="form_birthplace" name="bplace" value="{{ $acc['birthplace']}}" class="form-control" placeholder="Birthplace">
                </div>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Birthday:</strong>
                    <input type="date" id="txtbirthdate" name="bday" value="{{ $acc['birthday']}}"  class="form-control"  placeholder="Birthday" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);">
                </div>
            </div>
    
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Age:</strong>
                    <input type="hidden" id="age" autocomplete="off" name="age" value="{{ $acc['age']}}">
                    <input type="text" id="age1"  class="form-control" value="  {{ $acc['age']}}" disabled>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="birthplace_error">Gender:</strong>
                    <select class="form-control" name="gender">
                                            <option value="Male"  {{ $acc['gender']=="Male" ? "selected" : "" }}>Male</option>
                                            <option value="Female"  {{ $acc['gender']=="Female" ? "selected" : "" }}>Female</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="email_error">Email:</strong>
                    <input type="text" id="form_email" name="email" value="  {{ $acc['email']}} "  class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong class="details" id="phone_error">Phone:</strong>
                    <input type="tel" id="form_phone" name="phonenumber" value="  {{ $acc['phonenumber']}} "  class="form-control" maxlength="11" placeholder="Phone number ex.09123456789">
                </div>
            </div>       
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="details" id="address_error">Address:</strong>
                <input type="text" id="form_address" name="address" value="  {{ $acc['address']}}"  class="form-control" placeholder="Home Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="details" id="address_error">Postal Code:</strong>
                <input type="text" id="form_address" name="postal" value="  {{ $acc['postalcode']}}"  class="form-control" placeholder="Home Address">
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                    <label>Update Profile Picture</label>
                    <input type="file" name="profilepic" class="form-control">
                 
            </div>
        </div>
       
        <div class="row">
            <div class="col-sm-6">
                <button type='submit' style="width:100%; height=30%; font-size:20px" class='btn btn-success'>Update</button>
            </div>
        </form>
            <div class="col-sm-6">
                <a href="#"  style="width:100%; height=30%; font-size:20px" class='btn btn-primary cancelbtn'>Cancel</a>
            </div>
        </div>
    </div>
@endsection