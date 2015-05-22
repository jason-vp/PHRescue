<?php
function checkTipo($current_tab, &$perros, &$gatos, &$exoticos) {

    switch($current_tab) {
        case 'perros':
            $perros=true;
            break;
        case 'gatos':
            $gatos=true;
            break;
        case 'exoticos':
            $exoticos=true;
            break;
        default:
            http_response_code(404);
            require_once("./html/404.html");
            require_once("./html/footer.html");
            exit;

    }
}

function paginador() {
    $resultado="";

    $resultado.="<div id='paginador'>
        <p>Pag. 1 de 10 </p>
			<ul>
				<li>
					<a href=''> << </a>
				</li>
				<li>
				<a href=''> < </a>
				</li>";

    for($i=1; $i<=10; $i++){
        $resultado.="<li>
            <a href=''> ". $i ." </a>
        </li>";
    }
    $resultado.="
         <li>
            <a href=''> > </a>
        </li>
        <li>
            <a href=''> >> </a>
        </li>
        </ul>
        </div>";

    return $resultado;

}

function headerPaginador() {
    return "<h3>Resultados</h3>
	<p> Mostrando del 1 al 12 de 120 resultados.</p>";
}


?>
