function getCompStyle( elem, styleProp )
{
    if ( elem == null )
        return ( null );
    
    if ( browser.isIE() )
    {
        var parts = styleProp.split( "-" );
        var ieStyleProp = "";
        for ( var i = 0; i < parts.length; i++ )
        {
            if ( i == 0 )
            {
                ieStyleProp += parts[ i ];
            }
            else
            {
                ieStyleProp += parts[ i ].charAt( 0 ).toUpperCase();
                ieStyleProp += parts[ i ].substr( 1 );
            }
        }
        
        return ( elem.currentStyle[ ieStyleProp ] );
    }
    
    if ( window.getComputedStyle )
    {
        return ( window.getComputedStyle( elem, null ).getPropertyValue( styleProp ) );
    }
    
    return ( null );
}

function parseBorderWidth( bwStr )
{
    var bw = parseInt( bwStr, 10 );
    
    if ( isNaN( bw ) )
        bw = 0;
    
    return ( bw );
}

function getBorderLeftWidth( elem )
{
    return ( parseBorderWidth( getCompStyle( elem, "border-left-width" ) ) );
}

function getBorderTopWidth( elem )
{
    return ( parseBorderWidth( getCompStyle( elem, "border-top-width" ) ) );
}

function getScrollX()
{
    var scrollX = window.scrollX;
    
    if ( scrollX == undefined )
        scrollX = window.pageXOffset;
    
    if ( scrollX == undefined )
    {
        if ( browser.isIE7() )
            scrollX = document.documentElement.scrollLeft;
        else
            scrollX = document.body.scrollLeft;
    }
    
    return ( scrollX );
}

function getScrollY()
{
    var scrollY = window.scrollY;
    
    if ( scrollY == undefined )
        scrollY = window.pageYOffset;
    
    if ( scrollY == undefined )
    {
        if ( browser.isIE7() )
            scrollY = document.documentElement.scrollTop;
        else
            scrollY = document.body.scrollTop;
    }
    
    return ( scrollY );
}

function getAbsPositionX( tag )
{
    var elem = tag;
    var posX = 0;
    
    while ( ( elem.offsetParent != null ) || ( getCompStyle( elem, "position" ) == "fixed" ) )
    {
        posX += elem.offsetLeft;
        
        if ( elem != tag )
        {
            posX += getBorderLeftWidth( elem );
        }
        
        elem = elem.offsetParent;
        //posX -= elem.scrollLeft;
        
        if ( elem == null ) // Must be Chrome, who thinks, a fixed positioned element didn't have a parentOffset.
            elem = document.body;
    }
    
    //if ( !browser.isIE() )
    //    return ( -window.scrollX + posX );
    
    return ( posX );
}

function getAbsPositionY( tag )
{
    var elem = tag;
    var posY = 0;
    
    while ( ( elem.offsetParent != null ) || ( getCompStyle( elem, "position" ) == "fixed" ) )
    {
        posY += elem.offsetTop;
        
        if ( elem != tag )
        {
            posY += getBorderTopWidth( elem );
        }
        
        elem = elem.offsetParent;
        //posY -= elem.scrollTop;
        
        if ( elem == null ) // Must be Chrome, who thinks, a fixed positioned element didn't have a parentOffset.
            elem = document.body;
    }
    
    //if ( !browser.isIE() )
    //    return ( -window.scrollY + posY );
    
    return ( posY );
}

function setSelectedComboItem( combo, itemID )
{
    if ( combo.charAt )
        combo = document.getElementById( combo );
    
    for ( var i = 0; i < combo.options.length; i++ )
    {
        if ( combo.options[i].value == itemID )
        {
            combo.selectedIndex = i;
            return;
        }
    }
    
    combo.selectedIndex = -1;
}

function getSelectedComboItem( combo )
{
    if ( combo.charAt )
        combo = document.getElementById( combo );
    
    if ( combo.options.length == 0 )
        return ( null );
    
    var selIdx = combo.selectedIndex;
    
    if ( selIdx < 0 )
        return ( null );
    
    return ( combo.options[selIdx].value );
}

