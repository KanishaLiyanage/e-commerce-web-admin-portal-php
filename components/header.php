<?php

if(!isset($_SESSION['username'])){
    echo $_SESSION['username'];

    ?>

        <link rel="stylesheet" href="css/header.css">
        <header class="header">
            <div class="home"><a href="dashboard.php">Home</a> </div>
            <div class="headertopic">Admin Portal</div>
            <div class="logout">Welcome <?php echo $_SESSION['username']; ?>! <a href="logout.php">logout</a></div>
        </header>

    <?php

}else{
    echo "Session not passed!";
}

?>


