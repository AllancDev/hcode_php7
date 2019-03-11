<?php
    // SSL -> SECURITY SOCKET LAYER
    session_start();

    // Após de verificar login e senha e reinicie o ID da sessão 
    session_destroy();
    session_start();
    session_regenerate_id();
    echo session_id();

?>