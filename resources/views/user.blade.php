<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>

  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">A1</h5>
          <p class="card-text"></p>
          <button type="button" class="btn btn-primary  col-12 mb-1 r1">R1</button>
          <button type="button" class="btn btn-primary col-12 mb-1 r2">R2</button>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title">A2</h5>
          <p class="card-text"></p>
          <button type="button" class="btn btn-primary  col-12 mb-1 r1">R1</button>
          <button type="button" class="btn btn-primary col-12 mb-1 r2">R2</button>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">A3</h5>
          <p class="card-text"></p>
          <button type="button" class="btn btn-primary  col-12 mb-1 r1">R1</button>
          <button type="button" class="btn btn-primary col-12 mb-1 r2">R2</button>
        </div>
      </div>



    </div>
  </div>
</body>
<script>
 for ( const R1 of document.getElementsByClassName('r1')){

  R1.addEventListener("click",buttonClick()); //function ButtomnClick()11
 }
 for ( const R2 of document.getElementsByClassName('r2')){

R2.addEventListener("click", function () {
  console.log('r2 clicked');
}); 
}


</script>

</html>