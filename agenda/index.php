<!doctype html>
<html lang="en">

<head>
  <title>agenda</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>

</head>

<body>

<div class="container">

<div class="col-md-8 offset-md-2 ">

      <div id='calendar'></div>
    
    </div>

	
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalEvento">
      Launch
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="modalEvento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Datos del evento </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
          <div class="modal-body">
            <div class="container-fluid">

			<form id="form_evento" action="conn.php" method="post">

              <div class="mb-3 visually-hidden ">
                <label for="Id" class="form-label">ID:</label>
                <input type="text"
                  class="form-control" name="Id" id="Id" aria-describedby="helpId" placeholder="ID">
              </div>

              <div class="mb-3">
                <label for="Titulo" class="form-label">Título</label>
                <input type="text"
                  class="form-control" name="Titulo" id="Titulo" aria-describedby="helpId" placeholder="Título">

				  <div class="mb-3">
                <label for="Descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" name="Descripcion" id="Descripcion" rows="3"></textarea>
              </div>

			  <div class="form-group">
					<label for="Color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="Color" class="form-control" id="Color">
						  <option value="">Seleccionar</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
						  <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
						  <option style="color:#000;" value="#000">&#9724; Negro</option> 
						</select>

						<div class="form-group">
					<label for="Listado" class="col-sm-2 control-label">Listado</label>
					<div class="col-sm-10">
					  <select name="Listado" class="form-control" id="Listado">
						  <option value="zte">zte</option>
                         <option value="nokia">nokia</option>
                         <option value="dell">dell</option>
                         <option value="tv">tv</option>
                         </select>

						 <br>


						 <div class="mb-3">
                    <label for="Fecha_Inicio">Fecha Inicio</label>
                    <input id="Fecha_Inicio" type="datetime-local" name="Fecha_Inicio" />
                    </div>

			        <div class="mb-3">
                    <label for="Fecha_Fin">Fecha Fin</label>
                    <input id="Fecha_Fin" type="datetime-local" name="Fecha_Fin" />
                    </div>

					</form>

					</div>
          </div>
          <div class="modal-footer">
            <button type="button" onclick="borrarEvento()" class="btn btn-danger" id="btnBorrar" data-bs-dismiss="modal">Borrar</button>
            <button type="button" onclick="agregarEvento()" id="btnGuardar" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </div>
    </div>

	</div>
   <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth', 
	locale:"es",
	headerToolbar:{
      left:'prev,next today', 
      center:'title', 
	  right:'dayGridMonth,timeGridWeek,timeGridDay'
	}
  });
  calendar.render();
});

function agregarEvento()
{
	document.getElementById("form_evento").submit();
}

</script>

  <header>
	<!-- place navbar here -->
  </header>
  <main>

  </main>
  <footer>
	<!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
	integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
	integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>