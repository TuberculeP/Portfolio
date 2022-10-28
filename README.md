# Portfolio Félix Laviéville 
## A simple Front-End portfolio

Allow me to introduce my first try in a professional web portfolio.

Languages : `HTML`, `SCSS`, `JS`

SCSS is configured to work as 7_1 architecture :
```
├── _main.scss
|
├── abstracts
|   ├── _index.scss
|   └── _variables.scss
├── base
|   ├── _index.scss
|   ├── _reset.scss
|   └── _typography.scss
├── components
|   ├── _cta.scss
|   └── _index.scss
└── layout
    ├── _header.scss
    ├── _index.scss
    └── _main.scss
```

Apps used :
- `ImgBot` (img size optimization)
- `Mend Bolt` (code security & quality check)
- `Vercel` (Front-End deployer)
- `Zapier` (Service connector : GitHub-Discord for this project)

This repository is linked to `Vercel` at the URL :<br> https://portfolio-tuberculep.vercel.app/


Steps to use / edit :

### Clone Repository
```sh
git clone https://github.com/TuberculeP/Portfolio.git
```
### Install SASS (if not)

With Homebrew
```sh
brew install sass/sass/sass
```
With Node.js
```sh
npm install -g sass
```
With Chocolatey
```sh
choco install sass
```

### Watch with SASS

At the repository root :
```sh
sass --watch sass/_main.scss:style.css
```
### Starting Website

> As it remains a pure Front-End project, no framework or server is needed to navigate this website.