@extends('master.mainLayout')

@section('content')
<h2>Gestión Seguimientos</h2>

<?php if($gestor): ?>
<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay">
        <h3> Alta</h3>
        <form id="Seguimiento">

            <fieldset>

                <label for="'inIDVoluntarioSeguimiento">Asignar a DNI/Nick usuario:
                    <input id="inIDVoluntarioSeguimiento" type="text" name="IDVoluntarioSeguimiento"/>
                </label>

                <button type='submit' class='boton'>Enviar</button>
            </fieldset>
        </form>

    </div>
</div>
<?php endif; ?>

<div id='busqueda' class='borderUp'>

    <form class='center'>
        <fieldset>
            <legend><h3> Buscar </h3></legend>
            <p>
                <label for='nombreAnimal'>Nombre animal:  <input id='nombreAnimal' type='text' name='nombreAnimal'/> </label>
                <?php if($gestor): ?>
                <label for="'inIDVoluntarioSeguimiento">DNI/Nick usuario:
                    <input id="inIDVoluntarioSeguimiento" type="text" name="IDVoluntarioSeguimiento"/>
                </label>
                <?php endif; ?>
            </p>

            <fieldset>
                <legend><h4>Estado:</h4></legend>
                <p>
                    <label for='estado1'><input id='estado1' type='checkbox' name='estado' value='abierto' checked />Sin asignar</label>
                    <label for='estado3'><input id='estado2' type='checkbox' name='estado' value='asignado'checked />Abierto</label>
                    <label for='estado4'><input id='estado3' type='checkbox' name='estado' value='peticion' checked/>Petición de cierre</label>
                    <label for='estado5'><input id='estado4' type='checkbox' name='estado' value='cerrado'/>Cerrado</label>
                </p>
            </fieldset>
            <fieldset>
                <legend><h4>Especie:</h4></legend>
                <p>
                    <label for='especie1'><input id='especie1' type='checkbox' name='especie' value='perro' checked />Perros</label>
                    <label for='especie2'><input id='especie2' type='checkbox' name='especie' value='gato'checked />Gatos</label>
                    <label for='especie3'><input id='especie3' type='checkbox' name='especie' value='exotico' checked/>Exóticos</label>
                </p>
            </fieldset>
            <fieldset>
                <legend><h4>Ordenar por:</h4></legend>
                <p>
                    <label for='orden1'><input id='orden1' type='radio' name='orden' value='1'checked />Fecha adopción</label>
                    <label for='orden3'><input id='orden3' type='radio' name='orden' value='2' />Nombre (A-Z)</label>
                    <label for='orden4'><input id='orden4' type='radio' name='orden' value='3'/> Estado</label>
                    <label for='orden5'><input id='orden5' type='radio' name='orden' value='4'/>Especie</label>
                </p>
            </fieldset>
            <input type='submit' class='boton' value='Buscar'/>
        </fieldset>
    </form>
</div>


<div id="dResultados" class='borderUp'>
    <?php echo $headerPaginador ?>

    <div id="dInnerResultados">
        <?php for($i=0; $i<3; $i++): ?>

            <div class="dAnimal enAdopcion">
                <div class="dAniImg">
                    <a href="/seguimiento/1">
                        <img src="/images/emiliano.jpg">
                    </a>
                </div>
                <div class="dAniDatos">
                    <h4><a href="/seguimiento/1">Emiliano</a></h4>
                    <p>
                        M - 5a 4m - 4kg</br>
                        <?php //if($exoticos): ?>
                            Ratón -
                        <?php //endif; ?>
                        Mestizo
                        <br/>

                        FA: 25-06-2015
                    </p>
                </div>
                <p><?php if($gestor): ?>
                    <button class="buEdit" onclick="openOverlay(1)"></button>
                    <?php endif; ?>
                    Abierto
                <?php if($gestor): ?>
                    <br/>
                    Sin asignar
                    <?php endif; ?>
                </p>
            </div>
        <?php endfor; ?>
        <?php for($i=0; $i<3; $i++): ?>

            <div class="dAnimal reservado">
                <div class="dAniImg">
                    <a href="/seguimiento/1">
                        <img src="/images/emiliano.jpg">
                    </a>
                </div>
                <div class="dAniDatos">
                    <h4><a href="/seguimiento/1">Emiliano</a></h4>
                    <p>
                        M - 5a 4m - 4kg</br>
                        <?php //if($exoticos): ?>
                        Ratón -
                        <?php //endif; ?>
                        Mestizo
                        <br/>

                        FA: 25-06-2015
                    </p>
                </div>
                <p><?php if($gestor): ?>
                    <button class="buEdit" onclick="openOverlay(1)"></button>
                <?php endif; ?>
                    Abierto
                    <br/>
                    <?php if($gestor): ?>
                    Asignado a: <a href="voluntarios.blade.php?id=1">Pepe</a>
                    <?php endif; ?>
                </p>
            </div>
        <?php endfor; ?>
        <?php for($i=0; $i<3; $i++): ?>

            <div class="dAnimal reservado">
                <div class="dAniImg">
                    <a href="/seguimiento/1">
                        <img src="/images/emiliano.jpg">
                    </a>
                </div>
                <div class="dAniDatos">
                    <h4><a href="/seguimiento/1">Emiliano</a></h4>
                    <p>
                        M - 5a 4m - 4kg</br>
                        <?php //if($exoticos): ?>
                        Ratón -
                        <?php //endif; ?>
                        Mestizo
                        <br/>

                        FA: 25-06-2015
                    </p>
                </div>
                <p><?php if($gestor): ?>
                    <button class="buEdit" onclick="openOverlay(1)"></button>
                <?php endif; ?>
                    Petición de cierre
                    <br/>
                    <?php if($gestor): ?>
                    Asignado a: <a href="/voluntarios/1">Pepe</a>
                    <?php endif; ?>
                </p>
            </div>
        <?php endfor; ?>
        <?php for($i=0; $i<3; $i++): ?>

            <div class="dAnimal difunto">
                <div class="dAniImg">
                    <a href="/seguimiento/1">
                        <img src="/images/emiliano.jpg">
                    </a>
                </div>
                <div class="dAniDatos">
                    <h4><a href="/seguimiento/1">Emiliano</a></h4>
                    <p>
                        M - 5a 4m - 4kg</br>
                        <?php //if($exoticos): ?>
                        Ratón -
                        <?php //endif; ?>
                        Mestizo
                        <br/>

                        FA: 25-06-2015
                    </p>
                </div>
                <p>
            <?php if($gestor): ?>
                    <button class="buEdit" onclick="openOverlay(1)"></button>
                    <?php endif; ?>
                    Cerrado
                    <br/>
                <?php if($gestor): ?>
                    Asignado a: <a href="voluntarios.blade.php?id=1">Pepe</a>
                    <?php endif; ?>
                </p>
            </div>
        <?php endfor; ?>
    </div>

    <?php echo $paginador ?>

</div>
@stop