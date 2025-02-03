<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <h1 id="heading">REGISTER HERE</h1>
    @if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div style="color: red;">{{ session('error') }}</div>
@endif

    <form action="{{route("registerPost")}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" class="name" id="name" name="name" placeholder="Enter your name" >
        <br />
        <br />
    
       
        <label for="email">Email</label>
        <input type="email" class="email" id="email" name="email" placeholder="Enter your email" >
        <br />
        <br />
        <label for="phone">Phone Number</label>
        <input type="tel" class="phone_number" id="phone" name="phone_no" placeholder="Enter your phone number">
        <br />
        <br />
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="Enter your passowrd">
        <button type="submit">Submit</button>
        <br />
        <div class=loginlink>
        <a href="{{route("login")}}" >log in here ...</a>
    </div>
    </form>
</body>

</html>