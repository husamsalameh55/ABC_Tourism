<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Tourism</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="root">
        <header>
            <button class="ol"></button>
            <div class="r ac jsb pi25">
                <div class="logo_div">
                    <a href="/" class="r cg15 ac jc">
                        <img src="/img/logo.svg" alt="ABC Tourism">
                       <b class="jc">ABC Tourism</b>
                    </a>
                </div>
                <div class="jc">
                    <button class="none catmenu pr" onclick="omenu()"><i></i></button>
                    <nav class="r jc ac mnav">
                        <a href="/login">Login</a>
                        <a href="/signup">SignUp</a>
                        <a href="/about">About</a>
                        <a href="/branches">Branches</a>
                        <a href="/contact_us">Contact us</a>
                    </nav>
                </div>
                <div class="jc">
                </div>
            </div>
        </header>
        <div>
            <main>
                <?php
                    if(isset($_GET['p'])){
                        if($_GET['p'] == 'login')
                            require($_SERVER['DOCUMENT_ROOT'] . '/includes/login.inc.php');
                        elseif($_GET['p'] == 'signup')
                            require($_SERVER['DOCUMENT_ROOT'] . '/includes/signup.inc.php');
                        elseif($_GET['p'] == 'about')
                            require($_SERVER['DOCUMENT_ROOT'] . '/includes/about.inc.php');
                        elseif($_GET['p'] == 'contact_us')
                            require($_SERVER['DOCUMENT_ROOT'] . '/includes/contact_us.inc.php');
                        elseif($_GET['p'] == 'branches')
                            require($_SERVER['DOCUMENT_ROOT'] . '/includes/branches.inc.php');
                    }else{
                        require($_SERVER['DOCUMENT_ROOT'] . '/includes/guesthome.inc.php'); 
                    }
                ?>
            </main>
            <footer></footer>
        </div>
    </div>
</body>
</html>