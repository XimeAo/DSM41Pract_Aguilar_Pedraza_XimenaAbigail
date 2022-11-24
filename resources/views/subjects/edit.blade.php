@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición de Estudiantes</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Asignatura</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('subjects/' .$subjects->id)}}" method="POST">
            {!!csrf_field()!!}
            @method("PATCH")
                <input class="form-control" type="text" value="{{$subjects->id}}" placeholder="ID Asignado" aria-label="Disabled input example" disabled>
                <label for=""> Asignatura:</label>
                <input class="form-control" type="text" value="{{$subjects->subject}}" name="subject" id="subject">
                <label for="">Profesor</label>
                <select id="teachers" name="teachers" class="form-select">
                    <option value="{{$subjects->teacher_id}}">Seleccionar</option>
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->id }} -> {{ $teacher->name }} </option>
                    @endforeach
                </select><br>

                
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>

                </div>
            </form>
            </div>
        </div>