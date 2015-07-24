<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <meta name="author" content="Nicholas Mellen" />
        <title>Analytics - The George Washington University</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/sheet1.css">
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Kreon:400%7cOswald:400">
        <script>
            window.onpageshow = function() {
                
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = responseCheck;
                
                function responseCheck() {
                if (xmlhttp.readyState == 4 && xmlhttp.status ==200){
                    document.getElementById("userID").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("userID").innerHTML = "Request not Completed";
                }
            }
            xmlhttp.open("GET", "assets/functions.php", true);
            xmlhttp.send();   
            }
        </script>
    </head>
    <body>   
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="assets/function.js"></script>   
        <header class="navbar navbar-default navbar-fixed-top">
            <nav>
                <a class="navbar-brand" href="/gmail-analytic-toolkit/home.php">Gmail Analytic Toolkit</a>
                <h5 class="center navbar-default">Your User ID is <span id="userID"></span></h5>
            </nav>
        </header>
        <main role="main">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Analytical Reports</h4>
                            <div class="list-group">
                                <a href="#" class="list-group-item ">Basic Report</a>
                                <a href="#" class="list-group-item ">Customer Profile</a>
                                <a href="#" class="list-group-item ">Time-Based Report</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="container footer">
                <div class="row center">
                    <a href="/gmail-analytic-toolkit">Home</a>
                    |
                    <a href="faq">FAQ</a>
                    |
                    <a href="/gmail-analytic-toolkit/updates">Updates <span class="badge badge-important">07-22-2015</span></a>
                </div>
                <div class="row center">
                    <div id="footerlogo">
                        <img src="assets/logoFooterNew.png" alt="Logofooternew">
                    </div>
                    <p>
                        <a href="//acadtech.gwu.edu/">Academic Technologies</a>
                        of
                        <a href="//www.gwu.edu">The George Washington University</a>
                        
                    </p>
                    <p>
                        Phone: 202-994-7900 | Fax: 202-994-4747 | Email: <a href="#">acadtech@gwu.edu</a>
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>
