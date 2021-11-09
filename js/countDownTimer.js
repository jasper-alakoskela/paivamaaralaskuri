//Aika mihin lasketaan
let countdownDate = new Date("").getTime();

//Päivitetään joka sekunti
let update = setInterval(function () {

    //Tämä päivä ja aika
    let now = new Date().getTime();

    //Tämänhetkinen aika miinus aika mihin lasketaan 
    let distance = countdownDate - now;

    //Aika laskelmat
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    //Näytetään tulos
    document.getElementById("timer").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

    //Jos lähtölaskenta on jo mennyt ilmoitetaan
    if (distance < 0) {
        clearInterval(update);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);