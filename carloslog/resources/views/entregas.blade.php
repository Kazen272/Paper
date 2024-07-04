@extends('layouts.main')

@section('title', 'Carlos Log')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    @if(count($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Cliente</th>
                <th scope="col">Coleta</th>
                <th scope="col">Entrega</th>
                <th scope="col">Entregador</th>
                <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <th scropt="row">{{$loop->index + 1}}</th>
                    <th>{{$event->client_name}}</th>
                    <th>{{$event->adress_pickup}}</th>
                    <th>{{$event->adress_delivery}}</th>
                    <th>{{$event->fleet}}</th>
                    <th>{{$event->order_price}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>


</body>
</html>


@endsection