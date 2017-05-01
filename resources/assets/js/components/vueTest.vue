<template></template>
<script>
    export default {
        mounted() {
            console.log('Component ready.');
            this.$http.get('/api/user')
                .then(response => {
                    console.log(response.data);
                });
        }
    }
</script>