# Bradshaw’s Handbook

*A modern-day revival of a victorian classic.*

## Requirements
[TBD]

## Installation
1. `git clone git@github.com:paulrobertlloyd/bradshawsguide.git`
2. `git submodule update --init --recursive`

## Development
When developing the site, you may want assets automatically compiled and the browser to refresh automatically. To do this, run the following task:

* `gulp dev`

## Repo structure
Sometimes it’s helpful to know what all these files are for…

```
bradshawsguide
├── etc/              # CONFIGURATION
│
├── src/              # SOURCE
│   ├── assets/
│   │   ├── icons/    # Favicon and home screen icons
│   │   ├── props/    # Global design properties
│   │   ├── scripts/  # Global JavaScript files
│   │   ├── styles/   # Global CSS files
│   │   └── vectors/  # Global SVG images, icons and logos
│   │
│   ├── config/       # Kirby configuration
│   ├── content/      # Site content
│   ├── controllers/  # Template controllers
│   ├── models/       # Page models
│   ├── patterns/     # Template patterns
│   ├── plugins/      # Kirby plugins
│   ├── snippets/     # Template snippets
│   ├── tags/         # Kirbytext tags
│   └── templates/    # Templates
│
├── www/              # COMPILED/RUNTIME
│   ├── (assets)      # Compiled assets (not tracked by git)
│   ├── [kirby]       # Kirby [submodule]
│   ├── (thumbs)      # Thumbnail cache (not tracked by git)
│   └── index.php     # Kirby launch script
│
├── .editorconfig     # Text editor preferences
├── .gitignore        # List of files not tracked by git
├── .eshintrc         # JS linting preferences
├── .htmllintrc       # HTML linting preferences
├── .stylelintrc      # CSS linting preferences
├── gulpfile.js       # Configuration file for Gulp
├── package.json      # Project manifest
├── LICENSE           # Project license
└── readme.md         # This file
```

© 2013 [Paul Robert Lloyd](https://paulrobertlloyd.com)
