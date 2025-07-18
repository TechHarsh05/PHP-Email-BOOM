window.addEventListener('DOMContentLoaded', () => {


    // Make functions global
    window.openPopup = function () {
        console.log("openPopup called");
        document.getElementById("emailPopup").style.display = "flex";
    };

    window.closePopup = function () {
        console.log("closePopup called");
        document.getElementById("emailPopup").style.display = "none";
    };

    window.submitEmail = function () {
        const email = document.getElementById("emailInput").value;
        if (email === "") {
            alert("Please enter an email address.");
        } else {
            alert("Email received: " + email);
            window.closePopup();
        }
    };
});
