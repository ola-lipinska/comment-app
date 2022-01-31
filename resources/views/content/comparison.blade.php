@extends('shared.layout')

@section('title', 'Comments2- Homepage')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Porównanie</title>
  </head>
  <body>
  <center><h1>Porównanie kosztów i czasu podróży</h1></center>

  <body style="background-color: #E6E6FA;"></body>
   <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Miasto</th>
      <th scope="col">Środek transportu</th>
      <th scope="col">Cena</th>
	  <th scope="col">Czas podróży</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Gdańsk</th>
      <td>Pociąg</td>
      <td>71zł</td>
      <td>3 godziny</td>
    </tr>
    <tr>
      <th scope="row">Kraków</th>
      <td>Pociąg</td>
      <td>70zł</td>
      <td>4 godziny</td>
    </tr>
    <tr>
      <th scope="row">Wrocław</th>
      <td>Pociąg</td>
      <td>73zł</td>
	  <td>5 godzin</td>
    </tr>
	<tr>
      <th scope="row">Ateny</th>
      <td>Samolot</td>
      <td>Od 182zł</td>
	  <td>3 godziny</td>
    </tr>
	<tr>
      <th scope="row">Barcelona</th>
      <td>Samolot</td>
      <td>Od 134zł</td>
	  <td>3 godziny</td>
    </tr>
	<tr>
      <th scope="row">Paryż</th>
      <td>Samolot</td>
      <td>Od 78zł</td>
	  <td>3 godziny</td>
    </tr>
  </tbody>
</table>
<div style="text-align: center"><img src="{{ asset('img/mapa.jpg') }}" alt=Tekst"></div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
@endsection
