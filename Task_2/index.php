<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/logo.png" type="images/logo.jpeg">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <section class="ftco-section img bg-hero" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center" style="margin-top: -50px;">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">BlueRay</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="wrapper">
                        <div class="row no-gutters justify-content-between">
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5">
                                    <h3 class="mb-4">Contact us</h3>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span>Address:</span>Saeed Abu Jaber Street, Building No. 38
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span>Phone:</span> <a href="tel://1234567920">+962 7 9809 1253</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span>Email:</span> <a href="mailto:hr@bluerayws.com">hr@bluerayws.com</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span>Website</span> <a href="https://bluerayws.com/">bluerayws.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>
                                    <form action="./contact.php" method="POST" id="contactForm" name="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : ''; ?>">
                                                    <?php
                                                    if (isset($_SESSION['form_errors']) && isset($_SESSION['form_errors']['name_error'])) {
                                                        echo '<div class="error-message" style="color:red">' . $_SESSION['form_errors']['name_error'] . '</div>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : ''; ?>">
                                                    <?php
                                                    if (isset($_SESSION['form_errors']) && isset($_SESSION['form_errors']['email_error'])) {
                                                        echo '<div class="error-message" style="color:red">' . $_SESSION['form_errors']['email_error'] . '</div>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="<?php echo isset($_SESSION['form_data']['subject']) ? $_SESSION['form_data']['subject'] : ''; ?>">
                                                    <?php
                                                    if (isset($_SESSION['form_errors']) && isset($_SESSION['form_errors']['subject_error'])) {
                                                        echo '<div class="error-message" style="color:red">' . $_SESSION['form_errors']['subject_error'] . '</div>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                                                    <?php
                                                    if (isset($_SESSION['form_errors']) && isset($_SESSION['form_errors']['msg_error'])) {
                                                        echo '<div class="error-message" style="color:red">' . $_SESSION['form_errors']['msg_error'] . '</div>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" value="Send Message" name="submit_btn" class="btn btn-primary">Send Message</button>
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>