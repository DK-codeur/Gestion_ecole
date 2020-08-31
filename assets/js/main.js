$(document).ready(function () {
    var nivVal = $('#niveau').val(); 
    var numVal = $('#numerotation').val();

    
    $('#niveau').change(function() {
        $('.live').html() = nivVal + 'niv';
        // console.log('niveau');
    })

    $('#numerotation').change(function() {
        $('.live').html() += nivVal + 'num';
        // console.log('num');
    })
});