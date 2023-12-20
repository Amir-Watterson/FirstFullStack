document.addEventListener("DOMContentLoaded", function () {
    let countdown = 5;

    function updateCountdown() {
        document.getElementById("countdown").textContent = countdown;
    }

    function redirect() {
        if (countdown > 0) {
            countdown--;
            updateCountdown();
            setTimeout(redirect, 1000);
        } else {
            window.location.href = "/EnteredBuyData/enteredmain.php";
        }
    }

    setTimeout(redirect, 1000);
});