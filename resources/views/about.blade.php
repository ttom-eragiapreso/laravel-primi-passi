<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About me</title>
</head>

<body>

  <h3>Oh, hello!</h3>


  <h1> Nome Business: {{ $business_info['name'] }}</h1>
  <h1> Numero Telefono: {{ $business_info['phone_number'] }}</h1>
  <h1> Indirizzo:{{ $business_info['address'] }}</h1>
  <h1>Indirizzo Email:{{ $business_info['email_address'] }}</h1>



  <a href="/">Torna nella Home</a>


</body>

</html>
