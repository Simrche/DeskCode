// POP UP -------------------------------------------------------------------------
$(".that").hide();

$('.this').click(function(){
    $(".that").show();
});


// 
document.getElementById(".pseudo").value=$pseudo;
document.getElementById(".email").value=$email;
document.getElementById(".mdp").value=$mdp;
document.getElementById(".mdpVerif").value=$mdpVerif;

// pour pouvoir afficher/activer le bouton
if ($pseudo.lenght>0 && $email.lenght>0 && $mdp.lenght>0 && $mdpVerif.lenght>0) {
    $(".that").show(); 
}