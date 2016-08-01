<?php
use App\Classes\Common;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/acogidas/{id?}/', function ($id = null) {

        $titulo = "PHRescue - Acogidas";

        $usuario = "Invitado";

        $current_tab = 'adopciones';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $acogida = $id;

        return view('acogidas', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'acogida'));
    });

    Route::get('/adoptantes/{type?}/{id?}', function ($type = null, $id = null) {

        $titulo = "PHRescue - Adoptantes";

        $usuario = "Invitado";

        $current_tab = 'adopciones';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $adoptante = $id;

        return view('adoptantes', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'adoptante', 'type'));
    });

    Route::get('/alta/{type?}', function ($type = null) {

        $titulo = "PHRescue - Alta ";

        $usuario = "Invitado";
        $current_tab = "";

        if($type) {
            $current_tab = $type;
            $titulo.=$current_tab;
        }

        $perros = false;
        $gatos = false;
        $exoticos = false;

        Common::checkTipo($current_tab, $perros, $gatos, $exoticos);

        return view('altaRapida', compact('titulo', 'usuario', 'current_tab', 'perros', 'gatos', 'exoticos'));
    });

    Route::get('/clinicas/{id?}', function ($id = null) {

        $titulo = "PHRescue - Clínicas";

        $usuario = "Invitado";

        $current_tab = 'veterinaria';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $clinica = $id;

        return view('clinicas', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'clinica'));
    });

    Route::get('/consulta/{type?}', function ($type = null) {

        $titulo = "PHRescue - Consulta ";

        $usuario = "Invitado";
        $current_tab = "";

        if($type) {
            $current_tab = $type;
            $titulo.=$current_tab;
        }

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();

        $perros = false;
        $gatos = false;
        $exoticos = false;

        Common::checkTipo($current_tab, $perros, $gatos, $exoticos);

        return view('consulta', compact('titulo', 'usuario', 'current_tab', 'headerPaginador', 'paginador', 'perros', 'gatos', 'exoticos'));
    });

    Route::get('/correos', function () {

        $titulo = "PHRescue - Clínicas";

        $usuario = "Invitado";

        $current_tab = 'voluntariado';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();

        return view('correos', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador'));
    });

    Route::get('/ficha/{type}/{id}', function ($type, $id) {

        $animal = "Emiliano";
        $fotoAnimal = "/images/emiliano.jpg";
        $titulo= "PHRescue - Ficha " . $animal;

        $usuario = "Invitado";
        $current_tab = "";

        if($type) {
            $current_tab = $type;
            $titulo.=$current_tab;
        }

        $perros = false;
        $gatos = false;
        $exoticos = false;

        Common::checkTipo($current_tab, $perros, $gatos, $exoticos);

        return view('ficha', compact('titulo', 'usuario', 'current_tab', 'animal', 'fotoAnimal', 'perros', 'gatos', 'exoticos'));
    });

    Route::get('/medicacion/{id?}', function ($id = null) {

        $titulo = "PHRescue - Medicación";

        $usuario = "Invitado";

        $current_tab = 'veterinaria';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $medicacion = $id;

        return view('medicacion', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'medicacion'));
    });

    Route::get('/nonGratae/{type?}/{id?}', function ($type = null, $id = null) {

        $titulo = "PHRescue - Persona non Grata";

        $usuario = "Invitado";

        $current_tab = 'adopciones';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $nonGrata = $id;

        return view('nonGratae', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'nonGrata', 'type'));
    });

    Route::get('/panel', 'HomeController@index');

    Route::get('/', 'HomeController@index');

    Route::get('/paseadores/{id?}', function ($id = null) {

        $titulo = "PHRescue - Paseadores";

        $usuario = "Invitado";

        $current_tab = 'voluntariado';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $paseador = $id;

        return view('paseadores', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'paseador'));
    });

    Route::get('/seguimiento/{id?}/{gestion?}', function ($id = null, $gestion = null) {

        $titulo = "PHRescue - Seguimiento ";

        $usuario = "Invitado";

        $current_tab = 'adopciones';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $animal = $id;
        $gestor = $gestion;

        return view('seguimiento', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'animal', 'gestor'));
    });

    Route::get('/seguimientos/{gestion?}', function ($gestion = null) {

        $titulo = "PHRescue - Gestión Seguimientos";

        $usuario = "Invitado";

        $current_tab = 'adopciones';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $gestor = $gestion;

        return view('seguimientos', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'gestor'));
    });

    Route::get('/usuarios/{id?}', function ($id = null) {

        $titulo = "PHRescue - Usuarios";

        $usuario = "Invitado";

        $current_tab = 'voluntariado';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $usuario = $id;

        return view('usuarios', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'usuario'));
    });


    Route::get('/veterinarios/{id?}', function ($id = null) {

        $titulo = "PHRescue - Veterinarios";

        $usuario = "Invitado";

        $current_tab = 'veterinaria';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $veterinario = $id;

        return view('veterinarios', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'veterinario'));
    });

    Route::get('/voluntarios/{type?}/{id?}', function ($type = null, $id = null) {

        $titulo = "PHRescue - Voluntarios";

        $usuario = "Invitado";

        $current_tab = 'voluntariado';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $voluntario = $id;

        return view('voluntarios', compact('titulo', 'usuario', 'current_tab', 'paginador', 'headerPaginador', 'voluntario', 'type'));
    });
});
