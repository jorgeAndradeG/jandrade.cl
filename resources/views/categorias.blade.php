@extends('layouts.base')

<style>

#categorias{
    margin-top: 3%;
    margin-left: 10%;
    margin-right: 10%;
    margin-bottom: 10%;
}

#botones{
    margin-top: 3%;
    margin-left: 10%;
    margin-right: 10%;
    margin-bottom: 10%;
}

</style>

@section('main')
    <div class="animate__animated animate__fadeIn"  id="categorias">
        @foreach($categorias as $categoria)
            <h4 style="text-align:left">
                <a href="{{ action('App\Http\Controllers\CategoriasController@show',$categoria->id) }}">
                    {{$categoria->nombre}}
                </a>
            </h4>
            <br>
        @endforeach
    </div>
    <div class="animate__animated animate__fadeIn">
    <div clas="row" id="botones">
    <p style="text-align:center"><a href="{{action('App\Http\Controllers\IndexController@index')}}">
            <i class="fas fa-home" style="color: #94BF82"></i>
             Inicio
        </a>
    </p>
    </div>
</div>
    
@endsection