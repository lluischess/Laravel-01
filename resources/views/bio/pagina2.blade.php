<!-- Cridem a la Master -->
@extends('bio.benvingut')
<!--Titulo de la pagina -->
@section('title', 'Resultados')

<!--Header -->
@section('header')
 BIORRITMES
<p>
    {{$nom}}
    </br>
    {{$data}}
</p>
@endsection 

@section('content')
<p>
    <!--Fisico -->
    <p>Fisico</p> <p class="black">{{$fisico}}%</p> 

    <div class="progress">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{$fisico}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$fisico}}%">
            <span class="sr-only"></span>
        </div>
    </div>
    
    <!-- Emocional -->
    
    <p>Emocional</p> <p class="black">{{$Emocional}}%</p> 
    <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$Emocional}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$Emocional}}%">
            <span class="sr-only"></span>
        </div>
    </div>
    
    <!-- Intelectual -->
    
    <p>Intelectual </p>   <p class="black">{{$Intelectual}}%</p>
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$Intelectual}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$Intelectual}}%">
            <span class="sr-only"></span>
        </div>
    </div>
    
</p>
@endsection
    
    @section('Footer')
<body>
    <!-- Aqui configurarem el footer -->
    <footer class="navbar-default navbar-fixed-bottom" id="footer"> <!-- Footer bootstrap -->
      <div class="container">
            <p>Lluis Casamajor Paloma</p>
      </div>
     </footer>
 </body>

@endsection