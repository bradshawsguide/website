module.exports = {
  files: 'www/assets',
  proxy: 'https://bradshaws.test',
  open: false,
  https: {
    key: './etc/ssl/localhost.key',
    cert: './etc/ssl/localhost.crt'
  }
};
