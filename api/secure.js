export default function handler(req, res) {
  const userAgent = req.headers['user-agent'] || ''

  if (/curl|wget/i.test(userAgent)) {
    res.status(403).send('Access Denied')
    return
  }

  res.status(200).send('Welcome')
}
