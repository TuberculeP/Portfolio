# Portfolio Félix Laviéville 
## A simple Front-End portfolio

Allow me to introduce my first try in a professional web portfolio.

Languages : `PHP`, `HTML`, `SCSS`, `JS`

SCSS is configured to work as 7_1 architecture :
```
├── main.scss
|
├── abstracts
│   ├── _index.scss
│   └── _variables.scss
├── base
│   ├── _index.scss
│   ├── _reset.scss
│   └── _typography.scss
├── components
│   ├── _canvas.scss
│   ├── _cta.scss
│   ├── _h1.scss
│   ├── _index.scss
│   ├── _nav_a.scss
│   └── _paragraph.scss
└── layout
    ├── _aside.scss
    ├── _header.scss
    ├── _index.scss
    ├── _main-project.scss
    └── _main.scss
```

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
sass --watch sass/main.scss:style.css
```
### Starting Website

You'll need PHP 8+ to start this project.

Consider install `valet` or `MAMP/XAMP` to monitor and start website.