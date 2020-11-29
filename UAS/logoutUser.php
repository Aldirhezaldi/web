<!DOCTYPE html>
<html lang="en">

<head>
    <title>Logout Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 
</head>

<body>
    <?php
    session_start();
    session_destroy();
    ?>
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Success Logout',
            showConfirmButton: false,
            timer: 2000
        })
    </script>
    <?php
    header("Refresh:1; url=homeUser.php");
    ?>
</body>