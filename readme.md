# Bradshaw’s Guide For Tourists in Great Britain & Ireland

*Let this digital revival of a Victorian favourite be your guide to Britain and Ireland’s burgeoning railway network, as it existed in 1866.*

## Installation

1. `git clone git@github.com:bradshawsguide/website.git`
2. `cd website`
3. `git submodule update --init --recursive`
4. `mkdir www/cache`
5. `npm install`
6. `npm build`

Generated assets will be saved in the `www` directory.

## Development

When developing the site, you may want assets automatically compiled and the browser to refresh automatically. To do this, run `npm run dev`.

### Updating submodules

This project makes use of third-party libraries, included as git submodules. To update these, run `git submodule foreach git pull origin master`.

### Running locally with HTTPS

To run with HTTPS locally on macOS first [follow the setup steps described here](https://gist.github.com/jed/6147872). To create the required SSL certificates, follow these steps:

1. Change into the correct directory: `cd etc/ssl`
2. Create the certificate files:

  ```sh
  openssl req \
    -new \
    -newkey rsa:2048 \
    -sha256 \
    -days 3650 \
    -nodes \
    -x509 \
    -keyout test.key \
    -out test.crt \
    -subj /CN=bradshaws.test \
    -reqexts SAN \
    -extensions SAN \
    -config <(cat /System/Library/OpenSSL/openssl.cnf \
      <(printf '[SAN]\nsubjectAltName=DNS:bradshaws.test'))
  ```

## Repo structure

```text
bradshawsguide
├── etc                # CONFIGURATION
│   ├── nginx          # Nginx server
│   └── (ssl)          # SSL certificates (ignored by git)
│
├── src                # SOURCE
│   ├── config         # Kirby configuration
│   ├── [content]      # Site content [submodule]
│   ├── controllers    # Template controllers
│   ├── models         # Page models
│   ├── [patterns]     # Template patterns [submodule]
│   ├── plugins        # Kirby plugins
│   ├── snippets       # Template snippets
│   ├── tags           # Kirbytext tags
│   └── templates      # Templates
│
├── www                # COMPILED/RUNTIME
│   ├── (assets)       # Compiled assets (ignored by git)
│   ├── (cache)        # Cache files (ignored by git)
│   ├── [kirby]        # Kirby [submodule]
│   ├── (thumbs)       # Thumbnail cache (ignored by git)
│   └── index.php      # Kirby launch script
│
├── .editorconfig      # Text editor preferences
├── .gitignore         # List of files not tracked by git
├── .gitmodules        # List of submodules tracked by git
├── gulpfile.js        # Configuration file for Gulp
├── package-lock.json  # Package lock file
├── package.json       # Package manifest
├── LICENSE            # Project license
└── readme.md          # This file
```

© 2013 [Paul Robert Lloyd](https://paulrobertlloyd.com)
