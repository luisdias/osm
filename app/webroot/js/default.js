$(function() {
    if ( $("#sidebar").length ) {
        $("#content").width(720);
        $("#content").css('margin-right','10px');
    }
        
    $( "#tabs" ).tabs();
    
    $( ".datepicker" ).datepicker({
            showOn: "button",
            buttonImage: firstLevel+ "/img/calendar.gif",
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd'
    });

    // actions buttons for view.ctp 
    $(".actions ul li a[href!='add'][href!='#'][href!='edit']").button( {
        icons: {primary: "ui-icon-grip-solid-horizontal"}
    });
    
    $(".actions ul li a[href*='add']").button( {
        icons: {primary: "ui-icon-circle-plus"}
    });
    $(".actions ul li a[href*='#']").button( {
        icons: {primary: "ui-icon-cancel"}
    });
    
    $(".actions ul li a[href*='edit']").button( {
        icons: {primary: "ui-icon-folder-open"}
    });

    // related table for view.ctp and index.ctp
    $("td.actions a[href*='edit']").button( {
        icons: {primary: "ui-icon-folder-open"},
        text: false
    });
    $("td.actions a[href*='#']").button( {
        icons: {primary: "ui-icon-cancel"},
        text: false
    });
    $("td.actions a[href*='view']").button( {
        icons: {primary: "ui-icon-contact"},
        text: false
    });
    $("td.actions a[href*='professionals_services'][href*='service_id']").button( {
        icons: {primary: "ui-icon-person"},
        text: false
    });
    $("td.actions a[href*='skills_professionals'][href*='professional_id']").button( {
        icons: {primary: "ui-icon-wrench"},
        text: false
    });
    $("td.actions a[href*='password']").button( {
        icons: {primary: "ui-icon-key"},
        text: false
    });    
    $("#panel a[href*='report']").button( {
        icons: {primary: "ui-icon-print"}
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
    
    // login button
    $(".submit input:contains('Login')").button( {
        icons: {primary: "ui-icon-locked"}
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

    $('input[title]').tipsy({trigger: 'focus', gravity: 's', fade: true});
    $('select[title]').tipsy({trigger: 'focus', gravity: 's', fade: true});
    $('textarea[title]').tipsy({trigger: 'focus', gravity: 's', fade: true});       

});