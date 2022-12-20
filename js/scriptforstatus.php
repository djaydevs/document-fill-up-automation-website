<script src="js/sweetalert.min.js"></script>
<!-- SESSION STATUS FUNCTION -->
<?php
if(isset($_SESSION['status']) &&  $_SESSION['status'] !='') {
    ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            icon: "success",
            button: "OK",
        });
    </script>
    <?php
    unset($_SESSION['status']);
} 
?>

