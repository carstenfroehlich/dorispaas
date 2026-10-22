        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Das Laktose-Intoleranz Buch</h1>      
            </div>  
        </div> 
        <div class="container">    
            <div class="section">   
                <div class="row margintoprow">        
                    <div class="col s12 m12">
                        An dieser Stelle finden Sie als Leseprobe einige Seiten aus dem Laktose-Intoleranz Buch. Schnuppern Sie doch einmal rein.
                        <br /><br />
                        <?php
                            $seite = array_key_exists( "seite", $_GET ) ? $_GET["seite"] * 1 : 0;
                            if ( $seite == 12 ) { 
                        ?>
                        <b>Wenn Sie DAS LAKTOSE-INTOLERANZ BUCH komplett lesen m&ouml;chten, k&ouml;nnen 
                        Sie es direkt hier im <a href="shop" target="_blank">Shop</a> bestellen.</b>
                        <br />
                        <br />
                        
                        <br />
                        <br />
                        <?php } ?>
                        <table border="0" cellspacing="0" cellpadding"0" class="booknav" style="width: 100%;">
                            <tr>
                                <td style="width: 50px; text-align: left;">
                                    <?php if ( $seite > 0 ) { ?>
                                        <a href="<?php echo URL_ROOT; ?>read/?seite=<?= ( $seite - 1 ) ?>">zur&uuml;ck</a>
                                    <?php } else { echo "&nbsp;\n"; } ?>
                       	        </td>
                        	    <td style="text-align: left; word-spacing: 10px;">
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=0"  class="<?= ($seite == 0)  ? "current" : "" ?>">21</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=1"  class="<?= ($seite == 1)  ? "current" : "" ?>">33</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=2"  class="<?= ($seite == 2)  ? "current" : "" ?>">36</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=3"  class="<?= ($seite == 3)  ? "current" : "" ?>">37</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=4"  class="<?= ($seite == 4)  ? "current" : "" ?>">64</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=5"  class="<?= ($seite == 5)  ? "current" : "" ?>">65</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=6"  class="<?= ($seite == 6)  ? "current" : "" ?>">67</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=7"  class="<?= ($seite == 7)  ? "current" : "" ?>">107</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=8"  class="<?= ($seite == 8)  ? "current" : "" ?>">115</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=9"  class="<?= ($seite == 9)  ? "current" : "" ?>">204</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=10"  class="<?= ($seite == 10)  ? "current" : "" ?>">320</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=11" class="<?= ($seite == 11) ? "current" : "" ?>">321</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=12" class="<?= ($seite == 12) ? "current" : "" ?>">347</a>
                        	    </td>
                            	<td style="width: 50px; text-align: right;">
                                    <?php if ( $seite < 12 ) { ?>
                                        <a href="<?php echo URL_ROOT; ?>read/?seite=<?= ( $seite + 1 ) ?>">weiter</a>
                                    <?php } else { echo  "&nbsp;\n"; } ?>
                            	</td>
                            </tr>
                        </table>
                        <?php
                            $img = "";
                            
                            switch ( $seite )
                            {
                                case 0:
                        	    $img = IMG_PATH."read01.jpg";
                        	    break;
                                case 1:
                        	    $img = IMG_PATH."read02.jpg";
                        	    break;
                                case 2:
                        	    $img = IMG_PATH."read03.jpg";
                        	    break;
                                case 3:
                        	    $img = IMG_PATH."read04.jpg";
                        	    break;
                                case 4:
                        	    $img = IMG_PATH."read05.jpg";
                        	    break;
                                case 5:
                        	    $img = IMG_PATH."read06.jpg";
                        	    break;
                                case 6:
                        	    $img = IMG_PATH."read13.jpg";
                        	    break;
                                case 7:
                        	    $img = IMG_PATH."read07.jpg";
                        	    break;
                                case 8:
                        	    $img = IMG_PATH."read08.jpg";
                        	    break;
                                case 9:
                        	    $img = IMG_PATH."read09.jpg";
                        	    break;
                                case 10:
                        	    $img = IMG_PATH."read10.jpg";
                        	    break;
                                case 11:
                        	    $img = IMG_PATH."read11.jpg";
                        	    break;
                                case 12:
                        	    $img = IMG_PATH."read12.jpg";
                        	    break;
                            }
                        ?>
                        
                        
                        <div class="left">
                            <img src="<?= $img ?>" class="book-read-img" />
                        </div>
                        
                        <br />
                        <br />
                        <table border="0" cellspacing="0" cellpadding"0" class="booknav" style="width: 100%;">
                            <tr>
                                <td style="width: 50px; text-align: left;">
                                    <?php if ( $seite > 0 ) { ?>
                                        <a href="<?php echo URL_ROOT; ?>read/?seite=<?= ( $seite - 1 ) ?>">zur&uuml;ck</a>
                                    <?php } else { echo "&nbsp;\n"; } ?>
                       	        </td>
                        	    <td style="text-align: left; word-spacing: 10px;">
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=0"  class="<?= ($seite == 0)  ? "current" : "" ?>">21</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=1"  class="<?= ($seite == 1)  ? "current" : "" ?>">33</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=2"  class="<?= ($seite == 2)  ? "current" : "" ?>">36</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=3"  class="<?= ($seite == 3)  ? "current" : "" ?>">37</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=4"  class="<?= ($seite == 4)  ? "current" : "" ?>">64</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=5"  class="<?= ($seite == 5)  ? "current" : "" ?>">65</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=6"  class="<?= ($seite == 6)  ? "current" : "" ?>">67</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=7"  class="<?= ($seite == 7)  ? "current" : "" ?>">107</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=8"  class="<?= ($seite == 8)  ? "current" : "" ?>">115</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=9"  class="<?= ($seite == 9)  ? "current" : "" ?>">204</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=10"  class="<?= ($seite == 10)  ? "current" : "" ?>">320</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=11" class="<?= ($seite == 11) ? "current" : "" ?>">321</a>
                                    <a href="<?php echo URL_ROOT; ?>read/?seite=12" class="<?= ($seite == 12) ? "current" : "" ?>">347</a>
                        	    </td>
                            	<td style="width: 50px; text-align: right;">
                                    <?php if ( $seite < 12 ) { ?>
                                        <a href="<?php echo URL_ROOT; ?>read/?seite=<?= ( $seite + 1 ) ?>">weiter</a>
                                    <?php } else { echo  "&nbsp;\n"; } ?>
                            	</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>