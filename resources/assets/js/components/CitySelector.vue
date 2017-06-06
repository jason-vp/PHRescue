<template>
    <span>
        <label for='country'>
            <strong>País:</strong >
            <select id='country' name='country'
                    v-model="internalSelectedCountry">
                <option value="">--</option>
                <option v-for="country in countries"
                        :value='country.id'>
                    {{ country.name }}
                </option >
            </select >
        </label>

        <span>

        </span>
        <label for='region'>
            Region:
            <select id='region' name='region'
                    v-model="internalSelectedRegion"
                    :disabled="!internalSelectedCountry">
                <option value="">--</option>
                <option v-if="!!internalSelectedCountry" v-for="region in mappedRegions[internalSelectedCountry]"
                        :value='region.id'>
                    {{ region.name }}
                </option>
            </select>
        </label>


        <label for="city">
            <select id='city' name='city'
                    v-model="internalSelectedCity"
                    :disabled="!internalSelectedRegion || !internalSelectedCountry">
                <option value="">--</option>
                <option v-if="!!internalSelectedRegion && !!internalSelectedCountry"
                        v-for="city in getCitiesFromRegion(internalSelectedCountry, internalSelectedRegion)"
                        :value='city.id'>
                    {{ city.name }}
                </option>
            </select>
        </label>
    </span>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready: City selector.');
        },
        props: ['countries', 'selectedCountry', 'selectedRegion', 'selectedCity'],
        data: function () {
            return {
                internalSelectedCountry: this.selectedCountry,
                internalSelectedRegion: this.selectedRegion,
                internalSelectedCity: this.selectedCity
            }
        },
        watch: {
            'internalSelectedCity': function () {
                // TODO update of city not working
                console.log("Changed", this.internalSelectedCity);

                this.$emit('update:selectedCity', this.internalSelectedCity);

            }
        },
        methods: {
            mapRegions: function(countryMap, country) {
                countryMap[country.id] =
                    country.regions.reduce(function (regionMap, region) {
                        regionMap[region.id] = {
                            name: region.name,
                            id: region.id,
                            cities: region.cities
                        };
                        return regionMap;
                }, {});
                return countryMap;
            },
            getCitiesFromRegion: function (country, region) {
                if (country && region) {
                    return this.mappedRegions[country][region].cities
                }
                else {
                    return [];
                }
            }
        },
        computed: {
            mappedRegions: function () {
                return this.countries.reduce(this.mapRegions, {})
            }
        },
    }
</script>