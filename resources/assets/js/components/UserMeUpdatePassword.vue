<template>
    <form>
        <fieldset>
            <legend>Cambiar contraseña</legend>
            <label>Contraseña actual:
                <input type="password" name="password" v-model="user.password">
            </label></br>
            <label>Nueva contraseña:
                <input type="password" name="new_password" v-model="user.new_password">
            </label></br>
            <label>Repite nueva contraseña:
                <input type="password" name="new_password_confirmation" v-model="user.new_password_confirmation">
            </label>

            <form-errors :errors="errors"></form-errors>
            <form-button :submit="updateUserPassword" :request-status="requestStatus"></form-button>
        </fieldset>
    </form>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready: User me update password.');
        },
        data: function () {
            return {
                user: {
                    id: variables.user.id,
                    password: '',
                    new_password: '',
                    new_password_confirmation: ''
                },
                requestStatus: "",
                errors: {}
            };
        },
        methods: {
            updateUserPassword: function () {
                this.requestStatus = "loading";
                this.errors = {};
                this.$http.put('/api/users/' + this.user.id + '/change-password',
                    this.user)
                    .then(response => {
                        this.requestStatus = "ok";
                        console.log(response);
                    }, error => {
                        this.requestStatus = "error";
                        this.errors = error.body;
                        console.log("hi", error, this.errors);
                    });
            }
        }
    }
</script>