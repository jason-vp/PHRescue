<template>
    <div>
        <button v-on:click="getAnimals()">Eo</button>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready: Animals list.');
        },
        data: function () {
            return {
                animals: variables.animals,
                requestStatus: "",
                errors: []
            };
        },
        methods: {
            getAnimals: function () {
                this.requestStatus = "loading";
                this.$http.get('/api/animals' + "?type=dogs",
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
            }
        }
    }
</script>