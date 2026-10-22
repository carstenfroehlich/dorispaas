var IS_IE = ( navigator.appName.indexOf( "Microsoft Internet Explorer" ) > -1 );

var currChap = null;

function switchChapter( chap )
{
    var elem = document.getElementById( chap );
    
    if ( currChap == null )
        currChap = document.getElementById( "no_chapter" );
    
    currChap.style.display = "none";
    currChap = elem;
    currChap.style.display = "block";
}

var eventHandlersApplied = false;

function applyAdditionalEventHandlers( menuElem )
{
    if ( eventHandlersApplied )
        return;
    
    eventHandlersApplied = true;
    
    var tds = menuElem.getElementsByTagName( "td" );
    
    for ( var i = 0; i < tds.length; i++ )
    {
        tds[ i ].onmouseover = showPopup;
        tds[ i ].onmouseout = markPopupHidden;
    }
}

/* ----------------------------------------------------------------- */
/* Highlighting der Suchbegriffe ----------------------------------- */
/* ----------------------------------------------------------------- */

function Werteliste( querystring ) {
    if ( querystring == "" )
        return;
    
    var wertestring = querystring.slice(1);
    var paare = wertestring.split("&");
    var paar, name, wert;
    for (var i = 0; i < paare.length; i++) {
        paar = paare[i].split("=");
        name = paar[0];
        wert = paar[1];
        name = unescape(name).replace("+", " ");
        wert = unescape(wert).replace("+", " ");
        this[name] = wert;
    }
}

function ersetzen( element, suchwort ) {
    var suchwort_low = suchwort.toLowerCase();
    for (var node = element.firstChild,nextnode; node; node=nextnode) {
        nextnode=node.nextSibling; // vor Wandlung festhalten
        
        if (node.nodeType == 1) {
            ersetzen(node, suchwort);
        }
        
        var pos;
        while (node.nodeType == 3 &&(pos=node.nodeValue.toLowerCase().indexOf(suchwort_low)) >-1 ) {
            var string_before = node.nodeValue.substring(0, pos);
            var string_after = node.nodeValue.substr(pos + suchwort.length);
            var textnode_before = document.createTextNode(string_before)
            var suchwort_node = document.createElement('span');
            suchwort_node.className='highlight';
            var suchwort_textnode = document.createTextNode(suchwort);
            suchwort_node.appendChild(suchwort_textnode);
            var textnode_after = document.createTextNode(string_after);
            node.parentNode.replaceChild(textnode_after, node);
            textnode_after.parentNode.insertBefore(textnode_before, textnode_after);
            textnode_after.parentNode.insertBefore(suchwort_node, textnode_after);
            node=textnode_after;
        }
    }
}

var liste = new Werteliste( location.search );

function init() {
    if ( liste['sucherg'] )
        ersetzen( document.body, liste['sucherg'].toUpperCase() );
}

function zahlFormat( zahl ) {
    var tmp = (Math.round(zahl * 100) / 100).toString();
    tmp += (tmp.indexOf('.') == -1)? '.00' : '00';
    var z = tmp.indexOf('.');
    
    return tmp.substring(0, z) + ',' + tmp.substring(z+1, z+3);
}

var de_ot = 0;

