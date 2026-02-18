<h1>listando empleados</h1>
<div class="table-responsive">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <th scope="row">{{ $employee->id }}</th>
                <th>{{ $employee->photo }}</th>
                <th>{{ $employee->name }}</th>
                <th>{{ $employee->firstname }}</th>
                <th>{{ $employee->lastname }}</th>
                <th>{{ $employee->email }}</th>
                <th>
                    <form action="{{ url('/employee/'.$employee->id) }}" method="delete">
                        <input type="hidden" name="id" value="{{ $employee->id }}">

                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
