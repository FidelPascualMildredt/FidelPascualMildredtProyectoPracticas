@extends('layouts.template')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Roles</h1>

    <a href="{{ route('rol.create') }}" title="Agregar nuevo rol" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus"></i>
        Agregar
    </a>
</div>
    {{--  Se manada a  llamar un cmponente  --}}
    <x-table titulo="Lista de roles">
        <x-slot name='encabezado'>
            <th>#
            </th>
            <th>Nombre</th>

            <th>Opciones</th>
        </x-slot>
        <x-slot name='cuerpo'>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{ $rol->id }}</td>
                    <td>{{ $rol->nombre }}</td>
                    <td>


                        <a href="{{ route('rol.edit', ['rol'=> $rol->id]) }}" class="btn btn-success btn-circle btn-sm" title="Editar rol">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('rol.show', ['rol'=> $rol->id]) }}" class="btn btn-info btn-circle btn-sm" title="Ver rol">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-circle btn-sm" title="Eliminar rol">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-table>
{{--  revisar porque no me agarra  --}}
    {{--  {{$rol->links()}}  --}}

@endsection
