@extends('layouts.base')

<style>

#posts{
    margin-top: 3%;
    margin-left: 10%;
    margin-right: 10%;
    margin-bottom: 10%;
}


</style>

@section('main')
   
    <div class="animate__animated animate__fadeIn"  id="posts">
    <div class="row" id="titulo" style="text-align:center; color:gray;">
        <h4>{{$categoria->nombre}}</h4>
    </div>
    <br>
        @foreach($postsRel as $post)
            @if($post->estado == 1)
                <h4 style="text-align:left">
                    <p><a href="{{ action('App\Http\Controllers\PostController@show',$post->id) }}">
                        {{$post->titulo}}
                    </a></p>
                </h4>
                <h4 style="text-align:left; color:gray;">
                    {{$post->subtitulo}}
                </h4>
                <p style="text-align:left; color: #C4C4C4;">
                    {{$post->fecha}}
                </p>
                
                <br>
            @endif
        @endforeach
    </div>
    <div class="animate__animated animate__fadeIn">
    <p style="text-align:center">
            <a href="{{action('App\Http\Controllers\CategoriasController@index')}}">
            <i class="fas fa-bars" style="color: #94BF82"></i>
                Categorías
            </a>
    </p>
    <p style="text-align:center">
            <a href="{{action('App\Http\Controllers\IndexController@index')}}">
            <i class="fas fa-home" style="color: #94BF82"></i>
             Inicio
       </a>
       </p>

    </div>
    
@endsection