$(function () {
    let i = 0;
    let txt = 'Desenvolvedora web full stack'; /* The text */
    let speed = 80; /* The speed/duration of the effect in milliseconds */

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("dev-text").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }
    typeWriter();

    $(".menu-toggle").click(function () {
       $('header').toggleClass("menu-active");
    });
    $("nav li").click(function () {
        $('header').toggleClass("menu-active");
     });
});