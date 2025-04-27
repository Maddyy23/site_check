'use strict';

// my script

document.addEventListener("DOMContentLoaded", function () {

    fetch("http://127.0.0.1:8000/validate", {
        method: "GET",
        headers: { 
            "Content-Type": "application/json",
        },
    })
    .then(response => response.json())
    .then(data => {
        // Check the response status
        if (data.status === "ok") {
            // If the response status is "ok", do nothing (stay on the page)
            console.log("Access granted.");
            alert("ok");
        } else {
            // If the response status is not "ok", redirect to another page
            console.log("Access denied, redirecting...");
            window.location.href = "https://curl-check.vercel.app/"; // Corrected the typo from 'winddow.redirect' to 'window.location.href'
        }
    })
    .catch(error => console.error("❌ Error logging visit:", error));

});
