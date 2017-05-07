<template>
    <div>
        <ul class="error-list">
            <li class="error" v-for="error in errors">
                {{ error[0] }}
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        props: ['errors']
    }
</script>