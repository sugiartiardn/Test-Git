<!DOCTYPE html>
<html>
    <head>
        <title>Market Place</title>
        
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>

    <body>
        <div>
            <div class="kepala">
                <table>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="gambar/Logo.jpg" width="250" height="150">
                        </td>
                        <td>
                            <b>Silahkan belanja!</b><br>
							<p>
                                <form>
								    <input class="search" type="text" placeholder="  Cari..." required>	
								    <input class="button" type="button" value="Cari">		
								</form>
                            </p>
                        </td>
                    </tr>
                </table><br>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php?page=masker">Masker</a></li>
                    <li><a href="index.php?page=tasselempang">Tas Selempang Wanita</a></li>
                    <li><a href="index.php?page=daster">Daster</a></li>
                    <li><a href="index.php?page=sepatu">Sepatu Wanita</a></li>
                </ul>
            </div>

            <div class="sidebar">
                <h1>Kontak Kami</h1>   

                <h4>Alamat :</h4>
                <font color="#999999">Jl. Raya Batujajar, NO 32, Kota Bandung</font>

                <h4>Nomor Telepon :</h4>
                <font color="#999999">+62 - 89647006526</font>

                <h4>Email :</h4>
                <font color="#999999">sugiartiardanaputri@gmail.com</font>

                <h4>Social Media :</h4>
                <font color="#999999">
                    Instagram   : @sugiarti_ardana<br>
                    Facebook    : Sugiarti Ardana<br>
                    Youtube     : Sugiarti Ardana
                </font>
            </div>

            <div class="konten">
                <?php
                    if(isset($_GET['page']))
                    {
                        $halamanmenu=$_GET['page'];
                        switch ($halamanmenu) 
                        {
                            case 'masker':
                                include "masker.php";
                                break;

                            case 'tasselempang':
                                include "tasselempang.php";
                                break;

                            case 'daster':
                                include "daster.php";
                                break;   
                                
                            case 'sepatu':
                                include "sepatu.php";
                                break;   

                            default:
                                echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
                                break;
                        }
                    }

                    else
                    {
                        include "beranda.php";
                    }
                ?>
            </div>

            <div class="footer">
                <font color="white"><center>Copyright © 2021 Shopping Happy | All Rights Reserved</center></font>
            </div>
        </div>
    </body>
</html>