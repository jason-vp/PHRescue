<body >
<div id="overlay" onClick="closeOverlay();"></div>

<header id="hPrinc">
<h1 class='noDisplay'>Asoka Gestión</h1>
<a href='panel.php'><img id='logo' src='/images/logo.png' title='Asoka el grande: Asociación para la defensa y protección de los animales' alt='Asoka el grande: Asociación para la defensa y protección de los animales'></a>
<div id='user-panel'><h2 class='noDisplay'>Panel</h2><p>Hola <?php echo $user->user_name ?></p><a href='/panel'>Panel de usuario</a>&nbsp&nbsp<a href='/logout'>Cerrar sesión</a></div>

<nav id='nPrinc'>

	<ul>
		<li id="dMenu">
				<a href="#">Menú</a>
		</li>
		<li>
			<a <?php if($current_tab=="perros") echo "id='current-tab'"; ?> href='#!'>Perros</a>
			<ul>
				<li><a href='/consulta/perros'>Consulta</a></li>
				<li><a href='/alta/perros'>Alta rápida</a></li>
			</ul>
		</li>
		<li>
			<a <?php if($current_tab=="gatos") echo "id='current-tab'"; ?> href='#!'>Gatos</a>
			<ul>
				<li><a href='/consulta/gatos'>Consulta</a></li>
				<li><a href='/alta/gatos'>Alta rápida</a></li>
			</ul>
		</li>
		<li>
			<a <?php if($current_tab=="exoticos") echo "id='current-tab'"; ?> href='#!'>Exóticos</a>
			<ul>
				<li><a href='/consulta/exoticos'>Consulta</a></li>
				<li><a href='/alta/exoticos'>Alta rápida</a></li>
			</ul>		
		</li>
		<li>
			<a <?php if($current_tab=="veterinaria") echo "id='current-tab'"; ?> href='#!'>Veterinaria</a>
			<ul>
				<li><a href='/medicacion'>Medicación</a></li>
				<li><a href='/veterinarios'>Veterinarios</a></li>
				<li><a href='/clinicas'>Clínicas</a></li>
			</ul>			
		</li>
		<li>
			<a <?php if($current_tab=="adopciones") echo "id='current-tab'"; ?> href='#!' >Adopciones</a>
			<ul>
				<li><a href='/adoptantes'>Adoptantes</a></li>
				<li><a href='/acogidas'>Casas acogida</a></li>
                <li><a href='/nonGratae'>Personas non gratas</a></li>
				<li><a href='/seguimientos/gestion'>Seguimientos</a></li>
			</ul>
		</li>
		<li>
			<a <?php if($current_tab=="voluntariado") echo "id='current-tab'"; ?> href='#'>Voluntariado</a>
			<ul>
				<li><a href='/voluntarios'>Voluntarios</a></li>
				<li><a href='/paseadores'>Paseadores</a></li>
				<li><a href='/correos'>Consulta correos</a></li>
				<li><a href='/usuarios'>Usuarios</a></li>
			</ul>				
		</li>
	</ul>
</nav>
</header>

<div id='cuerpo'>