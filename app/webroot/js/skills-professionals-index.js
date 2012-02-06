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
    url: firstLevel+'/skills/getSkillsList',
    dataType: 'text',
    success: function(skills){
        $('#sidebar').html(skills);
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
            
            skillId = element.attr('skill_id');
            professionalId = $("#fkid" ).val();
            if ( professionalId > 0  && skillId > 0 ) { 
                $.ajax({
                async: false,
                type: "POST",
                url: firstLevel+'/skillsprofessionals/add',
                dataType: 'text',
                data: "skill_id=" + skillId  + '&' +
                    "professional_id=" + professionalId,
                success: function(id){
                    skillsProfessionals = id;
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
    url: firstLevel+'/skillsprofessionals/display',
    dataType: 'text',
    data: "fkfield=" + fkfield + '&' + 
          "fkid=" + fkid,    
    success: function(grid){
        $('#skillsProfessionals').html(grid);
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
        $('#skillsProfessionals').html('Empty list');
    }
    });
}