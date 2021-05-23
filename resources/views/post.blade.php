@extends('layouts.base')

<style>

#post{
    margin-top: 3%;
    margin-left: 10%;
    margin-right: 10%;
    margin-bottom: 10%;
}

#pill{
    background-color: #94BF82 !important;
    font-size: 80%;
}

</style>

@section('main')

    <div class="animate__animated animate__fadeIn" id="post">
        <h2 style="text-align:left">
            {{$post->titulo}} 
        <!--
            <i class="fas fa-seedling" style="color:green;"></i> -->
        </h2>
        <h4 style="text-align:left; color:gray;">
            {{$post->subtitulo}}
        </h4>
        <p style="text-align:left; color: #C4C4C4;">
            {{$post->fecha}}
        </p>
        <span class="badge rounded-pill bg-success" id="pill">{{$categoria->nombre}}</span>
        <br>
        <p>
            {!! $post->contenido!!}
        </p>
        
        <hr>
        <div class="animate__animated animate__fadeIn">
            <p style="text-align:center">
            <a href="{{action('App\Http\Controllers\CategoriasController@show',$categoria->id)}}">
                <i class="fas fa-bars" style="color: #94BF82"></i>
                Ver más post sobre <i><b>{{$categoria->nombre}}</b></i>
            </a>
            </p>
            <p style="text-align:center">
            <a href="{{action('App\Http\Controllers\IndexController@index')}}">
                <i class="fas fa-home" style="color: #94BF82"></i>
                Inicio
            </a>
            </p>
        </div>
    </div>
        
@endsection

<script>
var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
  return new bootstrap.Dropdown(dropdownToggleEl)
})

</script>