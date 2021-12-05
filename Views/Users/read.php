<?php

    require_once('./Controllers/UsersController.php');

    $userController = new UserController();
?>
<h2>Membres de l'équipage</h2>
<section class="member-list">
    <?php
        foreach ($userController->read() as $user) {
    ?>
            <div class="member-item"><?= $user->get_firstname() ?></div>
        <?php
        }
    ?>
</section>