function berechnePreis( land ) {
    if(land == '0'){de_ot = land;}
    if(land == '1'){de_ot = land;}
    var versand = 0.0;
    var menge1 = document.getElementById('men').value;
    var menge2 = document.getElementById('men2').value;
    var menge3 = document.getElementById('men3').value;
    var menge4 = document.getElementById('men4').value;
    var menge5 = document.getElementById('men5').value;
    var menge6 = document.getElementById('men6').value;
    var menge7 = document.getElementById('men7').value;
    var menge8 = document.getElementById('men8').value;
    
    if ( de_ot == '0' )
    {
        document.getElementById('deutschland').style.fontWeight = 'bold';
        document.getElementById('other').style.fontWeight = 'normal';
        versand = 0.0;
    }
    else if ( de_ot == '1' )
    {
        document.getElementById('deutschland').style.fontWeight = 'normal';
        document.getElementById('other').style.fontWeight = 'bold';
        versand = 3.0;
    }
    
    if ( menge1 === '' )
        menge1 = 0;
    if ( menge2 === '' )
        menge2 = 0;
    if ( menge3 === '' )
        menge3 = 0;
    if ( menge4 === '' )
        menge4 = 0;
    if ( menge5 === '' )
        menge5 = 0;
    if ( menge6 === '' )
        menge6 = 0;
    if ( menge7 === '' )
        menge7 = 0;
    if ( menge8 === '' )
        menge8 = 0;
    
    var price1 = 19.50;
    var price2 = 9.80;
    var price3 = 4.95;
    var price4 = 6.95;
    var priceges = 0.0;
    
    var price1ber = price1 * menge1;
    var price2ber = price2 * menge2;
    var price3ber = price3 * menge3;
    var price4ber = price3 * menge4;
    var price5ber = price3 * menge5;
    var price6ber = price3 * menge6;
    var price7ber = price3 * menge7;
    var price8ber = price4 * menge8;
    
    if ( menge1 != 0 || menge2 != 0 || menge3 != 0 || menge4 != 0 || menge5 != 0 || menge6 != 0 || menge7 != 0 || menge8 != 0 )
    {
        priceges = price1ber + price2ber + price3ber + price4ber + price5ber + price6ber + price7ber + price8ber + versand;
    }
    
    document.getElementById('m1').innerHTML = menge1;
    document.getElementById('m2b').innerHTML = menge2;
    document.getElementById('m3b').innerHTML = menge3;
    document.getElementById('m4b').innerHTML = menge4;
    document.getElementById('m5b').innerHTML = menge5;
    document.getElementById('m6b').innerHTML = menge6;
    document.getElementById('m7b').innerHTML = menge7;
    document.getElementById('m8b').innerHTML = menge8;
    document.getElementById('p1').innerHTML = zahlFormat(price1ber) + " &euro;";
    document.getElementById('p2').innerHTML = zahlFormat(price2ber) + " &euro;";
    document.getElementById('p3').innerHTML = zahlFormat(price3ber) + " &euro;";
    document.getElementById('p4').innerHTML = zahlFormat(price4ber) + " &euro;";
    document.getElementById('p5').innerHTML = zahlFormat(price5ber) + " &euro;";
    document.getElementById('p6').innerHTML = zahlFormat(price6ber) + " &euro;";
    document.getElementById('p7').innerHTML = zahlFormat(price7ber) + " &euro;";
    document.getElementById('p8').innerHTML = zahlFormat(price8ber) + " &euro;";
    document.getElementById('gp').innerHTML = zahlFormat(priceges) + " &euro;";
}

function scrollMainToTop()
{
  scroll( 0, 0 );
}

/* ----------------------------------------------------------------- */
/* Lexikon-Filter -------------------------------------------------- */
/* ----------------------------------------------------------------- */

function showMultiFilter( dsp_elem_id, elem_id )
{
    var dsp_elem = document.getElementById( dsp_elem_id );
    var elem = document.getElementById( elem_id );
    
    elem.parentNode.style.overflow = "visible";
    
    if ( elem.style.display == "block" )
        elem.style.display = "none";
    else
        elem.style.display = "block";
}

function selectMultiFilterEntry( li )
{
    var lis = li.parentNode.getElementsByTagName( "li" );
    var allLI = lis[0];
    var input = li.parentNode.parentNode.parentNode.getElementsByTagName( "input" )[0];
    
    if ( li == allLI )
    {
        if ( li.className.indexOf( "active" ) < 0 )
        {
            li.className += " active";
            input.value = "";
            
            for ( var i = 1; i < lis.length; i++ )
            {
                lis[i].className = lis[i].className.replace( / active/g, "" ).replace( /active/g, "" );
            }
        }
    }
    else
    {
        if ( li.className.indexOf( "active" ) >= 0 )
        {
            li.className = li.className.replace( / active/g, "" ).replace( /active/g, "" );
            var filter_value = input.value;
            filter_value = filter_value.replace( ";" + li.innerHTML, "" ).replace( li.innerHTML, "" );
            input.value = filter_value;
        }
        else
        {
            li.className += " active";
            var filter_value = input.value;
            if ( filter_value == "" )
                filter_value = li.innerHTML;
            else
                filter_value += ";" + li.innerHTML;
            input.value = filter_value;
        }
        
        if ( filter_value == "" )
        {
            if ( allLI.className.indexOf( "active" ) < 0 )
                allLI.className += " active";
        }
        else
        {
            if ( allLI.className.indexOf( "active" ) >= 0 )
                allLI.className = li.className.replace( / active/g, "" ).replace( /active/g, "" );
        }
    }
}

