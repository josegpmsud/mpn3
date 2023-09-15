<?php require_once("./section/head.php") ?>
<body>
    <main class="main">
        <div>
        <section class="cont-login">
            <div class="cont-logo">
                <img src="./assets/devchallenges.svg" alt="logo">
            </div>
            
            <h1 class="text1">Join thousands of learners from around the world</h1>
            
            <p class="text1">Master web development by making real-life projects. There are multiple paths for you to choose<br> 
            <em class="mess">
            <?php
                session_start();
                if(isset($_SESSION['duplicado'])){
                    echo $_SESSION['duplicado'];
                    unset($_SESSION['duplicado']);
                }
            ?></em>

            </p>
            
            <form action="./handle_db/create.php" method="post">
                
            <div class="input">
                <span class="material-symbols-outlined"> mail </span>

                <input class="input-dig" type="email" placeholder="Email" name="email" autofocus value="">
                    
            </div>                    
                    
            <div class="input">
                <span class="material-symbols-outlined"> lock </span>

                <input class="input-dig" type="password" placeholder="Password" name="pass">
            </div>
                    
            <div class="input">
                <button class="button" type="submit">Start coding now</button>
            </div>
            </form>
               


            <div class="cont-link">
                <p class="text2">or continue with these social profile</p>
                <section class="link">
                    <div class="lb"><img src="./assets/Google.svg" alt="Google"></div>
                    <div class="lb"><img src="./assets/Facebook.svg" alt="Facebook"></div>
                    <div class="lb"><img src="./assets/Twitter.svg" alt="Twitter"></div>
                    <div class="lb"><img src="./assets/Gihub.svg" alt="Gihub"></div>
                </section>
                <p class="text2">Ad ready a member?  <a href="./views/login.php">Login</a></p>
            </div>
            
            

        </section>
        <?php
                require_once("./section/footer.php");
        ?>  
     </div>  
    </main>
                 
</body>
</html>