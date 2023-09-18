<nav class="nav-detail">
    
        <img src="../assets/devchallenges.svg" alt="logo">
        
    <script>
         function show() {
        let x = document.getElementById("nav-option");
        let y = document.getElementById("more");
        let z = document.getElementById("mere");
        if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "inline";
        z.style.display = "none";
        } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "inline";
        }
        }

    </script>
       

               
        <section>
        <div onclick="show()" class="btn-menu">
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

                 if(isset($_SESSION['nam'])){echo "<span>". substr($_SESSION["nam"], 0, 15) . "</span>"; } else {echo "<span>". $_SESSION['user'] . "</span>";;}

                
                echo "<span id='more' class='material-symbols-outlined'> arrow_drop_up </span>";
                echo "<span id='mere' class='material-symbols-outlined'> arrow_drop_down </span>";
                
            }else{
                header("Location: /index.php");
            }
            ?>

        </div>
        <div class="logeo" id="nav-option">
            <section class="cont-link-logout">
            <div >
                
                <a class="enl" href="../views/show.php?email=<?php echo $_SESSION['user'];?>"><span class="material-symbols-outlined"> account_circle </span>My Profile</a>
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