<template>
    <div id="dResultados" >
        <header>
            <h3>Resultados</h3>
        </header>
        <div id="dInnerResultados">
            <!-- TODO Proper layout -->
            <div  v-for="animal in animals.data" :class="['dAnimal', animal.status.toLowerCase()]">
                <a :href="'/ficha/' + type + '/' + animal.id">
                    <div class="dAniImg" v-if="animal.favorite_photo">
                        <img :src="animal.favorite_photo.path">
                    </div>
                    <div class="dAniImg" v-else>
                        <img src="/images/placeholder.png">
                    </div>
                </a>
                <div class="dAniDatos">
                    <h4>
                        <a :href="'/ficha/' + type + '/' + animal.id">{{ animal.name }}</a>
                    </h4>
                    <p>
                        {{ animal.sex[0] }}  - {{ getAge(animal.birth_date) }} - {{ animal.weight }}
                        <span v-if="animal.weight">kg</span></br>
                        <span v-if="type === 'exotics'">
                    - {{ animal.animalable.size }}
                    </span>
                        {{ animal.breed.name }}
                        <span v-if="type === 'dogs'">
                        - {{ animal.animalable.size }}
                    </span>
                        </br>

                        FE: {{ animal.entry_date }}
                    </p>
                    <p>{{ animal.status }}</p>
                </div>
            </div>
        </div>

        <paginator :result="animals" @update:result="val => this.$emit('update:animals', val)"
                   :api-endpoint="apiEndpoint"
                   :extra-params="'&type=' + type"></paginator>
    </div>
</template>
<script>
    let moment = require('moment');
    export default {
        mounted() {
            console.log('Component ready: Animals list.');
        },
        props: ['animals', 'type'],
        data: function () {
            return {
                apiEndpoint: '/api/animals',
                requestStatus: "",
                errors: []
            };
        },
        methods: {
            getAnimals: function () {
                this.requestStatus = "loading";
                this.$http.get('/api/animals' + "?type=" + this.type,
                    this.user)
                    .then(response => {
                        this.requestStatus = "ok";
                        this.animals = response.body;
                        console.log(response);
                    }, error => {
                        this.requestStatus = "error";
                        this.errors = error.body;
                        console.log(error);
                    });
            },
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