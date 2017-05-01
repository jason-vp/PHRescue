<template>
    <div class="form-button-wrapper">
        <button type='submit'
                :disabled="requestStatus == 'loading'"
                v-on:click.prevent="submit">
            Enviar
        </button>
        <span class="request-status">{{ requestStatus }} </span>
    </div>
</template>
<script>
    export default {
        props: ['submit', 'requestStatus']
    }

</script>