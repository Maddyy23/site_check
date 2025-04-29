export default function handler(req, res) {
    const userAgent = req.headers['user-agent'] || '';
  
    if (/curl|wget/i.test(userAgent)) {
      return res.status(403).send('Access denied');
    }
  
    res.setHeader('Content-Type', 'text/html');
    res.status(200).send(`
      <!DOCTYPE html>
      <html>
      <head>
        <title>My Site</title>
        <link rel="stylesheet" href="/assets/css/style.css">
      </head>
      <body>
        <h1>Welcome to my site!</h1>
        <script src="/assets/js/main.js"></script>
      </body>
      </html>
    `);
  }
  