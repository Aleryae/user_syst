<?php
    function sanitize($data) {
        $data = htmlspecialchars($data, ENT_QUOTES);
        $data = trim($data);
        return $data;
    }
?>