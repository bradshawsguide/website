# Bradshaw’s Guide For Tourists in Great Britain & Ireland

*Let this digital revival of a Victorian favourite be your guide to Britain and Ireland’s burgeoning railway network, as it existed in 1866.*

## Installation

1. `git clone git@github.com:bradshawsguide/website.git`
2. `cd website`
3. `git submodule update --init --recursive`
4. `mkdir public/cache`
5. `npm install`
6. `npm run build`

Generated assets will be saved in the `public` directory.

### Updating submodules

This project makes use of third-party libraries, included as git submodules. To update these, run `git submodule foreach git pull origin master`.

### Running locally

To run locally on macOS use [Laravel Herd](https://herd.laravel.com/), a one click PHP development environment with zero dependencies.

When developing the site, you can automatically compile assets and refresh the browser. To do this, run `npm run dev`.

## Repo structure

```text
website
├── site                        # SOURCE
│   ├── blueprints              # Kirby panel blueprints
│   ├── config                  # Kirby configuration
│   ├── [content]               # Site content [submodule]
│   ├── controllers             # Kirby template controllers
│   ├── models                  # Kirby page models
│   ├── plugins                 # Kirby plugins
│   ├── snippets                # Template snippets
│   └── templates               # Kirby templates
│
├── public                      # PUBLIC
│   ├── index.php               # Kirby launch script
│   └── assets
│       ├── fonts               # Web fonts
│       ├── icons               # Favicon and home screen icons
│       ├── images              # Raster images
│       ├── scripts             # JavaScript
│       ├── styles              # CSS styles
│       └── vectors             # Vector images
│
├── .editorconfig               # Text editor preferences
├── .gitignore                  # List of files not tracked by git
├── .gitmodules                 # List of submodules tracked by git
├── .htaccess                   # Apache server config
├── .nvmrc                      # Node version to use
├── composer.lock               # Composer manifest lock file
├── composer.json               # Composer manifest
├── package-lock.json           # NPM manifest lock file
├── package.json                # NPM manifest
├── LICENSE                     # Project license
├── readme.md                   # This file
└── vite.config.js              # Vite config
```

© 2013 [Paul Robert Lloyd](https://paulrobertlloyd.com)
