<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>other_country</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<h1>Covid19</h1>
<div class="container">
    <table class="table">
  <thead class = "thead">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Улс</th>
      <th scope="col">Шинэ тохиолдол</th>
      <th scope="col">Нийт тохиолдол</th>
      <th scope="col">Нас баралт (шинэ)</th>
      <th scope="col">Нийт нас баралт</th>
      <th scope="col">Шинэ эдгэсэн</th>
      <th scope="col">Нийт эдгэсэн</th>
      <th scope="col">огноо</th>
    </tr>
  </thead>
  <tbody>
        @php
            $no = 0;
        @endphp
    @foreach ($list as $covid)
        @php
            $no++;
        @endphp
    <tr>
      <th scope="row">{{$no}}</th>
      <td>{{$covid['Country']}}</td>
      <td>{{$covid['NewConfirmed']}}</td>
      <td>{{$covid['TotalConfirmed']}}</td>
      <td>{{$covid['NewDeaths']}}</td>
      <td>{{$covid['TotalDeaths']}}</td>
      <td>{{$covid['NewRecovered']}}</td>
      <td>{{$covid['TotalRecovered']}}</td>
      <td>{{$covid['Date']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</body>
</html>