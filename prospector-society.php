<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mead Well">

    <title>...</title>

    <link rel = "stylesheet" href = "/css/prospector-society.css" />

    

</head>

<body>

    <div id="outer">
        <div id = "container">
            <a href="/">
                <img src = "/img/key.png" height="105px" width="250px">
                <!-- <object type="image/svg+xml" data="key.svg">
                    Your browser does not support SVG
                </object> -->
            </a>
            <br><br>
            <input class="prospector-password" id="password" type="password" placeholder="password..." />

            <script>
                /* Cache the password input. */
                var pswd = document.getElementById("password");

                /* Call 'checkPswd' when the 'Enter' key is released. */
                pswd.onkeyup = function (e) {
                    if (e.which == 13) {
                        if(pswd.value=="notsecure"){
                            window.location.replace("https://phillymead.com/admin/cellcount.php");

                        } else {window.alert("Invalid password.");
                    }
                }
                };
            </script>
        </div>
    </div>

</body>

</html>