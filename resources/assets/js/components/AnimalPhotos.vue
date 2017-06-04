<template>
    <div id='fotos'>
        <h3> Fotos </h3>
        <div id='diNavFoto'>
            Foto 1 de 1
            <span id='flechas'>
                <img src='/images/flecha_anterior.jpg'> | <img src='/images/flecha_siguiente.jpg'>
            </span>
        </div>
        <div id='diCurrentFoto'>
            <img id='current-foto' src='<?php echo $fotoAnimal ?>'>
            <div id='nav-acc-foto'>
                <button type='button' class='buFav'></button>
                <button type='button' class='buDelete'></button>
            </div>
        </div>
        <form id='f-sf'>
            <fieldset>
                <p>
                    <label for='nueva-foto'>Subir una nueva imagen:</label><br>
                    <input type='file' id='nueva-foto' name='nueva-foto'><br>
                </p>
                <input id='s-foto' type='submit' class='boton' value='Añadir'>
            </fieldset>
        </form>
        <div id='generar-pdf'>
            <form id='f-pdf'>
                <fieldset>
                    <legend>Generar ficha en pdf</legend>
                    <select id='pdf' name='pdf'>
                        <option value='2' selected>Ficha completa (ESP)</option>
                        <option value='3'>Ficha completa (FIN)</option>
                        <option value='4'>Ficha completa (ALE)</option>
                    </select>
                    <input id='g-pdf' type='submit' class='boton' value='Generar'>
                </fieldset>
            </form>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready: Animal basic data.');
        },
        props: [],
        data: function () {
            return {
            };
        },
        methods: {
        }
    }
</script>