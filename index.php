<?php require_once("./section/head.php") ?>
<body>
    <main class="main">
        <section class="cont-login">
            <div class="cont-logo">
                <img src="./assets/devchallenges.svg" alt="logo">
            </div>
            
            <h1>Join thousands of learners from around the world</h1>
            
            <p>Master web development by making real-life projects. There are multiple paths for you to choose<br> 
            <em>
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

                <input class="input-dig" type="email" placeholder="Email" name="email">
                    
            </div>                    
                    
            <div class="input">
                <span class="material-symbols-outlined"> lock </span>

                <input class="input-dig" type="password" placeholder="Password" name="pass">
            </div>
                    
            <div class="input">
                <button class="button" type="submit">Start coding now</button>
            </div>
            </form>
               


            <div>
                <p>or continue with these social profile</p>
                <section class="link">
                    <div><img src="./assets/Google.svg" alt="Google"></div>
                    <div><img src="./assets/Facebook.svg" alt="Facebook"></div>
                    <div><img src="./assets/Twitter.svg" alt="Twitter"></div>
                    <div><img src="./assets/Gihub.svg" alt="Gihub"></div>
                </section>
                <p>Adready a member?  <a href="./views/login.php">Login</a></p>
            </div>
            

        </section>

    </main>

</body>
</html>