function resetLebensmittelFilter()
{
    var f = document.forms["filter"];
    
    //setSelectedComboItem( f.lebensmittel, "" );
    f.kategories.value = "";
    /*setSelectedComboItem( f.li, "" );
    setSelectedComboItem( f.fi, "" );
    setSelectedComboItem( f.si, "" );
    setSelectedComboItem( f.hi, "" );
    setSelectedComboItem( f.oi, "" );
    setSelectedComboItem( f.gz, "" );
    setSelectedComboItem( f.sa, "" );
    setSelectedComboItem( f.ap, "" );
    setSelectedComboItem( f.fo, "" );*/
    $("select[name=lebensmittel] option:first").attr('selected','selected');
    $("select[name=li] option:first").attr('selected','selected');
    $("select[name=fi] option:first").attr('selected','selected');
    $("select[name=si] option:first").attr('selected','selected');
    $("select[name=hi] option:first").attr('selected','selected');
    $("select[name=oi] option:first").attr('selected','selected');
    $("select[name=gz] option:first").attr('selected','selected');
    $("select[name=sa] option:first").attr('selected','selected');
    $("select[name=ap] option:first").attr('selected','selected');
    $("select[name=fo] option:first").attr('selected','selected');
    
    f.submit();
}

function onMouseOverMultiFilter( elem )
{
    elem.removeAttribute( "onmouseover" );
    
    elem.onmouseout = onMouseExitMultiFilter;
}

function isChildOf( child, parent )
{
    if ( child.parentNode == parent )
        return ( true );
    
    if ( ( child.parentNode == null ) || ( child.parentNode == document.body ) )
        return ( false );
    
    return ( isChildOf( child.parentNode, parent ) );
}

function onMouseExitMultiFilter( e )
{
    if ( document.all )
        e = window.event;
    
    if ( e.relatedTarget === undefined )
        e.relatedTarget = e.fromElement || e.toElement; // IE
    
    if ( e.currentTarget === undefined )
        e.currentTarget = e.srcElement; // IE
    
    if ( ( e.currentTarget == this ) && ( e.relatedTarget != this ) && !isChildOf( e.relatedTarget, this ) )
        this.style.display = "none";
}

function onLmdbBodyScroll()
{
    var menubar = document.getElementById( "menubar" );
    var head_placeholder = document.getElementById( "lebensmittel_head_wrapper_placeholder" );
    var head = document.getElementById( "lebensmittel_head_wrapper" );
    
    if ( getAbsPositionY( head_placeholder ) - getScrollY() < getAbsPositionY( menubar ) + menubar.offsetHeight )
    {
        head_placeholder.style.width = head.offsetWidth + "px";
        head_placeholder.style.height = head.offsetHeight + "px";
        
        head.className = "lebensmittel_head_wrapper fixed";
        
        //head.orgLeft = getCompStyle( head, "left" );
        head.style.left = ( getAbsPositionX( head_placeholder ) - getScrollX() ) + "px";
    }
    else
    {
        head_placeholder.style.height = "0";
        
        head.className = "lebensmittel_head_wrapper";
        //if ( head.orgLeft )
        //    head.style.left = head.orgLeft;
        head.style.left = "";
    }
}

function isParentOf( child, parent )
{
    do
    {
        if ( child == parent )
            return ( true );
        
        child = child.parentNode;
    }
    while ( child != document.body );
    
    return ( false );
}

