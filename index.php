<?php
  require __DIR__ . '\interns\queryInterface.php';
  require __DIR__ . '\interns\user.php';

  $user = new User ($database = new Database);

  $AllUsers = $user->fetchUser();

  foreach ($AllUsers as $key => $value) { ?>

    <ul>
        <h5>Name: <?=$value['name'];?>

        <h5>Number: <?=$value['phone_no'];?></h5>

    </ul>

  <?php
  }
 ?>
