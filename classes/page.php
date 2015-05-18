<?php
function checkTipo($current_tab, &$perros, &$gatos, &$otros) {

    switch($current_tab) {
        case 'perros':
            $perros=true;
            break;
        case 'gatos':
            $gatos=true;
            break;
        case 'otros':
            $otros=true;
            break;
        default:
            http_response_code(404);
            require_once("./html/404.html");
            require_once("./html/footer.html");
            exit;

    }
}


?>
