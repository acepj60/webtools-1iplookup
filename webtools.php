<head>
        <link rel="stylesheet" type="text/css" href="style.css" media=screen>
<center>
                <br>
                <br>
                <br>
                <br>
</center>
</head>
<body>
        <div class="column-center">
                <div style="text-align:center;">
                <p><h3>DNS, WHOIS, Ping and Email Check for any domain or IP address</h3></p>
                                <br/>
                        <hr>
                        <form name="input" method="get">
                                <div style="text-align: left; margin-left: 25%;">
                                        <input type="radio" name="group1" value="alltools"> All Webtools<br>
                                        <input type="radio" name="group1" value="dns" checked> DNS lookup<br>
                                        <input type="radio" name="group1" value="whois"> WHOIS<br>
                                        <input type="radio" name="group1" value="ping"> Ping<br>
                                        <!--<input type="radio" name="group1" value="email-test"> Email Test<br>-->
                                </div>
                                <br>
                                <input type="text" style="width: 300px; placeholder="Domain or IP" name="fieldin">
                                <input type="submit" value="Submit">
                        </form>
                </div>
<?php
        $radioselect = $_GET['group1'];

                switch($radioselect) {

                        case "alltools":

                                if ($hostin = $_GET['fieldin']) {

                                $dnsoutput = shell_exec("host -a '$hostin'");

                                echo "<pre><h1>DNS:</h1><br>

                                $dnsoutput<br></pre>";

                                $whoisoutput = shell_exec("whois '$hostin'");

"webtools.php" 114L, 2703C                                                                                               1,1           Top

