<?php session_start();
              foreach($_SESSION['panier'] as $i => $value) {
                unset($_SESSION['panier'][$i]);
                }
                header("Location: http://localhost/unsold/index/index.php");
    exit;
                ?>