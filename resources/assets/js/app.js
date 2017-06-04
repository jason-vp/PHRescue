
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('dateformat');

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

Vue.component(
    'paginator',
    require('./components/Paginator.vue')
);

Vue.component(
    'animal-basic-data',
    require('./components/AnimalBasicData.vue')
);

Vue.component(
    'animal-photos',
    require('./components/AnimalPhotos.vue')
);

Vue.component(
    'species-selector',
    require('./components/SpeciesSelector.vue')
);

const app = new Vue({
    el: '#body-content',
    created: function () {
        // Recharge state for history navigation without reload.
        // In case of navigating with the back or next button to an ajax generated history entry,
        // this event will be fired and reload the state of that page, so all components update as expected
        window.onpopstate = function(evt){
            if (evt.state !== null) {
                for (index in evt.state) {
                    this.variables[index] = evt.state[index];
                }
            }
        };
    },
    // Charge data preloaded by the server into the vue root scope
    data:  {
        variables: window.variables
    }
});

