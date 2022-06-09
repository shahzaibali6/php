<?php require_once('header.php'); ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center" id="left">
                <img src="images/logo.png" alt="">
            </div>
            <div class="col-md-6 p-5" id="right">
                <h2>SIGN UP</h2>
                <form class="mt-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="profile-type" placeholder="PROFILE TYPE" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="first-name" placeholder="FIRST NAME" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="last-name" placeholder="LAST NAME" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="user-name" placeholder="USER NAME" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="EMAIL" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="confirm-email" placeholder="CONFIRM EMAIL" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="PASSWORD" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="confirm-password" placeholder="CONFIRM PASSWORD" required>
                    </div>
                    <button type="submit" class="btn mt-5 w-100">SIGN UP</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php require_once('footer.php'); ?>