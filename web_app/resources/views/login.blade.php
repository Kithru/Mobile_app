<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #2e5ef5;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 18px;
  width: 80%;
  max-width: 400px; 
  margin: 0 auto; 
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div style="text-align: center;"> <h2>Administrator Login</h2> </div>
<form action="{{ route('login') }}" method="post">
    @csrf
  <div class="imgcontainer">
    <img src="images/login.webp" style= "height:200px;  width: 200px; " alt="Avatar" class="avatar">
  </div>
  @if ($errors->any())
    <div style="color: red; text-align: center; margin-bottom: 10px;">
        {{ $errors->first() }}
    </div>
@endif
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" value="{{old('email')}}" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" value="{{old('password')}}" required>
        
    <button type="submit">Login</button>
    <span >Back to <a href="{{ url('/') }}">Home?</a></span>
  </div>
  

</form>

</body>
</html>
