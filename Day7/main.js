
// . is used to class name
// # is used to id name
// tag name is used html tag element

// $("tagname") - to select all the elements with tag name  - returns  tagname elements
// $(".classname") - to select all the elements with class name  - returns  classname elements
// $("#idname") - to select all the elements with id name  - returns  idname elements





$(".header_one").html("Hello Somalia");
$(".header_two").css("color", "red");


// event of jquery 

$("button").click(function(){
    $("body").css("background" , "red" );
    $("body").css("margin" , "20px" );
    $("body").css("fontFamily" , "Segoe UI  Regular Expressions");
    $("body").css("text-align" , "center");
  
    $(".header_one ").css("color", "green");
    $(".header_two ").css("color", "green");
  
})

$("body").css("margin" , "20px" );


$("button").css("fontSize", " 12px");
$("button").css("padding" , "10px");
