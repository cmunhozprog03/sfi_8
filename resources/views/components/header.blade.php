<div>
    <h1>Este é um Header Compoment</h1>

    <h3>Olá {{$name}}</h3>

    <h3>Fruits are:</h3>
    <ul>
        @foreach($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>
