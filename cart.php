<?php require 'inc/head.php';
require "connected.php";
?>
<section class="cookies container-fluid">

            <h2>Panier</h2>
            <p>Résumé de vos achats</p>
            <table class="table">
                <thead>
                <tr>
                    <th>Article</th>
                    <th>Nombre</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    if (empty($_COOKIE["panier"])) : ?>
                <tr>
                    <td>Vous n'avez pas d'article!</td>
                </tr>

                    <?php else : ?>
                        <?php if (!empty($_COOKIE['panier']['spaceCookie'])) : ?>
                        <tr>
                            <td>Space Cookie</td>
                            <td><?= $_COOKIE['panier']['spaceCookie'] ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if (!empty($_COOKIE['panier']['cookieDaim'])) : ?>
                            <tr>
                                <td>Cookie Daim</td>
                                <td><?= $_COOKIE['panier']['cookieDaim'] ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if (!empty($_COOKIE['panier']['cookieChoco'])) : ?>
                            <tr>
                                <td>Cookie Choco</td>
                                <td><?= $_COOKIE['panier']['cookieChoco'] ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if (!empty($_COOKIE['panier']['cookieOreo'])) : ?>
                            <tr>
                                <td>Cookie Oreo</td>
                                <td><?= $_COOKIE['panier']['cookieOreo'] ?></td>
                            </tr>
                        <?php endif; ?>

                    <?php endif; ?>
                </tbody>
            </table>
</section>




<?php require 'inc/foot.php'; ?>
