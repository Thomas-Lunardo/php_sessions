<?php
require 'inc/head.php';
if(!isset($_SESSION)){
    session_start();
}
?>
<section class="cookies container-fluid">
    <div class="row">

<?php
echo 'Bonjour ' . $_SESSION['gateau'];
?>
  </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
