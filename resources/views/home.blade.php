@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div id="app" class="panel-body">
                    <div class="form-group">
                        {!! Form::select('unit', $units_list, null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <span class="help-block">Seleccione Unidad</span>
                    </div>
                    <div class="form-group">
                        {!! Form::select('position', ['clear' => ''], null, ['class' => 'form-control', 'required' => 'required']) !!}
										<span class="help-block">Selecione el Cargo</span>
                    </div>

                    <button v-on:click="cargar" class="btn btn-success pull-right">Register</button>

                </div>
            </div>
        </div>
    </div>

@endsection
<script>



var app = new Vue({
    el: '#app',
    data: {
        position: ''
    },
    methods: {
        cargar() {
            this.$http.get('/get_position/' + 1).then((response) => {
                this.position = response.data;
            });
    },
});
</script>
