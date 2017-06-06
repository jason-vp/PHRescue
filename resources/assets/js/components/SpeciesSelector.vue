<template>
    <span>
        <span v-show="type === 'exotics'">
            <label for='especie'><strong > Especie:</strong >
                <select id='especie' name='specie'
                        v-model="internalSelectedSpecies">
                    <option v-for="sp in species"
                            :value='sp.id'>
                        {{ sp.name }}
                    </option >
                </select >
            </label>
        </span>

        <label for='raza'>Raza:
            <select id='raza' name='breed'
                    v-model="internalSelectedBreed"
                    :disabled="internalSelectedSpecies == null">
                <option v-for="breed in mappedBreeds[internalSelectedSpecies]"
                        :value='breed.id'>
                    {{ breed.name }}
                </option>
            </select>
        </label>
    </span>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready: Animal species selector.');
        },
        props: ['type', 'species', 'selectedSpecies', 'selectedBreed'],
        data: function () {
            return {
                internalSelectedBreed: this.selectedBreed,
                internalSelectedSpecies: this.selectedSpecies
            }
        },
        watch: {
            'internalSelectedBreed': function () {
                this.$emit('update:selectedBreed', this.internalSelectedBreed);
            }
        },
        methods: {
            mapBreeds: function(map, sp) {
                map[sp.id] = sp.breeds;
                return map;
            }
        },
        computed: {
            mappedBreeds: function () {
                return this.species.reduce(this.mapBreeds, {})
            }
        },
    }
</script>