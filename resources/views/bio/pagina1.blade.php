@extends('bio.benvingut')

@section('title', 'Pàgina formulari')

@section('header')
BIORRITMES
<br>
<br>


La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los animales, cosechas, etc., se rigen por ciclos biológicos o ritmos. Existen diferentes biorritmos que afectan nuestro comportamiento en distintas maneras. Se ha comprobado estadísticamente que la energía física se comporta cíclicamente en periodos de 23 días, la energía emotiva en periodos 28 días y la energía intelectual en 33 días. Al momento de nacer, cada ciclo comienza desde cero y empieza a subir en una fase positiva, durante la cual las energías y las capacidades son altas.

@endsection

@section('content')
<div class="container">
	<form method="get" action="result">
		<label class="col-2">Nombre</label>
		<input class="form-control" type="text" name="Nombre">
		</br>
		<label class="col-2">Data de nacimiento</label>	  
		<input class="form-control" type="date" value="2010-01-10" name="nacimiento">  
		</br>
		<div class="row">
			<div class="col">
				<input type="submit" class="btn btn-block btn-success" value="Enviar">	
			</div>
		</div>
	</form>
</div>
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