$(function() {
    $('#SkillsProfessionalRatingOptions').val($('#SkillsProfessionalRating').val());    
    $('#stars-wrapper').stars({
        inputType: "select",
        cancelValue: 0,
        callback: function(ui, type, value){
            $('#SkillsProfessionalRating').val(value);
        }
    });       
});