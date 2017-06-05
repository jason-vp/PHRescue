<template>
    <div id='fotos'>
        <h3> Fotos </h3>
        <div id='diNavFoto'>
            Foto {{ indexSelected+1 }} de {{ photos.length }}
            <div id='flechas'>
                <span v-on:click="nextPhoto">
                    <img src='/images/flecha_anterior.jpg'>
                </span>
                <span v-on:click="previousPhoto">
                    <img src='/images/flecha_siguiente.jpg'>
                </span>
            </div>
        </div>
        <div id='diCurrentFoto'>
            <img id='current-foto' :src='photos[indexSelected].path'>
            <div id='nav-acc-foto'>
                <button type='button' v-on:click="markAsFavorite" class='buFav'></button>
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
            console.log('Component ready: Animal photos.');
            this.indexSlected = this.indexFavorite;
        },
        props: ['favorite', 'photos'],
        data: function () {
            return {
                indexSelected: 0
            };
        },
        methods: {
            nextPhoto: function () {
                if (this.indexSelected === (this.photos.length - 1)) {
                    this.indexSelected = 0;
                }
                else {
                    this.indexSelected++;
                }
                console.log(this.indexSelected);
            },
            previousPhoto: function () {
                if (this.indexSelected === 0) {
                    this.indexSelected = this.photos.length - 1;
                }
                else {
                    this.indexSelected--;
                }
                console.log(this.indexSelected);
            },
            markAsFavorite: function () {
                console.log("Marking as favorite", this.photos[this.indexSelected]);
            }
        },
        computed: {
            indexFavorite: function () {
                return this.photos.findIndex((photo) => photo.id === this.favorite );
            }
        },
    }
</script>