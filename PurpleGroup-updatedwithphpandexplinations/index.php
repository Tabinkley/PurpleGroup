<?php
/* This is essentially the home page. Currently it only holds a message telling the user "You are logged in!" if there
user session started and saying "You are logged out!" if there is no user session started.
*/

  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">

          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged out!</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged in!</p>';
          }
          ?>
        </section>
      </div>
    </main>

<?php

  require "footer.php";
?>
