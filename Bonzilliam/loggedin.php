<?php

include('top.php');

$user = $_REQUEST['user'];

?> 
    <form class='width400' name='form' method='post' action='upload.php' enctype='multipart/form-data' >
    <?php echo "<p id='username' class='mainFont textCenter'><br>Welcome back $user</p>" ?>
        <input type="file" class="mainFont center" name="my_file"/><br>
        <input type="submit" id="uploadButtom" name="submit" value="Upload"/>
        <P class="mainFont center">You will be redirected to your image once its finished uploading, simply copy it's URL (address bar) to share it.</p>
        <P class="mainFont center">Note: your upload is anonymous and not linked to your account. If you lose the link, you won't be able to access your file anymore.</p>
        <p><br></p>
    </form>

<?php

include('bottom.php');

?>