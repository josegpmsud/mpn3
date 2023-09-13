<?php require_once("./section/head.php") ?>
<body>
    <main class="main">
        <section class="cont-login">
            <div><img src="./assets/devchallenges-light.svg" alt="logo"></div>
            <p>Join thousands of learners from around the world</p>
            <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
            <div>
                <form action="./handle_db/create.php" method="post">
                    <div>
                        <div>
                            <span class="material-symbols-outlined"> mail </span>

                            <input type="email" placeholder="Email" name="email">
                            <?php
                                session_start();
                                if(isset($_SESSION['duplicado'])){
                                    echo $_SESSION['duplicado'];
                                    unset($_SESSION['duplicado']);
                                }
                            ?>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span class="material-symbols-outlined"> lock </span>

                            <input type="password" placeholder="Password" name="pass">
                        </div>
                    </div>
                    <div>
                        <button type="submit">Start coding now</button>
                    </div>
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
                </form>
            </div>

        </section>

    </main>

</body>
</html>