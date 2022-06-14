@extends('tema.app')

@section('title','Crear Tarea')

@section('contenido')
    <h3>Registrar tarea</h3>
{{--    <video width="320" controls src="/storage/Mmf748NbosNFSHH091A471mIIvP71fOnDcpMdQEc.mp4" type="video/mp4"></video>--}}
{{--    <img src="/storage/B3foPjMgrBdOdSvXkyuWzKnWmwZJ2YZWKe7eON7s.png" alt="">--}}
    <video width="620" controls>
        <source src="/storage/Mmf748NbosNFSHH091A471mIIvP71fOnDcpMdQEc.mp4" type="video/mp4" >
    </video>

    <form action="{{ route('tarea.store') }}" method ="POST" enctype="multipart/form-data">
        @csrf
        <p>  <label for="avatar">
                <input type="file" name="avatar">
            </label>
        </p>


        {{--        <input type="submit" name="" id="" value="eviar">--}}
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">nombre de la tarea</label>
                <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="..." value="{{ old('nombre')  }}" >
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input"  >
                    <label for="InputFinalizada" class="form-check-label">Finalizada</label>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="selecUrgencia" class="form-label">Urgencia</label>
                <select name="urgencia" id="SelectUrgencia" class="form-select">
                    <option value="0">Baja</option>
                    <option value="1">Normal</option>
                    <option value="2">Alta</option>
                </select>
                <script>
                    document.getElementById('SelectUrgencia').value = "{{ old('urgencia') }}";
                </script>
            </div>
            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-label">Fecha limite</label>
                <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite') }}">
            </div>
            <div class="col-sm-12">
                <label for="TexAreaDescripcion" class="form-label">Descripcion</label>
                <textarea name="descripcion" id="TexAreaDescripcion" cols="30" rows="10" class="form-control" >{{ old('descripcion') }}</textarea>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </div>

    </form>


@endsection
