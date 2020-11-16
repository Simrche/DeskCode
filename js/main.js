// POP UP -------------------------------------------------------------------------
$(".signUpBg").hide();
$(".logInBg").hide();
var tlSign = new TimelineMax();
var tlLog = new TimelineMax();
$('.signUpBut').click(function () {
    tlSign.staggerFrom('.signUpBg', 0, { x: 0, y: 0, opacity: 0 });
    tlSign.staggerFrom('.signUp', 0.8, { x: 0, y: 100, opacity: 0 });
    $(".signUpBg").show();

    // $pseudo = document.getElementById(".pseudo").value;
    // $email = document.getElementById(".email").value;
    // $mdp = document.getElementById(".mdp").value;
    // $mdpVerif = document.getElementById(".mdpVerif").value;

    // // pour pouvoir afficher/activer le bouton
    // if ($pseudo.lenght > 0 && $email.lenght > 0 && $mdp.lenght > 0 && $mdpVerif.lenght > 0) {
    //     console.log("wsh");
    //     $(".subBut").show();
    // }

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


// tlCo.staggerFrom('.signUpBg', 0.1, { x: 0, y: 0, opacity: 0 });




// 

// pour pouvoir afficher/activer le bouton
if ($pseudo.lenght>0 && $email.lenght>0 && $mdp.lenght>0 && $mdpVerif.lenght>0) {
    $(".that").show(); 
}

