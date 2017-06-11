<template>
    <div>
        <ul class="error-list">
            <li class="error" v-if="typeof errors === 'string'">
                {{ errors }}
            </li>
            <li class="error" v-else v-for="error in errors">
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