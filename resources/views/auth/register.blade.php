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

    <form action="" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" class="first_name" id="name" name="name" placeholder="Enter your name" >
        <br />
        <br />
    
       
        <label for="email">Email</label>
        <input type="email" class="email" id="email" name="email" placeholder="Enter your email" >
        <br />
        <br />
        <label for="phone">Phone Number</label>
        <input type="tel" class="phone_number" id="phone" name="phone_number" placeholder="Enter your phone number">
        <br />
        <br />
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="Enter your passowrd">
        <button type="submit">Submit</button>
        <br />
        <div class=loginlink>
        <a href="" >log in here ...</a>
    </div>
    </form>
</body>

</html>