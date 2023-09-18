<nav class="nav-detail">
    
        <img src="../assets/devchallenges.svg" alt="logo">
        <section>
        <div>
            <?php
                session_start();
                if(isset($_SESSION['img'])){
                    echo $_SESSION['img'];
                }else{
                   echo "<img class='img-session' src='../assets/sinPerfil.jpg' alt=''>";
                }
            ?>
            
            
            <?php
            
            if(isset($_SESSION['user'])){

                echo "<span>". $_SESSION['user'] . "</span>";
                echo "<span class='material-symbols-outlined'> arrow_drop_up </span>";
                echo "<span class='material-symbols-outlined'> arrow_drop_down </span>";
                
            }else{
                header("Location: /index.php");
            }
            ?>

        </div>
        <div class="logeo">
            <section class="cont-link-logout">
            <div >
                <a class="enl" href=""><span class="material-symbols-outlined"> account_circle </span>My Profile</a>
            </div>
            <div >
                <a class="enl" href="#"><span class="material-symbols-outlined"> group </span>Group Chat</a>
            </div>
            <hr class="hr-logout">
            <div >
                <?php
                    echo "<a class='enl enl-logout' href='../handle_db/closesession.php'><span class='material-symbols-outlined enl-logout'> exit_to_app</span>Logout</a>";
                ?>
            </div>
            </section>
        </div>
        </section>
    
    
</nav>