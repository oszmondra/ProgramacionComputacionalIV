    Nombre:
    <input type="text" name="name" id="name" value="{{ isset($pet)?$pet->name:'' }}" /><br />
    @error('name')
    <div class= "error-message">{{ $message }} </div>
    @enderror


    Edad:
    <input type="number" name="age" id="age" value="{{ isset($pet)?$pet->age:'' }}" /><br />
    @error('age')
        <div class= "error-message">{{ $message }} </div>
    @enderror

    Peso (kg)
    <input type="text" name="weight_kg" id="weight_kg" value="{{ isset($pet)?$pet->weight_kg:'' }}"><br />
    @error('weight_kg')
    <div class= "error-message">{{ $message }} </div>
    @enderror
    
    <!--mostrar propietarios-->
    <select name="owner_id">
        <option value=""></option>
        @foreach($owners as $own)
        <option value="{{$own->id}}" {{ isset($pet->owner_id) == $own->id ? 'selected' : '' }}>
            {{$own->full_name}}
        </option>
        @endforeach
    </select>
    @error('owner_id')
    <div class= "error-message">{{ $message }} </div>
    @enderror

    <button type="submit">Guardar</button>

    <style>
        .error-message{
            color:red
        }
            
    

    </style>