<nav class="nav-detail">
    
        <img src="../assets/devchallenges.svg" alt="logo">
        <section>
        <div>
            <img class="img-session" src="../assets/sinPerfil.jpg" alt="">
            <?php
            session_start();
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
            <section>
            <div>
                <a href=""><span class="material-symbols-outlined"> account_circle </span>My Profile</a>
            </div>
            <div>
                <a href="#"><span class="material-symbols-outlined"> group </span>Group Chat</a>
            </div>
            <div>
                <?php
                    echo "<a href='../handle_db/closesession.php'><span class='material-symbols-outlined'> exit_to_app</span>Logout</a>";
                ?>
            </div>
            </section>
        </div>
        </section>
    
    
</nav>