
const queryString = window.location.search;
console.log(queryString);

const year = queryString.slice(15, 19);
console.log(year);

//Pitää muuttaa kuukautta koska js laskee kuukaudet 0-11
let month = queryString.slice(20, 22);
month = parseInt(month, 10);
month = month - 1;
console.log(month);

const day = queryString.slice(23, 25);
console.log(day);

const hour = queryString.slice(26, 28);
console.log(hour);

const minute = queryString.slice(31);
console.log(minute)


//Aika mihin lasketaan
let countdownDate = new Date(year, month, day, hour, minute).getTime();

//console.log(countdownDate);

//Päivitetään joka sekunti
let update = setInterval(function () {

    //Tämä päivä ja aika
    let now = new Date().getTime();
    //console.log(now);

    //Tämänhetkinen aika miinus aika mihin lasketaan 
    let distance = countdownDate - now;
    //console.log(distance);

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