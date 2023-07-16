@extends('layouts.base')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Stocks</title>
</head>
<body>
  
  <div class="container" style="margin:40px;">
    <table class="table">
      <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>status</th>
            <th>pfp</th>
          </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
          <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->username}} </td>
              <td>{{$user->email}}</td>
              <td>{{$user->password}}</td>
              <td>{{$user->status}}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <a href="../signup" class="btn btn-primary">Create New Account</a>
  </div>

</body>
</html>
