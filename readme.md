# Bradshaw’s Guide For Tourists in Great Britain & Ireland

*Let this digital revival of a Victorian favourite be your guide to Britain and Ireland’s burgeoning railway network, as it existed in 1866.*

## Installation

1. `git clone git@github.com:bradshawsguide/website.git`
2. `cd website`
3. `git submodule update --init --recursive`
4. `mkdir public/cache`
5. `npm install`
6. `npm build`

Generated assets will be saved in the `public` directory.

## Development

When developing the site, you may want assets automatically compiled and the browser to refresh automatically. To do this, run `npm run watch`.

### Updating submodules

This project makes use of third-party libraries, included as git submodules. To update these, run `git submodule foreach git pull origin master`.

### Running locally with HTTPS

To run with HTTPS locally on macOS use [Laravel Herd](https://herd.laravel.com/), a one click PHP development environment with zero dependencies

## Repo structure

```text
website
├── etc                         # CONFIGURATION
│   ├── browser-sync.config.js  # BrowserSync configuration
│   └── rollup.config.js        # Rollup configuration
│
├── site                        # SOURCE
│   ├── blueprints              # Kirby panel blueprints
│   ├── config                  # Kirby configuration
│   ├── [content]               # Site content [submodule]
│   ├── controllers             # Kirby template controllers
│   ├── models                  # Kirby page models
│   ├── [patterns]              # Template patterns [submodule]
│   ├── plugins                 # Kirby plugins
│   └── templates               # Kirby templates
│
├── public                      # COMPILED/RUNTIME
│   └── index.php               # Kirby launch script
│
├── .editorconfig               # Text editor preferences
├── .gitignore                  # List of files not tracked by git
├── .gitmodules                 # List of submodules tracked by git
├── composer.lock               # Composer manifest lock file
├── composer.json               # Composer manifest
├── package-lock.json           # NPM manifest lock file
├── package.json                # NPM manifest
├── LICENSE                     # Project license
└── readme.md                   # This file
```

© 2013 [Paul Robert Lloyd](https://paulrobertlloyd.com)
