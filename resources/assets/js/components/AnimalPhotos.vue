<template>
    <div id='fotos'>
        <h3> Fotos </h3>
        <div id='diNavFoto'>
            <span v-if="this.photos.length != 0">
                Foto {{ indexSelected+1 }} de {{ photos.length }}
            </span>
            <span v-else>
                No hay fotos para mostrar
            </span>
            <div id='flechas' v-if="this.photos.length != 0">
                <span v-on:click="nextPhoto">
                    <img src='/images/flecha_anterior.jpg'>
                </span>
                <span v-on:click="previousPhoto">
                    <img src='/images/flecha_siguiente.jpg'>
                </span>
            </div>
        </div>
        <div id='diCurrentFoto'  v-if="this.photos.length != 0">
            <img id='current-foto' :src='photos[indexSelected].path'>
            <div id='nav-acc-foto'>
                <button type='button'class='buFav'
                        v-on:click="markAsFavorite"
                        :disabled="indexSelected == indexFavorite"></button>
                <button type='button' class='buDelete'
                        v-on:click="deletePhoto"></button>
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
            this.indexSelected = this.indexFavorite;
        },
        props: ['favorite', 'photos', 'animalId'],
        data: function () {
            return {
                indexSelected: 0,
                requestStatus:"",
                errors: []
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

                this.requestStatus = "loading";
                this.$http.put('/api/animals/' + this.animalId + '/favorite-photo/' + this.photos[this.indexSelected].id)
                    .then(response => {
                        this.requestStatus = "ok";
                        this.favorite = response.body.favorite_photo;
                        console.log(response);
                    }, error => {
                        this.requestStatus = "error";
                        this.errors = error.body;
                        console.log(error);
                    });

            },
            deletePhoto: function () {
                console.log("Deleting photo", this.photos[this.indexSelected]);

                this.requestStatus = "loading";
                this.$http.delete('/api/animals/' + this.animalId + '/photos/' + this.photos[this.indexSelected].id)
                    .then(response => {
                        this.requestStatus = "ok";
                        let indexToDelete = this.indexSelected;
                        if (this.indexSelected > 0) {
                            this.indexSelected--;
                        }
                        this.photos.splice(indexToDelete, 1);
                        console.log(response);
                    }, error => {
                        this.requestStatus = "error";
                        this.errors = error.body;
                        console.log(error);
                    });
            }
        },
        computed: {
            indexFavorite: function () {
                return this.photos.findIndex((photo) => photo.id === this.favorite );
            },
        },
    }
</script>