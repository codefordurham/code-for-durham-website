# Code for Durham Website
This is the WordPress theme for the new Code for Durham website.

In a WordPress site, put this folder into the wp-content/themes folder.

## Setup style automation
### Install packages
You will need to have [NPM](https://www.npmjs.com/get-npm) installed. Then run this command in the terminal:

``` 
$ npm install
```

### Build style.css
Make sure all your css files are imported in the css/style.css file. Then in the terminal, run:

```
$ npm run gulpstyles
```

This will bundle all the styles into style.css in the root folder.

### Watch styles
Make sure all your css files are imported in the css/style.css file. Then in the terminal, run:

```
$ npm run gulpwatch
```

Now on each save of a css file, the styles will be bundled into style.css in the root folder, and the browser will automatically be updated.
