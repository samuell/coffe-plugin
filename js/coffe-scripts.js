







/*-----------------------------------------------------------------------------
// THIS PAGE SHALL BE A REMINDER OF ALL THE STRUGGLE I HAD TRYING to
// IMPLEMENT CHANGES IN THE DOM, ALL OF WHICH WORDPRESS BLOCKED
// AFTER MANY A DAYS OF STRUGGLES I FINALLY FOUND A WAY TO SOLVE THE PROBLEM
// WITHOUT JAVASCRIPT! YIHAA!!!
-----------------------------------------------------------------------------*/



/*
jQuery(function ($) {
//You can safely use $ in this code block to reference jQuery



    $('.imgbtn').click(function(event){
        console.log(event.target.id);

        var clickedId = event.target.id;
        
        // Removing anything but id-number
        clickedId = clickedId.replace('imgbtn', '');

        $('#textarea').val(clickedId);

        alert($('#textarea').val());



    });
});
*/




/*jQuery(function ($) {
// You can safely use $ in this code block to reference jQuery

$('.imgbtn').click(function(event){

    var clickedId = event.target.id;
    
    // Removing anything but id-number
    clickedId = clickedId.replace('imgbtn', '');

    
    var str = document.getElementById('textarea').innerHTML;
    var changeText = str.replace('texttochange', 'haha');
    document.getElementById('texttochange').innerHTML = changeText;
    
    alert(clickedId);

});
});*/





/*var imgbtn = document.getElementsByClassName('imgbtn')[0];

for (var i = 0; i < imgbtn.length; i++) {
    document.getElementsByClassName('imgbtn')[i].addEventListener('click', function() {
        alert('hahahahahahahah');
    });
}


document.getElementsByClassName('imgbtn')[1].addEventListener('click', function(event) {
    alert('haha');
}
);*/







/*function selectImage(clickedId) {

    // Removing anything but id-number
    clickedId = clickedId.replace('imgbtn', '');

    var inputfieldValue;
    inputfieldValue = document.getElementById('image-select').value;

    // Setting element value-attribute to id-number
    inputfieldValue = clickedId;
    
    document.getElementById('image-select').value = inputfieldValue;
}*/







/*
function selectImage(clickedId) {


    imgbtnimgbtn.className;


    document.addEventListener('click', function(event) {
        alert('haha');
    } );

}*/




/*imgbtn.addEventListener('click', function(event) {
    alert('haha');
}
);*/


/*for (var i = 0; i < imgbtn.length; i++) {
    imgbtn[i].addEventListener('click', myFunction);
}*/
/*
document.getElementById('imgbtn').addEventListener('click', displayDate) {}


function displayDate() {
    document.getElementsByClassName('image-select').innerHTML = Date();
}


    alert( 'event.srcElement.id' );
imgbtn.addEventListener('click', function(event) {

document.getElementById('image-select').value = event.srcElement.id;
    alert( event.srcElement.id );
});*/


/*
function selectImage(clickedId) {

    // Removing anything but id-number
    clickedId = clickedId.replace('imgbtn', '');

    // Setting element value-attribute to id-number
    document.getElementById('image-select').value = clickedId;


    var newValue = document.getElementById('image-select').value;

    console.log(document.getElementById('image-select').value);

}*/

/*function selectImage(clickedId) {

    alert('ute');


$(document).ready(function(){
    $('#'+clickedId).click(function(){
        $('#image-select').val('Glenn Quagmire');
    alert('innerst inne!');
    });
    alert('inne!');
});


}*/
  

