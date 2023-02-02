//this will not work atfer changing $ to jq to avoid conflicts
//this will not work atfer changing $ to jq to avoid conflicts
$(document).ready(function() {
    $("button").click(function() {
$("p#premier").text("Bonsoir a tous");
$("p.deuxieme").css("background-color","purple");
$("[href='https://www.google.com/%27]").css("background-color","black");
$("[href='https://www.youtube.com/%27]").css("background-color","black");
    });

    $("tr:odd").css("background-color","red");
    $("tr:even").css("background-color","yellow");
    $("p:first").css("background-color","red");
    $("p:last").css("background-color","blue");

    $("form :text").css("background","purple");
    $("form :password").css("background","blue");


});
let jq=jQuery.noConflict();
jq(document).ready(function() {


    jq("button").click(function() {
        jq("p#sec").text("les nouvelles fcts");
    });


    jq("tr:odd").css("background-color","red");
    jq("tr:even").css("background-color","yellow");
    jq("p:first").css("background-color","red");
    jq("p:last").css("background-color","blue");

    jq("form :text").css("background","purple");
    jq("form :password").css("background","blue");


});
jq(document).ready(function() {
jq("#cacher").click(function() {

jq("#Intro").hide("slow");

});
jq("#voir").click(function() {

    jq("#Intro").show(2000);              //.toggle() fera la meme chose avec un seul bouton
    
    });


    jq(".flip").click(function(){
        jq(".panel").slideDown(2000);
        
    });
    jq(".flip").click(function(){
        jq(".panel").slideUp(2000);
        
    });

    
});