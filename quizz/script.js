// nQ = Numéro question
// Q = Question
// R = Réponse réelle
// r = Propositions

$(document).ready(function () {

});

var mettage = $('.quizz');

$.getJSON('./tab.json', function (json) {
    nbrQ = Object.keys(json).length;
});

function nombreAlea(min, max) {
    return Math.floor(Math.random() * max + min);
}

function getQuestion(num) {
    $.getJSON('./tab.json', function (json) {
        $('<p class="question">' + json[num].Q + '</p>').appendTo(mettage);
    })
}

function getReponse(num) {
    $.getJSON('./tab.json', function (json) {
        var nbrReponses = Object.keys(json[num]['r']).length;
        for (var e = 0; e < nbrReponses; e++) {
            $('<input type="radio" name="' + json[num].nQ + '" value="' + json[num].nQ + json[num].r[e] + '"> ' + json[num].r[e] + '<br />').appendTo(mettage);
            //  Ajout d'un numero d'identification pour la question
        }
    })
}
function tirageQuestion() {
    return nombreAlea(1, nbrQ);
}

function getQR(num) {
    mettage.empty();
    getQuestion(num);
    getReponse(num);
}