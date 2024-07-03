@extends('layouts.main')

@section('title', 'Carlos Log')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie a sua Entrega</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Coleta:</label>
            <input type="text" class="form-control" id="adress_pickup" name="adress_pickup" placeholder="Ponto de Coleta">
        </div>
        <div class="form-group">
            <label for="title">Entrega:</label>
            <input type="text" class="form-control" id="adress_delivery" name="adress_delivery" placeholder="Ponto de Entrega">
        </div>
        <div class="form-group">
            <label for="title">Nome do Cliente:</label>
            <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Nome do Cliente">
        </div>
        <div class="form-group">
            <label for="title">Valor da Entrega:</label>
            <input type="text" class="form-control" id="order_price" name="order_price" placeholder="Valor da Entrega">
        </div>  
        <div class="form-group">
            <label for="title">Entregador:</label>
            <input type="text" class="form-control" id="fleet" name="fleet" placeholder="Entregador">
        </div>

        <div class="form-group">
            <label for="title">É privado?</label>
            <select class="form-control" id="private" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
        </div>  
        <input type="submit" class="btn btn-primary" value="Crie a sua entrega">


    </form>
</div>




@endsection