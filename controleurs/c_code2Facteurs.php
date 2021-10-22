<?php

/**
 * Gestion de la connexion
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */

include '../vues/v_code2facteurs.php';


 $code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);
        if ($pdo->getCodeVisiteur($_SESSION['idVisiteur']) !== $code) {
            ajouterErreur('Code de vérification incorrect');
            include 'vues/v_erreurs.php';
            include 'vues/v_code2facteurs.php';
        } else {
            connecterA2f($code);
            header('Location: index.php');
        }

