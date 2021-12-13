window.addEventListener("load", getCountdowns);

document.getElementById("ongoing-countdowns").addEventListener("click", openCountdown);
document.getElementById("expired-countdowns").addEventListener("click", openCountdown);

let data = null;

function getCountdowns() {
    console.log("haetaan dataa");
    let ajax = new XMLHttpRequest();
    ajax.onload = function () {
        data = JSON.parse(this.responseText);
        showCountdowns(data);
    }
    ajax.open("GET", "backend/getCountdown.php");
    ajax.send();
}

function showCountdowns(data, type) {


    const ongoingCountdown = document.getElementById("ongoing-countdowns");
    ongoingCountdown.innerHTML = "";

    const expiredCountdown = document.getElementById("expired-countdowns");
    expiredCountdown.innerHTML = "";

    const now = new Date();

    data.forEach(countdown => {

        let datetime = new Date(countdown.datetime);

        if (type == "ongoing") {
            if (datetime > now) {
                createLink(ongoingCountdown, countdown.id, countdown.name, countdown.datetime, countdown.backgroundcolor, countdown.namecolor, countdown.panelcolor, countdown.timercolor);
            }
        }

        if (type == "expired") {
            if (datetime < now) {
                createLink(expiredCountdown, countdown.id, countdown.name, countdown.datetime, countdown.backgroundcolor, countdown.namecolor, countdown.panelcolor, countdown.timercolor);
            }
        }
    });
}

function createLink(targetUL, countdownId, countdownName, countdownDatetime, countdownBackgroundColor, countdownNameColor, countdownPanelColor, countdownTimerColor) {

    const newLi = document.createElement("li");
    newLi.classList.add("list-group-item");
    newLi.dataset.countdownid = countdownId;//countdown id

    const newCard = document.createElement("div");
    newCard.classList.add("card");
    newCard.classList.add("border-light");
    newCard.classList.add("mb-3");
    newCard.style = "max-width: 17rem";

    const newCardHeader = document.createElement("div");
    newCardHeader.classList.add("card-header");
    newCardHeader.style.background = countdownPanelColor;
    newCardHeader.style.color = countdownNameColor;

    const cardHeaderText = document.createTextNode(countdownName);//countdown name

    const newCardBody = document.createElement("div");
    newCardBody.classList.add("card-body");
    newCardBody.style.background = countdownBackgroundColor;

    const newCardTitle = document.createElement("h4");
    newCardTitle.style.color = countdownTimerColor;
    newCardTitle.classList.add("card-title");

    const cardTitleText = document.createTextNode(countdownDatetime);//countdown datetime

    newCardTitle.appendChild(cardTitleText);
    newCardBody.appendChild(newCardTitle);

    newCardHeader.appendChild(cardHeaderText);

    newCard.appendChild(newCardHeader);
    newCard.appendChild(newCardBody);

    newLi.appendChild(newCard);

    targetUL.appendChild(newLi);
}

function openCountdown(e) {
    console.log(e.target.dataset.countdownid);

    //window.location.href = "countdown.php?id=" + e.target.dataset.countdownid;
}