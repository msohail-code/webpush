$(document).ready(function(){ 
    $('.drop-down').click( function(e) { 
        e.preventDefault(); 
        e.stopPropagation(); 
        $('.drop-down > ul').toggle();
        $('.drop-down').css("background","#efe");
    });
    $('.drop-down > ul').click( function(e) {
        e.stopPropagation();
    });
    $('body').click( function() {
        $('.drop-down ul').hide();
        $('.drop-down').css("background","none");
    });
});

$(document).ready(function(){ 
    $('.menu-icon').click(function() {
        $('.navbar').slideToggle();
    });
    
    $("#give-answer").keyup(function() {
    if($(this).val().length == 0) {
         $('.next-question').css("display","none");
    } else if($(this).val().length > 0) {
         $('.next-question').css("display","block");
    }
});
});
jQuery(document).ready(function(){
    
  jQuery('.select-question').click(function () {
     var $checkboxes = $('input[type="checkbox"]#mycheck');
      var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
    if (this.id == 'check') {
       if(countCheckedCheckboxes>=7){
           alert("You are unable to select more than 7 questions");
       }
        else{ 
        $(this).attr("id","uncheck");
        $(this).children("span").html("Rmove");
        
        $(this).children("#mycheck").prop("checked", true);
        $("#count-question").html(++countCheckedCheckboxes);
       }
    }
    else if (this.id == 'uncheck') {
        
        $(this).attr("id","check");
            $(this).children("span").html("Select");
        $(this).children("#mycheck").prop("checked", false);
        $("#count-question").html(--countCheckedCheckboxes)
        
    }
});
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("add-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

