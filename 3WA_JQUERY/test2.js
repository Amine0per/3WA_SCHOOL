$(document).ready(function(){
    $("button").click(function(){
        $("p").hide(1000,function(){
        alert("le paragraphe est maintenant caché")
        });

    });
});

//append ajoute du text dans lelement selectione apres le dernier mot , prepend ajout du text avant le premier mot after et before aajoutent avaant ou apres le contenu de lelement