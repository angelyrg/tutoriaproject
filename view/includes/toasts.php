

<?php
if (isset($_SESSION['success'])){
?>
    <div class="bs-toast toast toast-placement-ex m-2 m-4 fade bg-success bottom-0 end-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
        <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">¡Correcto!</div>

            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body"><?php echo $_SESSION['success']; ?></div>
    </div>
<?php

unset($_SESSION['success']);

}elseif (isset($_SESSION['danger'])){

?>
    <div class="bs-toast toast toast-placement-ex m-2 m-4 fade bg-danger bottom-0 end-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
        <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">¡Error!</div>

            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body"><?php echo $_SESSION['danger']; ?></div>
    </div>

<?php 

unset($_SESSION['danger']);

}
?>








