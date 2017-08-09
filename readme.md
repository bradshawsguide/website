# Bradshaw’s Guide For Tourists in Great Britain & Ireland

*A modern-day revival of a Victorian classic (1866 edition)*

## Installation
1. `git clone git@github.com:paulrobertlloyd/bradshawsguide.git`
2. `git submodule update --init --recursive`

## Development
When developing the site, you may want assets automatically compiled and the browser to refresh automatically. To do this, run the following task:

* `gulp dev`

## Updating submodules
This project makes use of third-party libraries, included as git submodules. To update these, run `git submodule foreach git pull origin master`.

## Running locally with HTTPS
To run with HTTPS locally on macOS, you should follow the setup [as described here](https://gist.github.com/jed/6147872). To create the required SSL certificates, follow these steps:

1. Open Terminal.app
2. Change into the correct directory: `cd Sites/bradshaws/etc/ssl`
3. Create the certificate files:

  ```
  openssl req \
    -new \
    -newkey rsa:2048 \
    -sha256 \
    -days 3650 \
    -nodes \
    -x509 \
    -keyout dev.key \
    -out dev.crt \
    -subj /CN=bradshaws.dev \
    -reqexts SAN \
    -extensions SAN \
    -config <(cat /System/Library/OpenSSL/openssl.cnf \
      <(printf '[SAN]\nsubjectAltName=DNS:bradshaws.dev'))
  ```

## Repo structure

```
bradshawsguide
├── etc/              # CONFIGURATION
│   ├── nginx/        # Nginx server
│   └── ssl/          # SSL certificates (ignored by git)
│
├── src/              # SOURCE
│   ├── assets/
│   │   ├── fonts/    # Webfonts
│   │   ├── icons/    # Favicon and home screen icons
│   │   ├── scripts/  # Global JavaScript files
│   │   ├── styles/   # Global CSS files
│   │   └── vectors/  # Global SVG images
│   │
│   ├── config/       # Kirby configuration
│   ├── content/      # Site content
│   ├── controllers/  # Template controllers
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
├── gulpfile.js       # Configuration file for Gulp
├── package-lock.json # Package lock file
├── package.json      # Package manifest
├── LICENSE           # License (TBD)
└── readme.md         # This file
```

© 2013 [Paul Robert Lloyd](https://paulrobertlloyd.com)
