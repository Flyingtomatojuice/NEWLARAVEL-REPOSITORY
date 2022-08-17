<h1>Hi, {{ $user->name }} !!</h1>
<h3>Your User ID is : {{$user->user_id}}</h3>
<h4>Please use {{$user->email}} to acess your account. Thank you!</h4>
<p>To verify your acoount please click the link below.</p>
<p>Click <a href="{{ url('/verifyEmail/'.$user->emailVerify_token)}}">here</a> to verify your account</p>