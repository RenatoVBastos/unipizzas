@extends('layouts.templates')
@section('title', 'Home')
@section('conteudo')
oi
@endsection
@section('slideshow')

<link href="css/full-slider.css" rel="stylesheet">

<div id="myCarousel" class="carousel slide outroCSS" data-ride="carousel">
  <!-- Indicators -->

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://secure.static.tumblr.com/b304afe78c597ce3d8af5607c33b95ea/vw95qh9/VPFn7y3rx/tumblr_static__640_v2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="https://secure.static.tumblr.com/b304afe78c597ce3d8af5607c33b95ea/vw95qh9/VPFn7y3rx/tumblr_static__640_v2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="https://secure.static.tumblr.com/b304afe78c597ce3d8af5607c33b95ea/vw95qh9/VPFn7y3rx/tumblr_static__640_v2.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="https://secure.static.tumblr.com/b304afe78c597ce3d8af5607c33b95ea/vw95qh9/VPFn7y3rx/tumblr_static__640_v2.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection