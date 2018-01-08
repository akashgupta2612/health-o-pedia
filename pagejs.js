
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });



$(function () {
    $("[data-toggle=popover]")
    .popover({html:true});


$("#scro").click(function() {
    $('html,body').animate({
        scrollTop: $(".scrol").offset().top},
        'slow');
});

    // $(".ll").on('click', function() {
    // $(".po").toggle();})
    // $(".modal").on("hidden.bs.modal", function(){
    // $(".manage").value()="";
});



/*

	//Act on the event 
});*/


/*
$('#maps').mapit({
			latitude:    28.6304529,
            longitude:   77.3699043,
            zoom:        15,
            type:        'ROADMAP',
            scrollwheel: false,
            marker: {
                latitude:   28.6304529,
                longitude:  77.3699043,
                icon:       'download.jpg',
                title:      "Health-o-Pedia",
                open:       true,
                center:     true
            },
            address:   '<h5 class="text-center"><b>JIIT Noida</b></h5>' +
            '<p class="text-center">A-10, Sec-62, Noida, India</p>',
            styles:    'GRAYSCALE',
            locations: [],
            origins:   []
});




})*/
/*
$('#con1').carousel({
   interval: 3000

   
  })*/
/*var i=document.querySelector("#con1");
i.setInterval(2000);

function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("maps"),mapProp);
}
*/
/*
<script>
function validateMail() {
    var x = document.forms["signin"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}

function validatePass() {
        var pass1 = document.getElementById("pass").value;
        var pass2 = document.getElementById("rpass").value;
        if (pass1 != pass2) {
            alert("Passwords Do not match");
            document.getElementById("pass").style.borderColor = "#E34234";
            document.getElementById("rpass").style.borderColor = "#E34234";
        }
        
    }
    
    function validateDOB()
{
    var dob = document.forms["signin"]["dateofbirth"].value;
    var pattern = /^([0-9]{2})-([0-9]{2})-([0-9]{4})$/;
    if (dob == null || dob == "" || !pattern.test(dob)) {
        alert("Invalid Date of Birth");
    }
    }
    
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/
/*
var t=document.querySelector(".cli");
  var u=document.querySelector("#id01");

t.addEventListener("click",function show()
{
  
    u.slideUp(1000);
});*/

/*
var t=document.querySelector(".cli");
t.addEventListener("click",function go(){
    alert("u clicked me");
});*/
/*var t=document.querySelector(".vis")
t.addEventListener("hover",function sh(){
    this.slideToggle(slow);
});
sh();*/
/*

var t=document.querySelector(".but")
t.addEventListener("click",function go()
{
       //window.location.href="form.php";
       window.open("form.php");

});*/