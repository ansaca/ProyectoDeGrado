<!-- form de ceacion -->
<form action="{{url('/cita')}}" method="post">
   @csrf
    <label for="ID">ID</label>
    <input type="text" name= "Id_cita">
    <br>
    <label for="Fecha">Fecha</label>
    <input type="date" name= "fecha_cita">
    <br>
    <label for="Motivo">Motivo</label>
    <input type="text" name= "motivos">
    <br>
    <label for="Hora">Hora</label>
    <input type="time" name= "hora">
    <br>
    <input type="submit" value="Guardar datos">

</form>