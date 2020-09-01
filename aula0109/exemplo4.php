<?php
    require_once("config.php");
    session_regenerate_id();
    echo session_id() . "<br />";
    switch(session_status()){
        case PHP_SESSION_DISABLED:
            echo "As sessões estao estao desabilitadas";
            break;
        case PHP_SESSION_NONE:
            echo "As sessoes estao habilitadas, mas nao tem nenhuma ";
            break;
        case PHP_SESSION_ACTIVE:
            echo "Sessoes habilitadas e existe no momento uma ativa";
    }