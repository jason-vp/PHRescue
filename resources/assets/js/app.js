
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

Vue.component(
    'vue-test',
    require('./components/vueTest.vue')
);

Vue.component(
    'user-me-update-info',
    require('./components/UserMeUpdateInfo.vue')
);

Vue.component(
    'user-me-update-password',
    require('./components/userMeUpdatePassword.vue')
);

Vue.component(
    'form-button',
    require('./components/FormButton.vue')
);

Vue.component(
    'form-errors',
    require('./components/FormErrors.vue')
);

Vue.component(
    'animals-list',
    require('./components/AnimalsList.vue')
);

const app = new Vue({
    el: '#body-content',
    created: function () {
        // `this` points to the vm instance
        console.log(this.user)
    }
});

