<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Access Denied</title>
    <style>
        body {
            background-color: black;
            color: red;
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            margin: 0;
        }
        h1 {
            font-size: 50px;
            margin-bottom: 20px;
            animation: blink 1s infinite;
        }
        p {
            font-size: 22px;
        }
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0.3; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <div id="content">
        <!-- Your normal homepage content goes here -->
        <h1>Welcome to My Website!</h1>
        <p>This is a publicly accessible homepage.</p>
    </div>
    <script>
        window.onload = function() {
            const userAgent = navigator.userAgent.toLowerCase();
            
            // List of User-Agent strings we want to block
            const suspiciousUserAgents = ['wget', 'curl', 'termux'];

            let isSuspicious = false;
            suspiciousUserAgents.forEach(agent => {
                if (userAgent.includes(agent)) {
                    isSuspicious = true;
                }
            });

            if (isSuspicious) {
                // Hide the regular content
                document.getElementById('content').style.display = 'none';
                
                // Show the "You have been tracked" message
                document.body.innerHTML = `
                    <h1>🚨 ACCESS DENIED 🚨</h1>
                    <p>Your suspicious request has been blocked and logged.</p>
                `;
            }
        };
    </script>
</body>
</html>
