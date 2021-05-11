<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ww</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>

<div class="container p-3 my-3 bg-dark text-center text-white">
	<h1>Covid19 мэдээлэл</h1>
  </div>
    <div class="container my-5">
      <div class="row text-center"> 
        <div class="col-4">
          <h5>Шинэ тохиолдол</h5>
          <?php echo $list['NewConfirmed'];?>
        </div>
          <div class="col-4">
          <h5>Нийт тохиолдол</h5>
          <?php echo $list['TotalConfirmed'];?>
        </div>
          <div class="col-4 text-danger">
          <h5>Нас баралт</h5>
          <?php echo $list['NewDeaths'];?>
        </div>
    </div>
  </div>
  
  </tbody>
    </div>
</body>
</html>