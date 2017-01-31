@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged

                </div>
            </div>
        </div>
    </div>
    {!! Form::open(['method' => 'GET', 'route' => ['goy.index'], 'class' => 'form-horizontal']) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="box box-warning box-solid">
                <div class="box-header with-border">
                    <h3 class="panel-title">Datos Personales</h3>
                    <div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									{!! Form::label('module', 'Unidad', ['class' => 'col-md-4 control-label']) !!}
									<div class="col-md-6">
										{!! Form::select('module', $users_list, null, ['class' => 'form-control', 'required' => 'required']) !!}
										<span class="help-block">Selecione la Unidad correspondiente</span>
									</div>
								</div>
								<div class="form-group">
									{!! Form::label('role', 'Cargo', ['class' => 'col-md-4 control-label']) !!}
									<div class="col-md-6">
										{!! Form::select('role', ['clear' => ''], null, ['class' => 'form-control', 'required' => 'required']) !!}

										<span class="help-block">Selecione el Cargo</span>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
