var BROWSER_UNKNOWN = 0;
// W3C-konforme Browser
var BROWSER_FIREFOX = 1;
var BROWSER_MOZILLA = 2;
var BROWSER_KONQUEROR = 3;

// Internet Explorer
var BROWSER_MSIE = 999;

/**
 * Detects the used browser and provides information about it.
 */ 
function Browser()
{
    this.browser_id = BROWSER_UNKNOWN;
    this.version = 0;
    
    //alert( navigator.userAgent );
    if ( navigator.userAgent.indexOf( "MSIE" ) != -1 )
    {
        this.browser_id = BROWSER_MSIE;
        var pos = navigator.userAgent.indexOf( "MSIE" ) + 5;
        this.version = parseFloat( navigator.userAgent.substr( pos ) );
    }
    else if ( navigator.userAgent.indexOf("Firefox" ) != -1 )
    {
        this.browser_id = BROWSER_FIREFOX;
    }
    else if ( navigator.userAgent.indexOf( "Mozilla" ) != -1 )
    {
        this.browser_id = BROWSER_MOZILLA;
    }
    else if ( navigator.userAgent.indexOf( "Konqueror" ) != -1 )
    {
        this.browser_id = BROWSER_KONQUEROR;
    }
    
    // Id of the detected browser
    this.getId = function()
    {
        return ( this.browser_id );
    };
    
    // Version of the detected browser
    this.getVersion = function()
    {
        return ( this.version );
    };
    
    // Is the used browser (more or less) W3C compliant?
    this.isW3CCompliant = function()
    {
        return ( ( this.getId() >= 1 ) && ( this.getId() <= 99 ) );
    };
    
    // Frequently used: Is Mozilla family browser (e.g. Firefox) used?
    this.isMozillaFamily = function()
    {
        return ( ( this.getId() == BROWSER_MOZILLA ) || ( this.getId() == BROWSER_FIREFOX ) );
    };
    
    // Frequently used: Is Internet Explorer used?
    this.isIE = function()
    {
        return ( this.getId() == BROWSER_MSIE );
    };
    
    // Frequently used: Is Internet Explorer version 6 (or below) used?
    this.isIE6 = function()
    {
        return ( ( this.getId() == BROWSER_MSIE ) && ( this.getVersion() < 7.0 ) );
    };
    
    // Frequently used: Is Internet Explorer version 7 (or above) used?
    this.isIE7 = function()
    {
        return ( ( this.getId() == BROWSER_MSIE ) && ( this.getVersion() >= 7.0 ) );
    };
    
    // Frequently used: Is Chrome used?
    // TODO: Write correct implementation!
    this.isChrome = function()
    {
        return ( this.isIE() );
    };
}

var browser = new Browser();
