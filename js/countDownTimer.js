
let name = document.getElementById("name");
let backGround = document.getElementById("background");
let panel = document.getElementById("panel");
let timer = document.getElementById("timer");

// lähtölaskenta laskuri

const queryString = window.location.search;
console.log(queryString);

let year = queryString.slice(15, 19);
console.log(typeof year);

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
console.log(minute);

//Aika mihin lasketaan

let countdownDate = new Date(year, month, day, hour, minute).getTime();

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
    timer.innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

    //Jos lähtölaskenta on jo mennyt ilmoitetaan
    if (distance < 0) {
        clearInterval(update);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);




//color picker

const pickr1 = Pickr.create({
    el: '.color-picker-1',
    theme: 'nano', // or 'monolith', or 'nano'
    default: '#303030',

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            input: true,
            clear: true,
            save: true
        }
    }
});

pickr1.on('change', (...args) => {
    let colors = args[0].toRGBA();
    backGround.style.backgroundColor = `rgba(${colors[0]},${colors[1]},${colors[2]},${colors[3]})`;
});

//pickr 2
const pickr2 = Pickr.create({
    el: '.color-picker-2',
    theme: 'nano', // or 'monolith', or 'nano'
    default: '#ffffff',

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            input: true,
            clear: true,
            save: true
        }
    }
});

pickr2.on('change', (...args) => {
    let colors = args[0].toRGBA();
    name.style.color = `rgba(${colors[0]},${colors[1]},${colors[2]},${colors[3]})`;
});

//pickr3

const pickr3 = Pickr.create({
    el: '.color-picker-3',
    theme: 'nano', // or 'monolith', or 'nano'
    default: '#444444',

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            input: true,
            clear: true,
            save: true
        }
    }
});

pickr3.on('change', (...args) => {
    let colors = args[0].toRGBA();
    panel.style.backgroundColor = `rgba(${colors[0]},${colors[1]},${colors[2]},${colors[3]})`;
});

//pickr4

const pickr4 = Pickr.create({
    el: '.color-picker-4',
    theme: 'nano', // or 'monolith', or 'nano'
    default: '#ffffff',

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            input: true,
            clear: true,
            save: true
        }
    }
});

pickr4.on('change', (...args) => {
    let colors = args[0].toRGBA();
    timer.style.color = `rgba(${colors[0]},${colors[1]},${colors[2]},${colors[3]})`;
});