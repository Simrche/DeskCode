// POP UP -------------------------------------------------------------------------
$(".signUpBg").hide();
$(".logInBg").hide();
$(".forbidenPopUpBg").hide();
var tlSign = new TimelineMax();
var tlLog = new TimelineMax();
var tlForbid = new TimelineMax();
$('.signUpBut').click(function () {
    tlSign.staggerFrom('.signUpBg', 0, { x: 0, y: 0, opacity: 0 });
    tlSign.staggerFrom('.signUp', 0.8, { x: 0, y: 100, opacity: 0 });
    $(".signUpBg").show();

});

$('.closeBut').click(function () {
    $(".signUpBg").hide();
});

$('.logInBut').click(function () {
    tlLog.staggerFrom('.logInBg', 0, { x: 0, y: 0, opacity: 0 });
    tlLog.staggerFrom('.logIn', 0.8, { x: 0, y: 100, opacity: 0 });
    $(".logInBg").show();
});
$('.closeBut').click(function () {
    $(".logInBg").hide();
});

$('.forbidenAccess').click(function () {
    tlForbid.staggerFrom('.forbidenPopUpBg', 0, { x: 0, y: 0, opacity: 0 });
    tlForbid.staggerFrom('.forbidenPopUp', 0.8, { x: 0, y: 100, opacity: 0 });
    $(".forbidenPopUpBg").show();
});
$('.connectFromForbid').click(function () {
    $(".forbidenPopUpBg").hide();
});


// tlCo.staggerFrom('.signUpBg', 0.1, { x: 0, y: 0, opacity: 0 });

// var changement = document.getElementById('choix_jeu');
// if(isset(changement.value)) {
//     console.log('salut')
// }

// // pour pouvoir afficher/activer le bouton
// if ($pseudo.lenght>0 && $email.lenght>0 && $mdp.lenght>0 && $mdpVerif.lenght>0) {
//     $(".that").show(); 
// }

// Fonction pour gérer le changement de classe pour le mode sombre

$('.LDswitch').click(function () {

    if ($('body').attr('class') == "light-theme") {
        $("body").removeClass('light-theme');
        $("body").addClass('dark-theme');
    }
    else {
        $("body").removeClass('dark-theme');
        $("body").addClass('light-theme');
    }

});