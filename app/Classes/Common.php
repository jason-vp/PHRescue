<?php
namespace App\Classes;

class Common
{

    public static function paginador() {
        $resultado = "";

        $resultado .= "<div id='paginador'>
        <p>Pag. 1 de 10 </p>
        <ul>
            <li>
                <a href=''> << </a>
            </li>
            <li>
                <a href=''> < </a>
            </li>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado .= "<li>
                <a href=''> " . $i . " </a>
            </li>";
        }
        $resultado .= "
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

    public static function headerPaginador() {
        return "<h3>Resultados</h3>
            <p> Mostrando del 1 al 12 de 120 resultados.</p>";
    }
}
?>