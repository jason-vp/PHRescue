<template>
    <form>
        <fieldset>
            <legend>Cambiar contraseña</legend>
            <label>Contraseña actual:
                <input type="password" name="passwordUsuario">
            </label></br>
            <label>Nueva contraseña:
                <input type="password" name="newPasswordUsuario">
            </label></br>
            <label>Repite nueva contraseña:
                <input type="password" name="repNewPasswordUsuario">
            </label>

            <button type='submit' class='boton'>Enviar</button>
        </fieldset>
    </form>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready: User me update password.');
        }
    }
</script>