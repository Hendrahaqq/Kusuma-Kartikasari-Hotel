<?php require_once 'session.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kusuma Kartika Sari Hotel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-1.6.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Adamina_400.font.js"></script>
    <script type="text/javascript" src="js/jquery.jqtransform.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/kwicks-1.5.1.pack.js"></script>
    <script type="text/javascript" src="js/atooltip.jquery.js"></script>
    <!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
<![endif]-->
</head>

<body id="page1">
    <div class="bg1">
        <div class="bg2">
            <div class="main">
                <!-- header -->
                <header>
                    <h1><a href="index.php" id="logo">Kusuma Kartikasari Hotel</a></h1>
                    <?php include 'login_out.php'; ?>
                </header>
                <div class="box">
                    <nav>
                        <ul id="menu">
                            <li><a href="index.php">About Us</a></li>
                            <li><a href="services.php">Facilities</a></li>
                            <li><a href="rooms.php">Rooms</a></li>
                            <li><a href="package.php">Package</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- header end -->
                    <!-- content -->
                    <article id="content">
                        <div class="box1">
                          <?php
                          // require_once 'order_query1.php';
                            // echo $_SESSION['idOrderan'];

                          ?>
                            <div class="formorder">
                                                          <h2>2. Identitas Tamu :</h2>

                                <form id="ContactForm" action="order_query2.php" method="POST">
                                    <div>
                                        <div class="wrapper">
                                          <?php echo $_GET['id'];?>
                                            <input type="hidden" name="idiOrder" value="<?php echo $_GET['id'];?>">
                                            <input type="text" class="input" name="nama"> Nama tamu : </div>
                                        <div class="wrapper">
                                            <input type="text" class="input" name="no_id"> No. KTP/Passport : </div>
                                        <div class="wrapper">
                                            <input type="text" class="input" name="address"> Alamat : </div>
                                        <div class="wrapper">
                                            Negara : <select id="pilihan" name="country">
                                            <option disabled="disabled" value="">Negara...</option>
                              							<option>Afghanistan</option>
                              							<option>Albania</option>
                              							<option>Algeria</option>
                              							<option>American Samoa</option>
                              							<option>Andorra</option>
                              							<option>Angola</option>
                              							<option>Anguilla</option>
                              							<option>Antigua &amp; Barbuda</option>
                              							<option>Argentina</option>
                              							<option>Armenia</option>
                              							<option>Aruba</option>
                              							<option>Australia</option>
                              							<option>Austria</option>
                              							<option>Azerbaijan</option>
                              							<option>Bahamas</option>
                              							<option>Bahrain</option>
                              							<option>Bangladesh</option>
                              							<option>Barbados</option>
                              							<option>Belarus</option>
                              							<option>Belgium</option>
                              							<option>Belize</option>
                              							<option>Benin</option>
                              							<option>Bermuda</option>
                              							<option>Bhutan</option>
                              							<option>Bolivia</option>
                              							<option>Bonaire</option>
                              							<option>Bosnia &amp; Herzegovina</option>
                              							<option>Botswana</option>
                              							<option>Brazil</option>
                              							<option>British Indian Ocean Ter</option>
                              							<option>Brunei</option>
                              							<option>Bulgaria</option>
                              							<option>Burkina Faso</option>
                              							<option>Burundi</option>
                              							<option>Cambodia</option>
                              							<option>Cameroon</option>
                              							<option>Canada</option>
                              							<option>Canary Islands</option>
                              							<option>Cape Verde</option>
                              							<option>Cayman Islands</option>
                              							<option>Central African Republic</option>
                              							<option>Chad</option>
                              							<option>Channel Islands</option>
                              							<option>Chile</option>
                              							<option>China</option>
                              							<option>Christmas Island</option>
                              							<option>Cocos Island</option>
                              							<option>Colombia</option>
                              							<option>Comoros</option>
                              							<option>Congo</option>
                              							<option>Cook Islands</option>
                              							<option>Costa Rica</option>
                              							<option>Cote D'Ivoire</option>
                              							<option>Croatia</option>
                              							<option>Cuba</option>
                              							<option>Curacao</option>
                              							<option>Cyprus</option>
                              							<option>Czech Republic</option>
                              							<option>Denmark</option>
                              							<option>Djibouti</option>
                              							<option>Dominica</option>
                              							<option>Dominican Republic</option>
                              							<option>East Timor</option>
                              							<option>Ecuador</option>
                              							<option>Egypt</option>
                              							<option>El Salvador</option>
                              							<option>Equatorial Guinea</option>
                              							<option>Eritrea</option>
                              							<option>Estonia</option>
                              							<option>Ethiopia</option>
                              							<option>Falkland Islands</option>
                              							<option>Faroe Islands</option>
                              							<option>Fiji</option>
                              							<option>Finland</option>
                              							<option>France</option>
                              							<option>French Guiana</option>
                              							<option>French Polynesia</option>
                              							<option>French Southern Ter</option>
                              							<option>Gabon</option>
                              							<option>Gambia</option>
                              							<option>Georgia</option>
                              							<option>Germany</option>
                              							<option>Ghana</option>
                              							<option>Gibraltar</option>
                              							<option>Great Britain</option>
                              							<option>Greece</option>
                              							<option>Greenland</option>
                              							<option>Grenada</option>
                              							<option>Guadeloupe</option>
                              							<option>Guam</option>
                              							<option>Guatemala</option>
                              							<option>Guinea</option>
                              							<option>Guyana</option>
                              							<option>Haiti</option>
                              							<option>Hawaii</option>
                              							<option>Honduras</option>
                              							<option>Hong Kong</option>
                              							<option>Hungary</option>
                              							<option>Iceland</option>
                              							<option>India</option>
                              							<option selected="selected" value="Indonesia">Indonesia</option>
                              							<option>Iran</option>
                              							<option>Iraq</option>
                              							<option>Ireland</option>
                              							<option>Isle of Man</option>
                              							<option>Israel</option>
                              							<option>Italy</option>
                              							<option>Jamaica</option>
                              							<option>Japan</option>
                              							<option>Jordan</option>
                              							<option>Kazakhstan</option>
                              							<option>Kenya</option>
                              							<option>Kiribati</option>
                              							<option>Korea North</option>
                              							<option>Korea South</option>
                              							<option>Kuwait</option>
                              							<option>Kyrgyzstan</option>
                              							<option>Laos</option>
                              							<option>Latvia</option>
                              							<option>Lebanon</option>
                              							<option>Lesotho</option>
                              							<option>Liberia</option>
                              							<option>Libya</option>
                              							<option>Liechtenstein</option>
                              							<option>Lithuania</option>
                              							<option>Luxembourg</option>
                              							<option>Macau</option>
                              							<option>Macedonia</option>
                              							<option>Madagascar</option>
                              							<option>Malaysia</option>
                              							<option>Malawi</option>
                              							<option>Maldives</option>
                              							<option>Mali</option>
                              							<option>Malta</option>
                              							<option>Marshall Islands</option>
                              							<option>Martinique</option>
                              							<option>Mauritania</option>
                              							<option>Mauritius</option>
                              							<option>Mayotte</option>
                              							<option>Mexico</option>
                              							<option>Midway Islands</option>
                              							<option>Moldova</option>
                              							<option>Monaco</option>
                              							<option>Mongolia</option>
                              							<option>Montserrat</option>
                              							<option>Morocco</option>
                              							<option>Mozambique</option>
                              							<option>Myanmar</option>
                              							<option>Nambia</option>
                              							<option>Nauru</option>
                              							<option>Nepal</option>
                              							<option>Netherland Antilles</option>
                              							<option>Netherlands (Holland, Europe)</option>
                              							<option>Nevis</option>
                              							<option>New Caledonia</option>
                              							<option>New Zealand</option>
                              							<option>Nicaragua</option>
                              							<option>Niger</option>
                              							<option>Nigeria</option>
                              							<option>Niue</option>
                              							<option>Norfolk Island</option>
                              							<option>Norway</option>
                              							<option>Oman</option>
                              							<option>Pakistan</option>
                              							<option>Palau Island</option>
                              							<option>Palestine</option>
                              							<option>Panama</option>
                              							<option>Papua New Guinea</option>
                              							<option>Paraguay</option>
                              							<option>Peru</option>
                              							<option>Philippines</option>
                              							<option>Pitcairn Island</option>
                              							<option>Poland</option>
                              							<option>Portugal</option>
                              							<option>Puerto Rico</option>
                              							<option>Qatar</option>
                              							<option>Republic of Montenegro</option>
                              							<option>Republic of Serbia</option>
                              							<option>Reunion</option>
                              							<option>Romania</option>
                              							<option>Russia</option>
                              							<option>Rwanda</option>
                              							<option>St Barthelemy</option>
                              							<option>St Eustatius</option>
                              							<option>St Helena</option>
                              							<option>St Kitts-Nevis</option>
                              							<option>St Lucia</option>
                              							<option>St Maarten</option>
                              							<option>St Pierre &amp; Miquelon</option>
                              							<option>St Vincent &amp; Grenadines</option>
                              							<option>Saipan</option>
                              							<option>Samoa</option>
                              							<option>Samoa American</option>
                              							<option>San Marino</option>
                              							<option>Sao Tome &amp; Principe</option>
                              							<option>Saudi Arabia</option>
                              							<option>Senegal</option>
                              							<option>Seychelles</option>
                              							<option>Sierra Leone</option>
                              							<option>Singapore</option>
                              							<option>Slovakia</option>
                              							<option>Slovenia</option>
                              							<option>Solomon Islands</option>
                              							<option>Somalia</option>
                              							<option>South Africa</option>
                              							<option>Spain</option>
                              							<option>Sri Lanka</option>
                              							<option>Sudan</option>
                              							<option>Suriname</option>
                              							<option>Swaziland</option>
                              							<option>Sweden</option>
                              							<option>Switzerland</option>
                              							<option>Syria</option>
                              							<option>Tahiti</option>
                              							<option>Taiwan</option>
                              							<option>Tajikistan</option>
                              							<option>Tanzania</option>
                              							<option>Thailand</option>
                              							<option>Togo</option>
                              							<option>Tokelau</option>
                              							<option>Tonga</option>
                              							<option>Trinidad &amp; Tobago</option>
                              							<option>Tunisia</option>
                              							<option>Turkey</option>
                              							<option>Turkmenistan</option>
                              							<option>Turks &amp; Caicos Is</option>
                              							<option>Tuvalu</option>
                              							<option>Uganda</option>
                              							<option>Ukraine</option>
                              							<option>United Arab Emirates</option>
                              							<option>United Kingdom</option>
                              							<option>United States of America</option>
                              							<option>Uruguay</option>
                              							<option>Uzbekistan</option>
                              							<option>Vanuatu</option>
                              							<option>Vatican City State</option>
                              							<option>Venezuela</option>
                              							<option>Vietnam</option>
                              							<option>Virgin Islands (Brit)</option>
                              							<option>Virgin Islands (USA)</option>
                              							<option>Wake Island</option>
                              							<option>Wallis &amp; Futana Is</option>
                              							<option>Yemen</option>
                              							<option>Zaire</option>
                              							<option>Zambia</option>
                              							<option>Zimbabwe</option>
                              							</select>
                                       </div>
                                        <div class="wrapper">
                                            <input type="text" class="input" name="city"> Kota : </div>
                                        <div class="wrapper">
                                            <input type="text" class="input" name="province"> Provinsi : </div>
                                        <div class="wrapper">
                                            <input type="text" class="input" name="kodpos"> Kode Pos : </div>
                                        <div class="wrapper">
                                            <input type="text" class="input" name="no_hp"> Nomor telfon/HP : </div>
                                        <div class="wrapper">
                                            <input type="text" class="input" name="email"> Email : </div>
                                        <a class="button2" onclick="document.getElementById('ContactForm').submit()">Send</a>
                                        <a href="javascript:" class="button2" onclick="document.getElementById('ContactForm').reset()">Clear</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <!-- footer -->
        <footer>
            <div class="col2">
                <nav>
                    <ul id="footer_menu">
                        <li><a href="index.php">About Us</a></li>
                        <li><a href="services.php">Facilities</a></li>
                        <li><a href="rooms.php">Rooms</a></li>
                        <li><a href="Package.php">Package</a></li>
                        <li class="last"><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <!-- {%FOOTER_LINK} -->
        </footer>
        <!-- footer end -->
    </div>

    <script type="text/javascript">
        Cufon.now();
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.kwicks').kwicks({
                max: 500,
                spacing: 0,
                event: 'mouseover'
            });
        })
    </script>
</body>

</html>
