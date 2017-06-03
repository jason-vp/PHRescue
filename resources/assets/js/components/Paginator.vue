<template>
    <div>
        <div>
            <p v-if="result.total != 0"> Mostrando del {{ result.from }} al {{ result.to }} de {{ result.total }} resultados.</p>
            <p v-else>No se han encontrado resultados</p>
        </div>

        <div v-if="result.total != 0" id='paginador'>
            <p>Pag. {{ result.current_page }} de {{ result.last_page }} </p>
            <ul>
                <li>
                    <a v-bind:class="{ 'disabled': result.currentPage === 1 }"
                       v-on:click="changePage($event, 1)"
                       href=''>
                        <<
                    </a>
                </li>
                <li>
                    <a v-bind:class="{ 'disabled': result.current_page === 1 }"
                       v-on:click="changePage($event, result.current_page - 1)"
                       href=''>
                        <
                    </a>
                </li>

                <li v-for="pageNumber in numberOfShownPages()">
                    <a v-bind:class="{ 'selected': result.currentPage === pageNumber }"
                       v-on:click="changePage($event, pageNumber)"
                       href=''>
                        {{ pageNumber }}
                    </a>
                </li>

                <li>
                    <a v-bind:class="{ 'disabled': result.currentPage === result.last_page }"
                       v-on:click="changePage($event, result.current_page + 1)"
                       href=''>
                        >
                    </a>
                </li>
                <li>
                    <a v-bind:class="{ 'disabled': result.currentPage === result.last_page }"
                       v-on:click="changePage($event, result.last_page)"
                       ref=''>
                        >>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['result', 'apiEndpoint', 'extraParams'],
        mounted() {
            console.log('Component ready: paginator.');
            console.log('endpoint = ', this.apiEndpoint);
        },
        methods: {
            numberOfShownPages: function () {
                const MAX_PAGES_SHOWN = 10;
                return Math.min(this.result.last_page, MAX_PAGES_SHOWN);
            },
            changePage: function (event, $page_number = 1) {
                event.preventDefault();
                let page_path = document.location.pathname;

                this.$http.get(this.apiEndpoint + "?page=" + $page_number + this.extraParams,
                    this.user)
                    .then(response => {
                        this.$emit('update:result', response.body);
                        history.pushState(this.$root.variables, window.title, page_path + '?page=' + $page_number);
                        console.log("Pushing to history", this.$root.variables);
                    }, error => {
                        // TODO error management
                        console.log(error);
                    });
            }
        }
    }

</script>