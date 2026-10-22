<?php
    header('Access-Control-Allow-Origin: *');  	
?>
                    <div class="col s12 m12"> 
                        <a href="basket" class="btn btn-secondary basketbutton">
                            <?php 
                                $entries = array();
                                if(isset($_GET['shopcookie'])) {
                                    $entries = getCartEntriesByToken($_GET['shopcookie']); 
                                }elseif(isset($_COOKIE['shopcookie'])) {
                                    $entries = getCartEntriesByToken($_COOKIE['shopcookie']); 
                                }
                            ?>
                            Warenkorb: (<?php echo count($entries); ?> Artikel)
                        </a>
                    </div>
