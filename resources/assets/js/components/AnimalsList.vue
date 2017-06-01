<template>
    <div>
        <!-- TODO Proper layout -->
        <div  v-for="animal in animals.data" :class="['dAnimal', animal.status]">
            <div class="dAniImg">
                <a :href="'/ficha/' + type + '/' + animal.id">
                    <img :src="animal.favorite_photo.path">
                </a>
            </div>
            <div class="dAniDatos">
                <h4><a :href="'/ficha/' + type + '/' + animal.id">{{ animal.name }}</a></h4>
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
            </div>
            <p>{{ animal.status }}</p>
        </div>
    </div>
</template>
<script>
    var moment = require('moment');
    export default {
        mounted() {
            console.log('Component ready: Animals list.');
            console.log(this.animals);
        },
        data: function () {
            return {
                animals: variables.animals,
                type: variables.type,
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