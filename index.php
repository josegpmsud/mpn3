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
                        <p>Adready a member?  <a href="#">Login</a></p>
                    </div>
                </form>
            </div>

        </section>

    </main>



    <h2>perfiles registrados</h2>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Photo</td>
                <td>Name</td>
                <td>Bio</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

                $stmnt = $mysqli->query("SELECT * FROM profiles");

                while($row = $stmnt->fetch_assoc()){
                    $id = $row["id"];
                    $photo = $row["photo"];
                    $nam = $row["nam"];
                    $bio = $row["bio"];
                    $phone = $row["phone"];
                    $email  = $row["email"];
                    $pass = $row["pass"];



                    echo "
                    <tr>
                        <td>$id</td>
                        <td>$photo</td>
                        <td>$nam</td>
                        <td>$bio</td>
                        <td>$phone</td>
                        <td>$email</td>
                        <td>$pass</td>
                        <td><a href='/views/edit.php?id=$id' >Editar</a><a href='/views/edit.php' >Eliminar</a></td>
                    </tr>

                    ";
                }

            ?>
        </tbody>


    </table>
</body>
</html>