<template>
    <div>
        <header id='heFicha' :class='animal.status.toLowerCase()'>
            <span id='spEstadoHeader'>EN ALBERGUE</span>
            <h2> Ficha: {{ animal.name }}</h2>
        </header>
        <div id='datos-fotos' class='borderUp'>

            <animal-photos :favorite="animal.favorite_photo"
                           :photos.sync="animal.photos"
                           :animal-id="animal.id">
            </animal-photos>

            <div id='datos'>
                <form>
                    <fieldset>
                        <div>
                            <span class='div-ed-datos'>
                                <label for='hab-ed-datos'>Habilitar edición</label>
                                <input type='checkbox'
                                       id='hab-ed-datos'
                                       name='hab-ed-datos'
                                       onChange='toggleDisable(this, "form-datos")'>
                            </span>
                            <h3><legend> Datos </legend></h3>
                        </div>

                        <fieldset id='form-datos' disabled='true'>
                            <label for='nombre'>Nombre:
                                <input type='text' name='nombre' id='nombre' v-model="animal.name">
                            </label>

                            <species-selector
                                    :type="type"
                                    :species="species"
                                    :selected-species="animal.breed.species_id"
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

                            <span v-if="type === 'dogs'">
                                <p><strong>Medidas:</strong>
                                    <label for='medida-suelo'>
                                        Cruz-Suelo:
                                        <input type='number' id='medida-suelo' name='medida-suelo'
                                               min='5' max='150' step='1'
                                               v-model="animal.animalable.height">cm </label>
                                    <label for='medida-cola'>
                                        Cruz-Cola:
                                    </label>
                                    <input type='number' id='medida-cola' name='medida-cola'
                                           min='5' max='150' step='1'
                                           v-model="animal.animalable.length">cm
                                </p>
                            </span>

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
                                    :selectedCountry="animal.found_at_city.region ? animal.found_at_city.region.country.id : null"
                                    :selectedRegion="animal.found_at_city.region ? animal.found_at_city.region.id : null"
                                    :selectedCity.sync="animal.found_at_city.id">
                            </city-selector>

                            <label for='condiciones'>
                                Condiciones:
                            </label>
                            <textarea id='condiciones' name='condiciones' maxlength='300' rows='4'
                                      v-model="animal.found_observations">
                            </textarea>

                            <p>Carácter:</p>
                            <label for='caracter'>
                                Tipo:
                                <select id='caracter' name='caracter'
                                        v-model="animal.character_type">
                                    <option value="">--</option>
                                    <option v-for="character in characters"
                                            :value='character'>
                                        {{ character }}
                                    </option>
                                </select>
                            </label>
                            <label for='text-caracter'>Observaciones carácter:</label>
                            <textarea id='text-caracter' name='text-caracter' maxlength='300' rows='4'
                                      v-model="animal.character_observations">

                            </textarea>

                            <label for='historia'>Historia y otras observaciones:<br> </label>
                            <textarea id='historia' name='historia' maxlength='700' rows='9'
                                      v-model="animal.general_observations">
                            </textarea>

                            <button type='submit' id='buDatos' name='buDatos' class='boton'>Modificar</button>

                        </fieldset>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    let moment = require('moment');
    export default {
        created() {
            if (!this.animal.found_at_city) {
                this.animal.found_at_city = {
                    id: null,
                }
            }
        },
        mounted() {
            console.log('Component ready: Animal basic data.');
        },
        props: ['animal', 'type', 'species', 'sizes', 'coats', 'characters', 'countries'],
        data: function () {
            return {
                test: null
            };
        },
        methods: {
            getAge: function(date) {
                // TODO Improve this
                let diff = moment(moment(date).diff(moment()));
                let years = moment().diff(moment(date), 'years');
                let months = diff.month();
                return years + " A y " + months + " M";
            },
        }
    }
</script>