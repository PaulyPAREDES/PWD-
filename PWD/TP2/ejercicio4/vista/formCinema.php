<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>tp3 ejercicio 4</title>
    <style> 
     i{
        color:#0dcaf0;
     }
   </style>
  
</head>
<body>  
<div class="container border">
 <div class="bg-light">
   <i class="bi bi-box-arrow-in-down-left">Cinem@s</i> 
 </div>

<form class="row mt-3 g-3 needs-validation" method="post" action="../control/validacion.php" novalidate>
   <div class="col-md-6">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="titulo" placeholder="Titulo"  required >
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-6">
    <label for="actores" class="form-label">Actores</label>
    <input type="text" class="form-control" name="actores" placeholder="Actores" required>
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-6">
    <label for="director" class="form-label">Director</label>
    <input type="text" class="form-control" name="director" placeholder="Director" required >
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-6">
    <label for="guion" class="form-label">Guion</label>
    <input type="text" class="form-control" name="guion" placeholder="Guion" required>
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-6">
    <label for="produccion" class="form-label">Produccion</label>
    <input type="text" class="form-control" name="produccion"  required >
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-2">
    <label for="anio" class="form-label">Año</label>
    <input type="text" class="form-control" name="anio" maxlength="4" required pattern="[0-9]+">
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      Solo numeros, maximo 4!
    </div>
  </div>
  <div class="col-md-6">
    <label for="nacionalidad" class="form-label">Nacionalidad</label>
    <input type="text" class="form-control" name="nacionalidad" required >
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-4">
    <label for="genero" class="form-label">Genero</label>
    <select class="form-select" name="genero" required >
  <option>Terror</option>
  <option >Comedia</option>
  <option >Ciencia Ficcion</option>
  <option >Animada</option>
  <option >Triller</option>
  <option >Accion</option>
  </select>
  <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      selecciona un genero!
    </div>
  </div>
  <div class="col-md-4">
    <label for="duracion" class="form-label">Duración</label>
    <input type="text" maxlength="3" class="form-control" name="duracion" pattern="[0-9]+"  required>
    <label for="duracion" class="form-label">(minutos)</label>
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      maximo 3 numeros!
    </div>
  </div>
 <div class="col-md-6">
    <label for="duracion" class="form-label">Restrincion de edad</label>
  <div>
   <div class="form-check form-check-inline">
     <input class="form-check-input" type="radio" name="opcionEdad" id="inlineRadio1" value="1"  required>
     <label class="form-check-label" for="inlineRadio1">Todo Público</label>
   </div>
   <div class="form-check form-check-inline">
     <input class="form-check-input" type="radio" name="opcionEdad" id="inlineRadio2" value="2"  required>
     <label class="form-check-label" for="inlineRadio2">Mayores de 7 años</label>
   </div>
   <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="opcionEdad" id="inlineRadio3" value="3"  required >
    <label class="form-check-label" for="inlineRadio3">Mayores de 18 años </label>
   </div>
  </div>
</div> 
<div class="mb-3">
  <label for="textarea" class="form-label">Sipnosis</label>
  <textarea class="form-control" name="textarea" rows="3"  required></textarea>
  <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      Ingrese una descripcion!
    </div>
  </div>

 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
     <button class="btn btn-primary me-md-2" type="submit">Enviar</button>
     <button class="btn btn-secondary" type="reset">Borrar</button>
 </div>

 </form>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>