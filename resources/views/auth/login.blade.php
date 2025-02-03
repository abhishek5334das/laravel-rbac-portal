<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page </title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <h1 id="heading">LOGIN HERE</h1>

    <form action="" method="POST">
        @csrf
       
       
        <label for="email">Email</label>
        <input type="email" class="email" id="email" name="email" placeholder="Enter your email" >
        <br />
        <br />
        
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="Enter your passowrd">
        <button type="submit">LOG IN</button>
        <br />
        <div class=loginlink>
        <a href="" > register here ...</a>
    </div>
    </form>
</body>

</html>