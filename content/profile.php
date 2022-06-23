<?php
    $users = new User;
    $displayUsers = $users->getUserList();
?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <p>
                <?php 
                    echo $displayUsers;
                ?>
                </p>
        </div>
    </div>
</div>