<?php
    require_once( "../../include/common/begin.php" );
?>
<head>
    <title>Darmgymnastik | DorisPaas.de</title>
    <meta name="description" content="Auf dieser Seite finden Sie ausf&uuml;hrliche Erl&auml;uterungen zum Buch &#187;Darmgymnastik &ndash; Bewegung &#38; mehr gegen Verdauungsbeschwerden&#171;" />
    <meta name="keywords" content="Darmgymnastik, Akupressur, Bewegung" />
<?php
    require_once( INCLUDE_COMMON_PATH . "common_html_head.php" );
?>
</head>
<?php
    require_once( INCLUDE_COMMON_PATH . "body_start.php" );
?>
<div class="body0" id="scrollingDiv">
<div class="body1">
<div class="body3">
<p class="lastupdate">
    Letzte Aktualisierung: 20.7.2022
</p>

<div class="book content" style="width: 50%; padding-right: 10px;">
    <div style="width: 100%; padding: 7px;">
        <div class="th">
            Kapitel
        </div>
        <div>
            <?php
                include( "book-index.php" );
            ?>
        </div>
    </div>
</div>

<div class="book content" style="position: absolute; top: 60px; left: 50%; width: 50%; padding-left: 10px;">
    <div style="width: 100%; padding: 7px;">
        <div class="th">
            Untergliederung
        </div>

            <div id="no_chapter" style="display: block;">
                Bitte klicken Sie auf die <br />
                gew&uuml;nschte
                Kapitel&uuml;berschrift, <br />
                um die zugeh&ouml;rige <br />
                Untergliederung anzuzeigen.
            </div>
            <?php
                include( "kapitel01.php" );
                include( "kapitel02.php" );
                include( "kapitel03.php" );
                include( "kapitel04.php" );
                include( "kapitel05.php" );
                include( "kapitel06.php" );
                include( "kapitel07.php" );
                include( "kapitel08.php" );
                include( "kapitel09.php" );
                include( "kapitel10.php" );
                include( "kapitel11.php" );
                include( "kapitel12.php" );
                include( "kapitel13.php" );
                include( "kapitel14.php" );
            ?>
        </div>
    </div>
</div>
</div>
</div>
<?php
    require_once( INCLUDE_COMMON_PATH . "body_end.php" );
?>
