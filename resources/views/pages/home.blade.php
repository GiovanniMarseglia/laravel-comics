@extends('layouts.app')

@section('title', 'home')

@section('content')

<div class="container-full jumbo">
    <span class="current">CURRENT SERIES</span>
    <div class="container container2">
      <div class="content">
        <!-- contenuto -->
        {{-- <CardFilm v-for="element in film" :propsThumb="element.thumb" :propsName="element.series"/> --}}

            <div class="row row-cols-6 carte">
                @foreach ($comics as $element)
                    <div class="col">
                        <figure>
                            <img src= {{$element["thumb"]}}>
                        </figure>
                            <span>{{$element["title"]}}</span>
                    </div>
                @endforeach
            </div>



      </div>
      <button>LOAD MORE</button>
    </div>
  </div>


@endsection
