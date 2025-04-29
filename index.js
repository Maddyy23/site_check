export default function handler(req, res) {
  const userAgent = req.headers['user-agent'] || '';

  if (/curl|wget/i.test(userAgent)) {
    res.status(403).send('Access denied');
    return;
  }

  // This is your actual HTML page
  res.status(200).send(`
    <!DOCTYPE html>
    <html>
    <head>
      <title>My Site</title>
      <link rel="stylesheet" href="/assets/css/style.css">
    </head>
    <body>
      <h1>Welcome to My Secure Site</h1>
      <script src="/assets/js/main.js"></script>
    </body>
    </html>
  `);
}
