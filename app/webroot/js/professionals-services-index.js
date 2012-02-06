$(function() {
    var pathName = window.location.pathname;
    var pathArray = pathName.split("/");
    var firstLevel = null;
    if ( pathName.substr(0,1) == "/" )       
        firstLevel = "/" + pathArray[1];
    else
        firstLevel = "/" + pathArray[0];

    updateGrid(firstLevel);

    $.ajax({
    type: "POST",
    url: firstLevel+'/professionals/getProfessionalsList',
    dataType: 'text',
    success: function(professionals){
        $('#sidebar').html(professionals);
        makeDraggable();
        makeDroppable(firstLevel);                
    },
    error: function(msg) {         
        $('#sidebar').html('Empty list');
    }
    });
    
});

function makeDraggable() {
$(".draggable" ).draggable({
    helper: 'clone',
    appendTo: 'body',
    revert: 'invalid',
    cursor: 'move',
    snap: true
});
}

function makeDroppable(firstLevel) {
    $(".droppable" ).droppable({
        accept: '.draggable',
        greedy: true,
        activeClass: 'ui-state-highlight',
        drop: function(event,ui) {
            var element = $(ui.draggable).clone();
            
            professional_id = element.attr('professional_id');
            service_id = $("#fkid" ).val();

            if ( professional_id > 0  && service_id > 0 ) { 
                $.ajax({
                async: false,
                type: "POST",
                url: firstLevel+'/professionalsservices/add',
                dataType: 'text',
                data: "service_id=" + service_id  + '&' +
                    "professional_id=" + professional_id,
                success: function(id){
                    professionals_services = id;
                    updateGrid(firstLevel);
                },
                error: function(id) {         
                    alert('Database insert error');
                }
                });            
            } 
        }
    }); 
}

function updateGrid(firstLevel) {
    fkfield = $("#fkfield" ).val();
    fkid = $("#fkid" ).val();
    $.ajax({
    type: "POST",
    url: firstLevel+'/professionalsservices/display',
    dataType: 'text',
    data: "fkfield=" + fkfield + '&' + 
          "fkid=" + fkid,    
    success: function(grid){
        $('#professionalsServices').html(grid);
        $("td.actions a:contains('Edit')").button( {
            icons: {primary: "ui-icon-folder-open"},
            text: false
        });
        $("td.actions a:contains('Delete')").button( {
            icons: {primary: "ui-icon-cancel"},
            text: false
        });
    },
    error: function(msg) {         
        $('#professionalsServices').html('Empty list');
    }
    });
}