<?php
    if(isset($_SESSION['stat'])){
        $stat = $_SESSION['stat'];
      } else {
        $stat = "";
      }
    if($stat!="su"){
?>
        <!DOCTYPE html>
<html lang="en">
  <?php
    echo "<form action='index.html' method='post' id='form'>
      <div>
      <input type='hidden' id='relogin' name='relogin' value='true'>
        </form>
      </div>";
      function errPageAuth(){
        echo 
        '<head>
      <link rel="stylesheet" href="style.css">
      <title>Compute companion - Error</title>
      <link rel="icon" type="image/png" href="favicon.png">
    </head>
    <body>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script type="module" src="script.js"></script>
        <section>
            <div class="form-box">
                <div class="form-value">
                        <h2>Incorrect Username or Password</h2>
                        <div class="register">
                            <form action="index.html" method="post">
                              <p><button type="submit" class="friend">Logout</button></p>
                              <input type="hidden" id="logout" name="logout" value="true">
                            </form>
                        </div>
                </div>
            </div>
        </section>
    </body>';
    }
?>
  <script type="text/javascript">
    function formAutoSubmit () {
      var frm = document.getElementById("form");
      frm.submit();
    }

    window.onload = formAutoSubmit;
  </script>
</form>
</html>
        <?php
     

    } else {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <title>Cavemen Network - Channels</title>
<?php
}
?>