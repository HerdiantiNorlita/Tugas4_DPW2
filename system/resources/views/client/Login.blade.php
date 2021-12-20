<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | My Flatshoes</title>
  <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
  <div class="box-login">
    <h2>Login</h2>
    <form action="{{ url('dashboard') }}" method="GET">
      <input type="text" name="user" placeholder="Username" class="input-control">
      <input type="password" name="pass" placeholder="Password" class="input-control">
      <input type="submit" name="submit" value="Login" class="btn">
    </form>
  </div>
</body>
</html>