<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        
                    <style>
            html{
    font-family: 'Roboto', sans-serif;
    color:white;
    }
.header{
    background-color: lightcoral;
    text-align: center;
    color:white;
    padding: 20px;
    max-width: 100%;
    
}
footer{
    background-color: lightcoral;
    text-align: center;
    color:white;
    padding: 20px;
    max-width: 100%;
    
}
.header h2{
    text-shadow: 2px 4px 5px black;
}


.deserts{
    color:white;
}
.slike{
    max-width: 100%;
}

.container{
    width: 100%;
    margin: 0 auto;
    max-width: 100%;
}
.container-fluid{
    max-width: 100%;
}

.login{
    
    position: fixed;
    margin-top: 100px;
    margin-left: 20px;
    border-radius: 20px;
    background-color: lightseagreen;
}
form{
    margin: 20px;
    color: white;
}

.loginski{
    color: white;
    text-align: center;
    margin-top: 5px;
}

#button{
    color: white;
    background-color: salmon;
    border: 0;
}
img{
    margin-top: 10px;
    width: 50%;
    margin-bottom: 10px;
}


.border{

    box-shadow: 5px 5px 20px gray;
}

nav{
    width: 1000px;
    padding: 25px;
    margin: 0 auto;
    text-align: center;
    color:white;
    
}
.row{
    width: 60%;
    margin: 0 auto;
    text-align: center;
    padding-top: 20px;
    padding: 20px;

}

.krugic{
    background-color: lightcoral;
    border-radius: 5;
    padding: 5px;
    color: white;
    width: 25%;
    margin: 0 auto;
    text-transform: uppercase;
}

.krugic:hover{
    text-decoration: none;
    color: pink;
}

ul{
    list-style-type: none;
    margin: 0;
    padding:0;
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
}
li{
    float:left;
    width: 25%;
}
a {
    padding: 10px;
    color: lightcoral;
    background-color: white;
    display: block;
    text-align: center;
    text-decoration: none;
    
}
.razmak {
    padding-right: 5px;
    width: 33%;
}
.tekst1{
    text-align: center;
    background-color: #8BC34A;
    padding: 10px;
    color:black;
}


nav a:hover{
    color: lightblue;
    background-color: white;
    text-decoration: none;
    
}

.rozi{
    background-color: lightcoral;
    border: none;
    color: white;
    text-decoration: none;
    padding: 10px;
    border-radius: 10px;
}
            
            </style> 
        
    </head>
    <body>

    <?php

                                $username="";
                                $password="";

                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    
                                    $ans=$_POST;

                                    if (empty($ans["username"]))  {
                                            echo "Korisnicki račun nije unesen.";
                                        
                                            }
                                    else if (empty($ans["password"]))  {
                                            echo "Lozinka nije unesena.";
                                        
                                            }
                                    else {
                                        $username= $ans["username"];
                                        $password= $ans["password"];
                                    
                                        provjera($username,$password);
                                    }
                                }


                                function provjera($username, $password) {
                                    

                                    $xml=simplexml_load_file("users.xml");
                                    
                                    
                                    foreach ($xml->user as $usr) {
                                        $usrn = $usr->username;
                                        $usrp = $usr->password;
                                        $usrime=$usr->ime;
                                        $usrprezime=$usr->prezime;
                                        if($usrn==$username){
                                            if($usrp == $password){
                                                echo "Prijavljeni ste kao $usrime $usrprezime";
                                                return;
                                                }
                                            else{
                                                echo "Netocna lozinka";
                                                return;
                                                }
                                            }
                                        }
                                        
                                    echo "Korisnik ne postoji.";
                                    return;
                                }
?>


        <main>

            <div class="login">
                <h4 class="loginski">LOGIN</h4>
                <form action="" method="post">
                    <label for="fname">Korisnicko ime</label><br>
                    <input type="text"  name="username" ><br>
                    <label for="lname">Lozinka</label><br>
                    <input type="password"   name="password"><br><br>
                    <input type="submit" id="button" value="Login">
                  </form> 
            </div>

            <div class="header">
            <div class="container-fluid">
                
            <nav>
                <div class="container">
                <div class="col-sm-12">
                    <ul>
                    <li class="razmak"><a href="/Glavna.html">NASLOVNA</a></li>
                    
                    <li class="razmak"><a href="/Webshop.html">WEBSHOP</a></li>
                    <li class="razmak"><a href="/Kontakt.html">KONTAKT</a></li>
                    </ul>
                </div>

                </div>
            </nav>
        </br>
            
            <h2 class="deserts">Deserti</h2>
            </div>
            </div>
        
            <div class="containter">
                <div class="row">
                    
    
                    
                    
                    <div class="col-lg-12">
                            <p class="border">
                            <img src="img/Makroni.jpg" alt="slika" class="slike">
                            Otkrijte kako napraviti savrsene Makrone</p>
                        </div>
                        
                    
                </div>

                </div>


                <div class="containter">
                    <div class="row">
                        
        
                        
                        
                        <div class="col-lg-12">
                                <p class="border">
                                <img src="img/lavacake.jpg" alt="slika" class="slike">
                                Što je to lava torta i tko ju je izmislio?</p>
                            </div>
                            
                        
                    </div>
    
                    </div>





         





        <footer>
            <h5>XML Projekt 2022 - Karlo Krivohlavek</h5>
            
        </footer>
            
        </main>
    </body>
</html>