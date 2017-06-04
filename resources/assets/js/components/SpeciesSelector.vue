<template>
    <span>
        <span v-show="type === 'exotics'">
            <label for='especie'><strong > Especie:</strong >
                <select id='especie' name='specie'
                        v-model="internalSelectedSpecies">
                    <option value="">--</option>
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
                    :disabled="selectedSpecies == null">
                <option value="">--</option>
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
            console.log(this.species, this.mappedBreeds);
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
                this.$emit('update:breed', this.internalSelectedBreed);
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