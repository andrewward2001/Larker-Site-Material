# LARKer Site Material Theme

### See the original project on GitHub - https://github.com/Daemonite/material.

SCSS changes as well as JavaScript changes need to be conpiled via Grunt. You first need to install npm via [here](https://www.npmjs.com/package/npm) and make sure that you add it to your system PATH to make everything easier. Once you have npm, you need to install grunt-cli:
```
npm install -g grunt-cli
```
You'll also need Sass. To install Sass, you first need to install Ruby via the [Ruby Installer](http://rubyinstaller.org/) (also add *that* to your system PATH on Windows) and you'll then be able to install Sass via
```
gem install sass
```
If you're on Linux, that'll be slightly harder, so see the instructions for installing Sass [here](http://sass-lang.com/install).

Once you have Grunt, Sass, and Ruby installed, run the following commands from the root of your project to compile changes:
```
// To install all additional plugins noted in project.json
npm install
// Wait for the installation of everything to complete before running the next commands.
```
```
grunt concat

grunt cssmin

grunt sass

grunt uglify
```
Note that the commands will run between returns, just like anything else through the command line.
