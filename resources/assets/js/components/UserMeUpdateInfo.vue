<template>
   <form>
        <fieldset>
            <legend>Mis datos</legend>
            <label for='inNombreUsuario'>Nombre:
                <input type='text'
                       id="inNombreUsuario"
                       name="nombreUsuario"
                       class='w200px'
                       v-model="user.person.entity.name">
            </label>
            <label for='slPaisUsuario'>País:
                <select id='slPaisUsuario' name='paisUsuario'>
                    <option value='1'>España</option>
                </select>
            </label>
            <label for='slProvinciaUsuario'>Provincia:
                <select id="slProvinciaUsuario" name='provinciaUsuario' disabled>
                    <option value='1'>Alicante</option>
                </select>
            </label>
            <label for='slLocalidadUsuario'>Localidad:
                <select id="slLocalidadUsuario" name='slLocalidadUsuario' disabled>
                    <option value='2'>Altea</option>
                    <option value='3'>San Vicente</option>
                    <option value='4'>Alicante</option>
                    <option value='5'>Orihuela</option>
                </select>
            </label>

            <label for='inDireccionUsuario' >Dirección:
                <input type='text' name='direccionUsuario' id="inDireccionUsuario" class='w200px'></label>
            <label for='inTelefonoUsuario'>Teléfono:
                <input type='tel'
                       id="inTelefonoUsuario"
                       name='telefonoUsuario'
                       v-model="user.person.entity.phone">
            </label>

            <label for='inMailUsuario' >E-mail:
                <input type='email'
                       id="inMailUsuario"
                       name='mailUsuario'
                       class='w200px'
                       v-model="user.person.entity.email">
            </label>
            <label>Contraseña:
                <input type="password" name="passwordUsuario" v-model="user.password">
            </label>

            <button type='submit' class='boton' v-on:click.prevent="updateUserInfo">Enviar</button>
            <span v-show="requestStatus == 'loading'">Loading...</span>
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
                this.$http.put('/api/users/' + this.user.id,
                    this.user)
                    .then(response => {
                        console.log(response);
                    });
            }
        }
    }
</script>