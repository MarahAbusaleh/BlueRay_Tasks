<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You For Contact Us</title>
    <!-- PopUp -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="assets/images/logo/logo3.png" type="image/x-icon">
    <style>
        .custom-confirm-button-class {
            background-color: #1089ff !important;
            color: white !important;
        }
    </style>
</head>

<body>

</body>

</html>
<script>
    Swal.fire({
        title: "Thank You For Contact Us!",
        text: 'Your Message Sent Successfully, Our Team will contact to you as soon as possible',
        confirmButtonText: "OK",
        customClass: {
            confirmButton: 'custom-confirm-button-class'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "./index.php";
        }
    });

    window.onclick = () => {
        window.location.href = "./index.php";
    }
</script>