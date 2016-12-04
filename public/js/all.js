
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

const app = new Vue({
    el: '#app'
});


window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = require('vue');
require('vue-resource');

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);

    next();
});

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

function onDOMReady(fn, ctx){
    var ready, timer;
    var onChange = function(e){
        if(e && e.type == "DOMContentLoaded"){
            fireDOMReady();
        }else if(e && e.type == "load"){
            fireDOMReady();
        }else if(document.readyState){
            if((/loaded|complete/).test(document.readyState)){
                fireDOMReady();
            }else if(!!document.documentElement.doScroll){
                try{
                    ready || document.documentElement.doScroll('left');
                }catch(e){
                    return;
                }
                fireDOMReady();
            }
        }
    };
 
    var fireDOMReady = function(){
        if(!ready){
            ready = true;
            fn.call(ctx || window);
            if(document.removeEventListener)
                document.removeEventListener("DOMContentLoaded", onChange, false);
            document.onreadystatechange = null;
            window.onload = null;
            clearInterval(timer);
            timer = null;
        }
    };
 
    if(document.addEventListener)
        document.addEventListener("DOMContentLoaded", onChange, false);
    document.onreadystatechange = onChange;
    timer = setInterval(onChange, 5);
    window.onload = onChange;
};
function toggleDisable(checkbox, id_fieldset) {
    var toggle = document.getElementById(id_fieldset);
    checkbox.checked ? toggle.disabled = false : toggle.disabled = true;
}

function toggleDisable(checkbox, id_fieldset, initial_state) {
    var toggle = document.getElementById(id_fieldset);
    checkbox.checked ? toggle.disabled = initial_state : toggle.disabled = !initial_state;
}
/*
function toggleDiv(id) {
    //document.getElementById(id).classList.toggle('noDisplay');
}*/


function cambioEstado(selOpts) {
    /*
     1:EnAdopcion
     2:Reservado
     3:Adoptado
     4:Difunto
     */
    document.getElementById('fsLugar').classList.add('noDisplay');
    document.getElementById('fsRadioLugar').classList.remove('noDisplay');
    document.getElementById("sEstado").className=selOpts[0].className;
    var valor= parseInt(selOpts[0].value);
    document.getElementById('fsRadioLugar').classList.remove('noDisplay');
    var radios = document.getElementsByClassName('lRadioLugar');
    var check=document.querySelector('input[name=inRadioLugar]:checked');
    if(check!=null)
        document.querySelector('input[name=inRadioLugar]:checked').checked=false;

    for(var i=0; i<radios.length; i++)
    {
        radios[i].classList.add('noDisplay');
    }

    switch(valor) {
        case 1:
            radios[0].classList.remove('noDisplay');
            radios[1].classList.remove('noDisplay');
            break;
        case 2:
            radios[0].classList.remove('noDisplay');
            radios[1].classList.remove('noDisplay');
            radios[2].classList.remove('noDisplay');
            break;

        case 3:
            var sel = document.getElementsByClassName("datosLugarSel");
            for (i = 0; i < sel.length; i++) {
                sel[i].classList.add('noDisplay');
                sel[i].classList.remove('datosLugarSel');
            }
            document.getElementById('fsLugar').classList.remove('noDisplay');
            document.getElementById('fsRadioLugar').classList.add('noDisplay');
            document.getElementById('fsAdoptante').classList.remove('noDisplay');
            break;

        case 4:
            document.getElementById('fsLugar').classList.add('noDisplay');
            document.getElementById('fsRadioLugar').classList.add('noDisplay');
            break;

        default:
            alert("Error en el valor seleccionado");
            break;
    }
}

function mostrarLugar(valor) {
    /*
     1:Albergue
     2:Acogida
     3:Preadoptiva
     */

    valor = parseInt(valor);
    var sel = document.getElementsByClassName("datosLugarSel");
    //document.getElementById('fsLugar').classList.remove('noDisplay');

    for (var i = 0; i < sel.length; i++) {
        sel[i].classList.add('noDisplay');
        sel[i].classList.remove('datosLugarSel');
    }

    var estado= document.getElementById("sEstado").value;
    var x;
    var doble=false;

    switch(valor) {
        case 1:
            x=document.getElementById('fsAlbergue');
            if(estado==2) {
                doble=true;
            }
            break;
        case 2:
            x=document.getElementById('fsAcogida');
            if(estado==2) {
                doble=true;
            }
            break;

        case 3:
            x=document.getElementById('fsAdoptante');
            break;


        default:

            break;
    }
    x.classList.remove('noDisplay');
    x.classList.add('datosLugarSel');

    if(doble) {
        var y=document.getElementById('fsAdoptante');
        y.classList.remove('noDisplay');
        y.classList.add('datosLugarSel');
    }
    document.getElementById('fsLugar').classList.remove('noDisplay');
}

function closeOverlay() {
    document.getElementById("overlay").style.display="none";
    document.getElementById("boxOverlay").style.display="none";
}

function openOverlay(id) {
    document.getElementById("overlay").style.display="block";
    document.getElementById("boxOverlay").style.display="block";
    var list = document.querySelectorAll(".innerDetails");
    if(id!=-1) {
        document.querySelector("#boxOverlay h3").innerHTML="Detalles";
        if(list!=null) {
            for(var i=0; i<list.length; i++) {
                list[i].style.display = "flex";
            }
        }
    }
    else {
        document.querySelector("#boxOverlay h3").innerHTML="Alta";
        for(var i=0; i<list.length; i++) {
            list[i].style.display = "none";
        }
    }
}

function openMultiOverlay(form, id) {

    var forms=document.querySelectorAll('#innerBoxOverlay > form');

    for(var i=0; i<forms.length; i++) {
        forms[i].style.display="none";
    }
    document.getElementById(form).style.display="table";

    openOverlay(id);

    document.querySelector("#boxOverlay h3").innerHTML+=" " + form;

}
//# sourceMappingURL=all.js.map