function expandCollapseChapter( elem )
{
    var contentElem = elem.nextElementSibling;
    
    if ( contentElem == null )
        return;
    
    if ( !( ( contentElem.tagName == "UL" ) && ( contentElem.className.indexOf( "struc sub" ) >= 0 ) ) &&
         !( ( contentElem.tagName == "DIV" ) && ( contentElem.className.indexOf( "chapter-content" ) >= 0 ) ) )
        return;
    
    var children = document.getElementsByClassName( "chapter-content" );
    
    for ( var i = 0; i < children.length; i++ )
    {
        if ( ( children[i] != contentElem ) && !isParentOf( elem, children[i] ) && ( children[i].className == "chapter-content expanded" ) )
            children[i].className = "chapter-content";
    }
    
    children = document.getElementsByClassName( "struc sub1" );
    
    for ( var i = 0; i < children.length; i++ )
    {
        if ( ( children[i] != contentElem ) && !isParentOf( elem, children[i] ) && ( children[i].className == "struc sub1 expanded" ) )
            children[i].className = "struc sub1";
    }
    
    if ( contentElem.className == "struc sub1" )
        contentElem.className = "struc sub1 expanded";
    else if ( contentElem.className == "struc sub1 expanded" )
        contentElem.className = "struc sub1";
    else if ( contentElem.className == "chapter-content" )
        contentElem.className = "chapter-content expanded";
    else if ( contentElem.className == "chapter-content expanded" )
        contentElem.className = "chapter-content";
}

function removeArticle(token, articleid, baseurl) {
    var dataObject = new Object();
    dataObject.action = "add";
    dataObject.token = token;
    dataObject.articleid = articleid;
    dataObject.amount = 0;
    
    jQuery.ajax({
        type: "POST",
        url: baseurl + 'shopapi', 
        dataType: 'json',
        data: JSON.stringify(dataObject),
        error: function(jqXHR, textStatus, errorMessage) {
           console.log(errorMessage);
        },
        success: function(data) {
            $(".shoppingcartajaxarea").load(baseurl + "shoppingcart_ajax/?shopcookie=" + getCookie("shopcookie"));
            if(data.result == 'deleted') {
                $('#incart' + articleid).addClass('hidden');
                $('#outcart' + articleid).addClass('hidden');
                $('#article' + articleid).val('');
            } else {
                $('#incart' + articleid).removeClass('hidden');
                $('#outcart' + articleid).removeClass('hidden');
            }
        }
    });
}

function addArticle(token, articleid, amountfieldid, baseurl) {
    var amountvalue = $('#'+amountfieldid).val();
    var dataObject = new Object();
    dataObject.action = "add";
    dataObject.token = token;
    dataObject.articleid = articleid;
    dataObject.amount = amountvalue;
    
    jQuery.ajax({
        type: "POST",
        url: baseurl + 'shopapi', 
        dataType: 'json',
        data: JSON.stringify(dataObject),
        error: function(jqXHR, textStatus, errorMessage) {
           console.log(errorMessage);
        },
        success: function(data) {
            $(".shoppingcartajaxarea").load(baseurl + "shoppingcart_ajax/?shopcookie=" + getCookie("shopcookie"));
            if(data.result == 'deleted') {
                $('#incart' + articleid).addClass('hidden');
                $('#outcart' + articleid).addClass('hidden');
                $('#article' + articleid).val('');
            } else {
                $('#incart' + articleid).removeClass('hidden');
                $('#outcart' + articleid).removeClass('hidden');
            }
        }
    });
}

function getCookie (name) {
	let value = `; ${document.cookie}`;
	let parts = value.split(`; ${name}=`);
	if (parts.length === 2) return parts.pop().split(';').shift();
}

function showCashboxArea(areakey) {
    if(areakey == 'new') {
        $('li#new').addClass('active');
        $('li#mail').removeClass('active');
        $('li#number').removeClass('active');
        $('tr.newrow').removeClass('hidden');
        $('tr.mailrow').addClass('hidden');
        $('tr.numberrow').addClass('hidden');
        $('#ordertype').val('newcustomer');
        validateCashbox();
    } else if(areakey == 'mail') {
        $('li#new').removeClass('active');
        $('li#mail').addClass('active');
        $('li#number').removeClass('active');
        $('tr.newrow').addClass('hidden');
        $('tr.mailrow').removeClass('hidden');
        $('tr.numberrow').addClass('hidden');
        $('#ordertype').val('mailorder');
        validateCashbox();
    } else if(areakey == 'number') {
        $('li#new').removeClass('active');
        $('li#mail').removeClass('active');
        $('li#number').addClass('active');
        $('tr.newrow').addClass('hidden');
        $('tr.mailrow').addClass('hidden');
        $('tr.numberrow').removeClass('hidden');
        $('#ordertype').val('numberorder');
        validateCashbox();
    }
}

