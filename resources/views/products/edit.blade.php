@component('layouts.app')

@slot('content')
<div class="container">
{!! Form::model($product, ['route' => ['products.update', $product], 'method' => 'PUT', 'role' => 'form', 'class' => 'form' ]) !!}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar producto</div>
                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::text('name', $product->name, ['class'=> 'form-control', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::select('category_id', $categories,null, ['class' => 'form-control']) !!}
										<span class="help-block">Selecione</span>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">Actualizar producto</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
</div>
@endslot
@endcomponent
