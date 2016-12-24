# Bradshaw’s Guide For Tourists in Great Britain & Ireland (1866 Edition)

*A modern-day revival of a victorian classic.*

## Installation
1. `git clone git@github.com:paulrobertlloyd/bradshawsguide.git`
2. `git submodule update --init --recursive`

## Development
When developing the site, you may want assets automatically compiled and the browser to refresh automatically. To do this, run the following task:

* `gulp dev`

## Running locally with HTTPS
To run with HTTPS locally on macOS, you should follow the setup [as described here][5]. To create the required SSL certificates, follow these steps:

1. Open Terminal.app
2. Change into the correct directory: `cd Sites/bradshawsguide/etc/ssl`
3. Configure SSL:

  ```
  cat > openssl.cnf <<-EOF
    [req]
    distinguished_name = req_distinguished_name
    x509_extensions = v3_req
    prompt = no
    [req_distinguished_name]
    CN = *.bradshawsguide.dev
    [v3_req]
    keyUsage = keyEncipherment, dataEncipherment
    extendedKeyUsage = serverAuth
    subjectAltName = @alt_names
    [alt_names]
    DNS.1 = *.bradshawsguide.dev
    DNS.2 = bradshawsguide.dev
  EOF
  ```

4. Create the certificate files:

  ```
  openssl req \
    -new \
    -newkey rsa:2048 \
    -sha1 \
    -days 3650 \
    -nodes \
    -x509 \
    -keyout ssl.key \
    -out ssl.crt \
    -config openssl.cnf
  ```

5. Delete the configuration file: `rm openssl.cnf`

## Repo structure

```
bradshawsguide
├── etc/              # CONFIGURATION
│
├── src/              # SOURCE
│   ├── assets/
│   │   ├── fonts/    # Webfonts
│   │   ├── icons/    # Favicon and home screen icons
│   │   ├── images/   # Global bitmap images
│   │   ├── scripts/  # Global JavaScript files
│   │   ├── styles/   # Global CSS files
│   │   └── vectors/  # Global SVG images
│   │
│   ├── config/       # Kirby configuration
│   ├── content/      # Site content
│   ├── controllers/  # Template controllers
│   ├── models/       # Page models
│   ├── patterns/     # Template patterns
│   ├── plugins/      # Kirby plugins
│   ├── snippets/     # Template snippets
│   └── templates/    # Templates
│
├── www/              # COMPILED/RUNTIME
│   ├── (assets)      # Compiled assets (ignored by git)
│   ├── [kirby]       # Kirby [submodule]
│   ├── (thumbs)      # Thumbnail cache (ignored by git)
│   └── index.php     # Kirby launch script
│
├── .editorconfig     # Text editor preferences
├── .gitignore        # List of files not tracked by git
├── .gitmodules       # List of submodules tracked by git
├── .eshintrc         # JS linting preferences
├── .stylelintrc      # CSS linting preferences
├── gulpfile.js       # Configuration file for Gulp
├── package.json      # Project manifest
├── LICENSE           # Project license
└── readme.md         # This file
```

© 2013 [Paul Robert Lloyd](https://paulrobertlloyd.com)
