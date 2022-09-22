<div>
    <h1>Nuevo Posible Cliente</h1>
    <p>{{$lead->name}}</p>
    <p>E-mail: {{$lead->email}}</p>
    <p>Tel: {{$lead->phone}}</p>
    <p>Producto Interesado: {{env('APP_URL')}}{{$lead->source}}</p>
</div>