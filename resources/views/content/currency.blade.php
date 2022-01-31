@extends('shared.layout')

@section('title', 'Currency')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Waluty</title>
  </head>
  <body>
<left><h1>Waluty obowiązujące w Unii Europejskiej</h1></left>
<body style="background-color: #FFDAB9;"></body>
<ul>
<li>euro
<li>korona duńska
<li>korona szwedzka
<li>kuna chorwacka
<li>korona czeska
<li>forint węgierski
<li>złoty polski
<li>lew bułgraski
<li>lej rumuński
</ul>
<center><h2>Przeliczenie</h2>
<p>1,00 EUR = 4,57 PLN</p>
<p>1,00 DKK = 0,61 PLN</p>
<p>1,00 SEK = 0,44 PLN</p>
<p>1,00 HRK = 0,59 PLN</p>
<p>1,00 CZK = 0,19 PLN</p>
<p>1,00 HUF = 0,01 PLN</p>
<p>1,00 BGN = 2,32 PLN</p>
<p>1,00 RON = 0,91 PLN</p>
</center>
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