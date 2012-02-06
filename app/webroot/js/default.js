$(function() {
    if ( $("#sidebar").length ) {
        $("#content").width(720);
        $("#content").css('margin-right','10px');
    }
        

    $( "#tabs" ).tabs();
    
    var pathName = window.location.pathname;
    var pathArray = pathName.split("/");
    var firstLevel = null;
    if ( pathName.substr(0,1) == "/" )       
        firstLevel = "/" + pathArray[1];
    else
        firstLevel = "/" + pathArray[0];    
    
    $( ".datepicker" ).datepicker({
            showOn: "button",
            buttonImage: firstLevel+ "/img/calendar.gif",
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd'
    });

    // actions buttons for view.ctp 
    $(".actions ul li a:contains('New')").button( {
        icons: {primary: "ui-icon-circle-plus"}
    });
    $(".actions ul li a:contains('Delete')").button( {
        icons: {primary: "ui-icon-cancel"}
    });
    
    $(".actions ul li a:contains('Edit')").button( {
        icons: {primary: "ui-icon-folder-open"}
    });

    $(".actions ul li a:contains('List')").button( {
        icons: {primary: "ui-icon-grip-solid-horizontal"}
    });

    // related table for view.ctp and index.ctp
    $("td.actions a:contains('Edit')").button( {
        icons: {primary: "ui-icon-folder-open"},
        text: false
    });
    $("td.actions a:contains('Delete')").button( {
        icons: {primary: "ui-icon-cancel"},
        text: false
    });
    $("td.actions a:contains('View')").button( {
        icons: {primary: "ui-icon-contact"},
        text: false
    });
    $("td.actions a:contains('Professionals')").button( {
        icons: {primary: "ui-icon-person"},
        text: false
    });
    $("td.actions a:contains('Skills')").button( {
        icons: {primary: "ui-icon-wrench"},
        text: false
    });
    $("td.actions a:contains('Password')").button( {
        icons: {primary: "ui-icon-key"},
        text: false
    });    
     
    // buttons for form.ctp
    $(".cancelButton").button( {
        icons: {primary: "ui-icon-cancel"}
    });
    
    $(".submit").button( {
        icons: {primary: "ui-icon-disk"}
    });        

    $("#panel .submit").button( {
        icons: {primary: "ui-icon-search"}
    });
    
    if ( $('#flashMessage').text() != '') { 
        $( "#flashMessage" ).dialog({
            modal: true,
            buttons: {
                Ok: function() {
                    $( this ).dialog( "close" );
                }
            }
        });
    }

//    $.fn.tipsy.defaults = {
//        delayIn: 0,      // delay before showing tooltip (ms)
//        delayOut: 0,     // delay before hiding tooltip (ms)
//        fade: false,     // fade tooltips in/out?
//        fallback: '',    // fallback text to use when no tooltip text
//        gravity: 'n',    // gravity
//        html: false,     // is tooltip content HTML?
//        live: false,     // use live event support?
//        offset: 0,       // pixel offset of tooltip from element
//        opacity: 0.8,    // opacity of tooltip
//        title: 'title',  // attribute/callback containing tooltip text
//        trigger: 'hover' // how tooltip is triggered - hover | focus | manual
//    };

    $('input[title]').tipsy({trigger: 'focus', gravity: 's', fade: true});
    $('select[title]').tipsy({trigger: 'focus', gravity: 's', fade: true});
    $('textarea[title]').tipsy({trigger: 'focus', gravity: 's', fade: true});       

});