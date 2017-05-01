<template>
   <form>
        <fieldset>
            <legend>Mis datos</legend>
            <label>Usuario:
                <input type='text'
                       name="user_name"
                       class='w200px'
                       v-model="user.user_name">
            </label>
            <label>Nombre:
                <input type='text'
                       name="name"
                       class='w200px'
                       v-model="user.person.entity.name">
            </label>
            <label>País:
                <select name='paisUsuario'>
                    <option value='1'>España</option>
                </select>
            </label>
            <label>Provincia:
                <select name='provinciaUsuario' disabled>
                    <option value='1'>Alicante</option>
                </select>
            </label>
            <label>Localidad:
                <select name='slLocalidadUsuario' disabled>
                    <option value='2'>Altea</option>
                    <option value='3'>San Vicente</option>
                    <option value='4'>Alicante</option>
                    <option value='5'>Orihuela</option>
                </select>
            </label>

            <label >Dirección:
                <input type='text' name='adress' class='w200px'></label>
            <label>Teléfono:
                <input type='tel'
                       name='phone'
                       v-model="user.person.entity.phone">
            </label>

            <label >E-mail:
                <input type='email'
                       name='email'
                       class='w200px'
                       v-model="user.person.entity.email">
            </label>
            <label>Contraseña:
                <input type="password" name="password" v-model="user.password">
            </label>

            <form-button :submit="updateUserInfo" :request-status="requestStatus"></form-button>
        </fieldset>
    </form>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready: User me update info.');
        },
        data: function () {
            return {
                user: variables.user,
                requestStatus: ""
            };
        },
        methods: {
            updateUserInfo: function () {
                this.requestStatus = "loading";
                this.$http.put('/api/users/' + this.user.id,
                    this.user)
                    .then(response => {
                        this.requestStatus = "ok"
                        console.log(response);
                    }, error => {
                        this.requestStatus = "error";
                        console.log(error);
                    });
            }
        }
    }
</script>