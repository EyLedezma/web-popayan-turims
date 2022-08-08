@extends('layouts.app')

@section('template_title')
    Convenio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Convenio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('convenios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Correo</th>
										<th>Tipconvenios Id</th>
										<th>Lugares Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($convenios as $convenio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $convenio->fecha }}</td>
											<td>{{ $convenio->direccion }}</td>
											<td>{{ $convenio->telefono }}</td>
											<td>{{ $convenio->correo }}</td>
											<td>{{ $convenio->tipconvenios_id }}</td>
											<td>{{ $convenio->lugares_id }}</td>

                                            <td>
                                                <form action="{{ route('convenios.destroy',$convenio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('convenios.show',$convenio->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('convenios.edit',$convenio->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $convenios->links() !!}
            </div>
        </div>
    </div>
@endsection
