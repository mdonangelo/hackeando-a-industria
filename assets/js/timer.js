// TIMER
    // Contdown Time - Datas em milisegundos
    var targetDate = new Date('2020-06-23T17:00:00-03:00');

    var countDownDate = targetDate.getTime();
    var now = Date.now();

    // Update the count down every 1 second
    var x = setInterval(function() {
    now = now + 1000;
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("contTime").innerHTML = 
        "<div class='block-time title-timer'><span>Lançamento das lives em:</span></div>" +
        "<div class='block-time'>" + 
        days + "<span>dia(s)</span></div> <div class='block-time'>" + 
        hours + "<span>hora(s)</span> </div> <div class='block-time'>" + 
        minutes + "<span>minuto(s)</span> </div> <div class='block-time'>" + 
        seconds + "<span>segundo(s).</span></div>";
    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("contTime").innerHTML = "<span>Lançado!</span>";
    }

    }, 1000);