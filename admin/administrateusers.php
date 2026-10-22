        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br />    
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>  
                <h1 class="header center orange-text">Administrationsbereich - Kunden administrieren</h1>
            </div>  
        </div> 
        <div class="container">    
            <div class="section">
                <?php $customers = loadAllUsers(); ?>
                <?php $counter = 1; ?>
                <div class="row">
                    <?php foreach($customers AS $customer) { ?>
                        <div class="col s12 m4">
                            <br />
                            Kundenummer: <?php echo $customer->customer_id; ?><br />
                            <?php echo $customer->firstname; ?> <?php echo $customer->lastname; ?><br />
                            <?php echo $customer->street; ?><br />
                            <?php echo $customer->zipcode; ?> <?php echo $customer->cityname; ?><br />
                            <?php echo loadCountry($customer->country_id)->name; ?><br />
                            <?php echo $customer->email; ?><br />
                            <?php echo $customer->phonenumber; ?><br />
                            <a href="<?php echo URL_ROOT; ?>admin/administrateuser/<?php echo $customer->id; ?>" class="btn btn-priamry">Kunden bearbeiten</a>
                        </div>         
                        <?php $counter++; ?>
                        <?php if($counter == 4) { ?>
                            </div>
                            <div class="row">
                            <?php $counter = 1; ?>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>