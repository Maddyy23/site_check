'use strict';

document.addEventListener("DOMContentLoaded", function () {

    fetch("https://curl-check.vercel.app/validate", {  // Ensure the URL is correct and includes the scheme (http:// or https://)
        method: "GET",
        headers: { 
            "Content-Type": "application/json",
        },
    })
    .then(response => response.json())  // Ensure response is parsed as JSON
    .then(data => {
        // Check the response status
        if (data.status === "ok") {
            // If the response status is "ok", do nothing (stay on the page)
            console.log("Access granted.");
            alert("Access granted.");
        } else {
            // If the response status is not "ok", redirect to another page
            console.log("Access denied, redirecting...");
            window.location.href = "https://site-check-six.vercel.app/";  // Corrected the redirection URL
        }
    })
    .catch(error => {
        console.error("❌ Error logging visit:", error);
        alert("An error occurred while checking access.");
    });

});
