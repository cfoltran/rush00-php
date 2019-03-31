<?php
    function get_number_of_product() {
        session_start();
        if (isset($_SESSION['basket'])) {
            $basket = $_SESSION['basket'];
            $nb_prod = 0;
            foreach ($basket as $article)
                $nb_prod++;
            return ($nb_prod);
        }
    }
?>