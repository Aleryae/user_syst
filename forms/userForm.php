<?php
    if(isset($_POST['submit'])){
        $firstname = sanitize($_POST['firstname']);
        $lastname = sanitize($_POST['lastname']);
        $emailName = sanitize($_POST['emailName']);
        $emailDom = sanitize($_POST['emailDom']);
        $birthdate = sanitize($_POST['birthdate']);

        $email = $emailName.'@'.$emailDom;

        $user = new User();
        $user->insertUser($firstname, $lastname, $email, $birthdate);
    }
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 text-center">
            <h1>Test</h1>
            <form method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Firstname</span>
                    <input type="text" class="form-control" name="firstname" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lastname</span>
                    <input type="text" class="form-control" name="lastname" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <input type="text" class="form-control" name="emailName" required>
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" name="emailDom" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Birthdate</span>
                    <input type="date" class="form-control" name="birthdate" required>
                </div>
                <div class="input-group">
                    <input class="btn btn-success" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>