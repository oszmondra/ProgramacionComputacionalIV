    Nombre:
    <input type="text" name="full_name" id="full_name" value="{{ isset($owner)?$owner->full_name:'' }}" /><br />
    Edad:
    <input type="number" name="age" id="age" value="{{ isset($owner)?$owner->age:'' }}" /><br />
    Email
    <input type="text" name="email" id="email" value="{{ isset($owner)?$owner->email:'' }}"><br />
    <!--mostrar propietarios-->


    <button type="submit">Guardar</button>