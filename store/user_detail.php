<?php
if (isset($_SESSION["user"])) {
    $r = Database::s("SELECT * FROM `address` WHERE `user_user_id`='" . $_SESSION['user']['user_id'] . "' ");
    $nr = $r->num_rows;
    $enc = new Encript();
?>
    <div class="pop" id="pop-4" <?php if ($nr == 0) {
                                    echo 'style="display:flex;"';
                                } ?>>
        <div class="pop-body">
            <div class="pop-top">
                <div class="clo" onclick="document.getElementById('pop-4').style.display='none';document.getElementById('bod').style.overflowY='auto';"></div>
            </div>
            <!-- <div class="pop-bot"> -->
            <h1>Address</h1>

            <p>Email : <?php echo $enc->decrypt($_SESSION["user"]["user_email"]) ?> </p>
            <textarea id="ad" style="width:100%;height: 200px;"></textarea>
            <button class="s" style="border-radius: 5px;" id="addimg" onclick="add('<?php echo $_SESSION['user']['user_id'] ?>')">Add</button>

            <!-- </div> -->


        </div>

    </div>
<?php
}
?>