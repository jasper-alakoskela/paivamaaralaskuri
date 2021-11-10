document.forms["count-down"].addEventListener("submit", changeCountDown);

function changeCountDown(e) {
    e.preventDefault();

    const dateAndTime = document.forms["count-down"]["date-and-time"].value;
    console.log(dateAndTime);
    console.log(typeof dateAndTime);

    const year = dateAndTime.slice(0, 4);
    console.log(year);
    const month = dateAndTime.slice(5, 7);
    console.log(month);
    const day = dateAndTime.slice(8, 10);
    console.log(day);
    const hour = dateAndTime.slice(11, 13);
    console.log(hour);
    const minute = dateAndTime.slice(14);
    console.log(minute);


    //const dateAndTimeArray = [];
    //window.location.href = "index.php?";
}