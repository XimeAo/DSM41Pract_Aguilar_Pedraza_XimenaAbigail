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
                <h6 class="m-0 font-weight-bold text-primary">Editar Estudiante</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('students/' .$student->id)}}" method="POST">
                {!!csrf_field()!!}
            @method("PATCH")
                <input class="form-control" type="text" value="{{$student->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" value="{{$student->name}}" name="name" id="name">
                <label for=""> Edad:</label>
                <input class="form-control" type="num" value="{{$student->age}}" name="age" id="age">
                <label for="">Grupo</label>
                <select id="groups" name="groups" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->id }} -> {{ $group->group }} </option>
                    @endforeach
                </select><br>
                <label for="">Asignatura</label>
                <select id="subjects" name="subjects" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->id }} -> {{ $subject->subject }} </option>
                    @endforeach
                </select><br>

                
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>

                </div>
            </form>
            </div>
        </div>