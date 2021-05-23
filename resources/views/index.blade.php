@extends('layouts.base')

@section('main')
<style>
#posts{
    margin-top: 3%;
    margin-left: 3%;
    margin-right: 3%;
}


#pill{
    background-color: #94BF82 !important;
    font-size: 50%;
}

</style>
<div class="animate__animated animate__fadeIn" id="posts">
    @foreach($posts as $post)   
        @if($post->estado == 1)
        <p><a href="{{action('App\Http\Controllers\PostController@show',$post->id)}}"><h3 style="text-align:left">
            {{$post->titulo}} 
        </h3></a></p>
        
        <h5 style="text-align:left; color:gray;">
            {{$post->subtitulo}}
        </h5>
        <p style="text-align:left; color: #D2D2D2;">
            {{$post->fecha}}
        </p>
        
        <br>
    @endif
    @endforeach
</div>


@stop