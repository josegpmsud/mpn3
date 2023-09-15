<?php require_once("../section/head.php") ?>
<body>
    <main class="main">
        <div>
        <section class="cont-login">
            <div class="cont-logo">
                <img src="../assets/devchallenges.svg" alt="logo">
            </div>
            
            <h1 class="text1 title-login">Login</h1>
            
            <p class="text1">
            <em class="mess">
            <?php
                session_start();
                if(isset($_SESSION['mess'])){
                    echo $_SESSION['mess'];
                    unset($_SESSION['mess']);
                }
            ?></em>

            </p>
            
            <form action="../handle_db/login.php" method="post">
                
            <div class="input">
                <span class="material-symbols-outlined"> mail </span>

                <input class="input-dig" type="email" placeholder="Email" name="email" autofocus require>
                    
            </div>                    
                    
            <div class="input">
                <span class="material-symbols-outlined"> lock </span>

                <input class="input-dig" type="password" placeholder="Password" name="pass" require>
            </div>
                    
            <div class="input">
                <button class="button" type="submit">Login</button>
            </div>
            </form>
               


            <div class="cont-link">
                <p class="text2">or continue with these social profile</p>
                <section class="link">
                    <div class="lb"><img src="../assets/Google.svg" alt="Google"></div>
                    <div class="lb"><img src="../assets/Facebook.svg" alt="Facebook"></div>
                    <div class="lb"><img src="../assets/Twitter.svg" alt="Twitter"></div>
                    <div class="lb"><img src="../assets/Gihub.svg" alt="Gihub"></div>
                </section>
                <p class="text2">Don’t have an account yet? <a href="../index.php">Register</a></p>
            </div>
            
            

        </section>
        <?php
                require_once("../section/footer.php");
        ?>  
     </div>  
    </main>
                 
</body>
</html>


