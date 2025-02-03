<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>

    
    @if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
    @endif
    <h1 id="heading">Edit User</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
        <br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>
        <br>

        <label>Phone:</label>
        <input type="text" name="phone_no" value="{{ $user->phone_no }}" required>
        <br>

        <label>Role:</label>
        <select name="role" required>
            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
        </select>
        <br>

        <button type="submit" style="margin-top: 10px">Update User</button>
        <a href="{{ route('admin.dashboard') }}">Back to User List</a>
    </form>

    <br>

</body>
</html>
