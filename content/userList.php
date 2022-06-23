<?php
    $users = new User;
?>
<div class="container">
    <div class="row text-center">
        <div class="col-12">
            <p>
                <?php 
                    echo '<p>'.$users->getUserList().'</p>';
                ?>
            </p>
        </div>
    </div>
</div>