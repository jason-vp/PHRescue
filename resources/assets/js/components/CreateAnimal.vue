<template>
    <div id='dAlta' class="center">
        <form method="post">
            <fieldset id='form-datos'>
                <label for='nombre'>Nombre:
                    <input type='text' name='name' id='nombre' v-model="animal.name">
                </label>

                <species-selector
                        :type="type"
                        :species="species"
                        :selected-species="specieId"
                        :selected-breed.sync="animal.breed.id">
                </species-selector>


                <strong>Sexo:</strong>
                <label for='sexo1'>
                    <input id='sexo1' type='radio' name='sexo'
                           v-model="animal.sex"
                           :value='"Male"'>
                    M
                </label>
                <label for='sexo2'>
                    <input id='sexo2' type='radio' name='sexo'
                           v-model="animal.sex"
                           :value='"Female"'>
                    H
                </label>

                <label for='fecha-nacimiento'>
                    Fecha Nacimiento:
                    <input type='date'
                           name='fecha-nacimiento'
                           id='fecha-nacimiento'
                           class='inDate'
                           v-model="animal.birth_date">
                </label>

                <label for='edad'>Edad:
                    <input id='edad' type='text' name='age'
                           :value='getAge(animal.birth_date)'>
                </label>

                <span v-if="type === 'cats'">
                    <label for='slManto'>Manto:
                        <select id='slManto' name='raza'
                                v-model="animal.animalable.coat">
                            <option value="">--</option>
                            <option v-for="coat in coats"
                                    :value='coat'>
                                {{ coat }}
                            </option>
                        </select>
                    </label>
                </span>

                <div class="colors">
                    <label for="primary-color">
                        Color principal:
                        <input type="color" id="primary-color"
                               v-model="animal.primary_color">
                    </label>
                    <label for="secondary-color">
                        Color secundario:
                        <input type="color" id="secondary-color"
                               v-model="animal.secondary_color">
                    </label>
                    <label for="ternary-color">
                        Color terciario:
                        <input type="color" id="ternary-color"
                               v-model="animal.ternary_color">
                    </label>
                </div>

                <label for='peso'>Peso:
                    <input type='number' name='peso' id='peso'  min='0' max='80' step='0.01'
                           v-model="animal.weight">kg
                </label>

                <span v-if="type === 'dogs'">
                    <label for='tam'>Tamaño:
                        <select id='tam' name='tam'
                                v-model="animal.animalable.size">
                            <option value="">--</option>
                            <option v-for="size in sizes"
                                    :value='size'>
                                {{ size }}
                            </option>
                        </select>
                    </label>
                </span>

                <label for='fecha-entrada'>
                    Fecha Entrada:
                    <input type='date' name='fecha-entrada'
                           id='fecha-entrada' class='inDate'
                           v-model="animal.entry_date">
                </label>

                <p v-if="type == 'dogs'">
                    <strong>Medidas:</strong>
                    <label for='medida-suelo'>Cruz-Suelo:
                        <input type='number' id='medida-suelo' name='medida-suelo'  min='5' max='150' step='1' >
                        cm
                    </label>
                    <label for='medida-cola'>Cruz-Cola:
                        <input type='number' id='medida-cola' name='medida-cola'  min='5' max='150' step='1' >
                        cm
                    </label>
                </p>

                <label for='chip'>
                    Nº Microchip:
                    <input type='text' name='chip' id='chip'
                           v-model="animal.microchip_number">
                </label>
                <label for='fecha-chip'>
                    Fecha Microchip:
                    <input type='date' name='fecha-chip' id='fecha-chip'
                           v-model="animal.microchip_date">
                </label>

                <label for='pasaporte'>
                    Nº Pasaporte
                    <input type='text' name='pasaporte' id='pasaporte'
                           v-model="animal.passport_number">
                </label>
                <label for='inPub'>Publicitar:
                    <input id='inPub' type='checkbox' name='inPub'
                           v-model="animal.public_advertisement">
                </label>

                <p>Encontrado en:</p>
                <city-selector
                        :countries="countries"
                        :selectedCountry="foundAtCountryId"
                        :selectedRegion="foundAtRegionId"
                        :selectedCity.sync="animal.found_at_city.id">
                </city-selector>

                <label for='condiciones'>
                    Condiciones:
                </label>
                <textarea id='condiciones' name='condiciones' maxlength='300' rows='4'
                          v-model="animal.found_observations">
                </textarea>

                <form-errors :errors="errors"></form-errors>
                <form-button :submit="createAnimal" :requestStatus="requestStatus"></form-button>
            </fieldset>
        </form>
    </div>
</template>
<script>
    let moment = require('moment');
    export default {
        created() {
        },
        mounted() {
            console.log('Component ready: Create animal form.');
            console.log(this.animal);
        },
        props: ['type', 'species', 'sizes', 'coats', 'characters', 'countries'],
        data: function () {
            return {
                requestStatus: "",
                errors: [],
                animal: {
                    public_advertisement: true,
                    animalable: {},
                    found_at_city: {},
                    breed: {
                        species: {}
                    }
                }
            };
        },
        computed: {
            specieId: function () {
                if (this.type === "dogs" || this.type === "cats") {
                    // Only dog or cat species will be preloaded in this case
                    return this.species[0].id;
                }
                // The species selector will be visible for the user
                return null;
            }
        },
        methods: {
            getAge: function(date) {
                // TODO Improve this
                let diff = moment(moment(date).diff(moment()));
                let years = moment().diff(moment(date), 'years');
                let months = diff.month();
                return years + " A y " + months + " M";
            },
            createAnimal: function () {
                console.log(this.animal);
                this.errors = [];
                this.requestStatus = "loading";

                this.$http.post('/api/animals', this.animal)
                    .then((response) => {
                        this.requestStatus = "ok";
                        this.animal = response.body;
                        console.log(this.animal);
                        window.location.href = '/ficha/' + this.type + '/' + this.animal.id;
                    }, error => {
                        this.requestStatus = "error";
                        this.errors = error.body;
                        console.log(error);
                    });
            },
        }
    }
</script>