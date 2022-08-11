<?php
if (isset($_SESSION['danger'])){
?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <?php echo $_SESSION['danger']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php

unset($_SESSION['danger']);

}elseif (isset($_SESSION['success'])){
?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <?php echo $_SESSION['success']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
unset($_SESSION['success']);

}
?>