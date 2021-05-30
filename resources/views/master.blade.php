<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title') - TutiFoodie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type ="text/css" href="{{ asset('assets/css/app.css')}}">
  <link rel="stylesheet" type ="text/css" href="{{ asset('assets/images')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;400;600&family=Alata&family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
</head>
<body>
    @include('header')
	<!-- bagian judul halaman blog -->
	@yield('isi_page')
    @include('footer')

</body>
</html>