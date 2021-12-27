<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="kotak_login">
            <p class="tulisan_login"><b>Sign in</b></p>
            <form>
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Username atau email">
            
                <label>Password</label>
                <input type="password" name="password" class="form_login" placeholder="Password" value="rahasia" id="inputPassword">
                <br>

                <input type="checkbox" onclick="myFunction()">Tampilkan Password
                <br><br>

                <script>
                    function myFunction() {
                        var x = document.getElementById("inputPassword");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <button class="tombol_login"><a href="halaman/index.php">SIGN IN</a></button>
                <br><br>
                
                <center>
                    Belum punya aku? <a class="link" href="index.php">Log in</a>
                </center>
            </form> 
        </div>
    </body>
</html>