function validateCashbox() {
    var ordertype = $('#ordertype').val();
    if(ordertype == 'newcustomer') {
        if(!isValidEmailAddress($('#email').val())) {
            $('#emailerror').removeClass('hidden');
            activateCashboxButton(false);
        } else {
            $('#emailerror').addClass('hidden');
            activateCashboxButton(true);
        }
        
    } else if(ordertype == 'mailorder') {
        if(!isValidEmailAddress($('#customer_email').val())) {
            $('#customeremailerror').removeClass('hidden');
            activateCashboxButton(false);
        } else {
            $('#customeremailerror').addClass('hidden');
            activateCashboxButton(true);
        }
    
    } else if(ordertype == 'numberorder') {
        activateCashboxButton(true);
    }
}

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    return pattern.test(emailAddress);
};

function activateBuyButton() {
    if($('#aggree_agb').prop( "checked" ) && $('input[name=paymentmethod]').is(':checked')) {
        $('#paymentbutton').removeAttr('disabled');
    } else {
        $('#paymentbutton').attr('disabled', 'disabled');
    }
}

function activateCashboxButton(emailValid) {
    if(emailValid) {
        $('#saveCashboxButton').removeAttr('disabled');
    } else {
        $('#saveCashboxButton').attr('disabled', 'disabled');
    }
}

function submitThisForm() {
    var checkedMethod = $('input[name=paymentmethod]:checked').val();
    if(checkedMethod == 1) {
        $('#paypal_form').submit();
    } else {
        $('#bank_form').submit();
    }
}

$(document).ready(function() {
    $('#email, #customer_email').on('keyup', function() {
        validateCashbox();
    });
    
    $('#aggree_agb').on('change', function() {
        activateBuyButton();
    });
    
    $('input[name=paymentmethod]').on('change', function() {
        activateBuyButton();
    });   
    
    $('.cartremovebutton').on('click', function(evt) {
        var elem = evt.target;
        var dataObject = new Object();
        dataObject.action = "delete";
        dataObject.cartentryid = $(elem).data('cid');
        
        jQuery.ajax({
            type: "POST",
            url: $(elem).data('baseurl') + 'shopapi', 
            dataType: 'json',
            data: JSON.stringify(dataObject),
            error: function(jqXHR, textStatus, errorMessage) {
               console.log(errorMessage);
            },
            success: function(data) {
                window.location.reload(true);
            }
        });
    });
    
    $('.footerhider').on('click', function() {
        $('.page-footer').addClass('hidden');
        $('.footerunhider').removeClass('hidden');
        $('div#index-banner .container .right').addClass('hidden');
    });
    
    $('.footerhider').on('touchstart', function() {
        $('.page-footer').addClass('hidden');
        $('.footerunhider').removeClass('hidden');
        $('div#index-banner .container .right').addClass('hidden');
    });
    
    $('.footerunhider').on('click', function() {
        $('.footerunhider').addClass('hidden');
        $('.page-footer').removeClass('hidden');
        $('div#index-banner .container .right').removeClass('hidden');
    });
    
    $('.footerunhider').on('touchstart', function() {
        $('.footerunhider').addClass('hidden');
        $('.page-footer').removeClass('hidden');
        $('div#index-banner .container .right').removeClass('hidden');
    });
});

function onLmdbBodyScroll() {
    var head_placeholder = document.getElementById( "lebensmittel_head_wrapper_placeholder" );
    var head = document.getElementById( "lmdb_table_header" );
    var lmbd_body = document.getElementById('lmdb_table_body');
    
    if ( getAbsPositionY( head_placeholder ) - getScrollY() < 0 ) {
        
        head.className = "row lmbdfixed";
        //$($('div.row.lmbdfixed div')[0]).css('top', (getScrollY() - 448) + "px");
        $($('div.row.lmbdfixed div')[0]).css('top', "0px");
        $($('div.row.lmbdfixed div')[0]).css('background-color', 'rgba(247, 247, 247, 1.0)');
        $('.fixthisheader').css('width', lmbd_body.offsetWidth + 'px');
    } else {
        head.className = "row";
    }
}

function onLmdbWidthChange() {
    var lmbd_body = document.getElementById('lmdb_table_body');
    $('.fixthisheader').css('width', lmbd_body.offsetWidth + 'px');
}

