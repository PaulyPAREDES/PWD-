<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <title>tp3 ejercicio 3c</title>
    <style> 
      .btn-primary{
        background-color:#20c997;
      }
   </style>
  
</head>
<body>  
<div class="container d-flex justify-content-center">
    <div class="bg-secondary m-4  d-flex justify-content-center align-items-center" style="height: 300px; width: 300px;">
       <div class="bg-light position-relative " style="height: 270px; width: 270px;">
       <div class="d-grid gap-2 col-10 mx-auto position-absolute top-50 start-50 translate-middle" >
            <p class="h5 text-center">Menber Login</p>

       <div class="form-floating mb-2">
         <input type="text" class="form-control" id="floatingInput" placeholder="Username">
          
          <label for="floatingInput"><i class="bi bi-person-fill"></i> Username</label>
       </div>
       <div class="form-floating">
         <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
         <label for="floatingPassword"><i class="bi bi-lock-fill"></i> Password</label>
       </div>
        <button class="btn btn-primary " type="button">Login</button>  
       </div> 
    </div>
 </div>
</body>
</html>