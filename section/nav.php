<nav class="nav-detail">
    
        <img src="../assets/devchallenges.svg" alt="logo">
        <section>
        <div>
            <img class="img-session" src="../assets/sinPerfil.jpg" alt="">
        </div>
        <div>
        <?php
        session_start();
        if(isset($_SESSION['user'])){
            
            

            echo "<label>Usuario: ". $_SESSION['user'] . "</label>";
            echo "<a href='../handle_db/closesession.php'>Close Session</a>";
        }else{
            header("Location: /index.php");
        }
        ?>
        </div>
        </section>
    
    
</nav>