# Mini Calendar

## Project Instructions

> Create a web page that takes a date as input and highlights the date in a small 5x7 table presenting the calendar for the month including the input date.
This calendar is meant more like an icon close to 40x50 pixels. Make it visually meaningful, it can be a Tetris box look if you feel it looks better.
Highlight the selected date, and highlight weekend with a different color.

#### Additional Requirements Added

Highlight days out of the currently selected month a darker shade of gray, to add additional meaning to the visuals.

## Limitations & Assumptions

This is coded in vanilla PHP & JavaScript. No framework is used and no external libraries are required. There is minimal/simple code structure.

#### Limitations

Requirements stated the target environment runs Apache w/ PHP 5.7, however, there is no such version of PHP, so this was developed in a PHP 5.6.40 environment (the closest without going over).

Focus was mainly given to the functioning of the PHP and JavaScript code, but not to the visuals, beyond following instructions for the display of the calendar. Minimal CSS styles were used and no CSS frameworks were included.

### Assumptions

We are assuming that addEventListener is available in the user's browser. That is, IE8 is not supported. However, with the use of additional code to standardize event listeners, this issue could be mitigated.

We are assuming that the form is not posted to from a referrer outside itself, and that valid year, month, and day values are provided. There is no validation however it could be added. There is simple casting of the values provided.

## Requirements

* Web Server software.
* PHP available to the Web Server (either embedded or via fcgi) and on the command line.
* A modern browser that supports addEventListener.

## Installation

#### Put the Code on a Web Server

Place the code in a directory above your web server's Document Root. Set the Document Root's path to the public directory. If you are not using 'public' as the document root, you can simply put all the code except what's in public in the directory above your Document Root, and move the contents of the public folder into whatever the directory is used for your Document Root (`index.php` and `js/mini-calendar.js`). If you are installing this in a sub-directory on your web server, simply put everything in that subdirectory and visit the /{your-directory}/public url to test.

#### Composer Dump Autoload

A `composer.phar` file is included for convenience. Go to the directory this is installed in (one directory above your Document Root), and run `php composer.phar dump-autoload` to create the `vendor/autoload.php` and related autoload files. It is not necessary to run `composer install` since there are no external libraries required, however, there's no harm in running that command; it will simply require nothing, then proceed to build the autoload files.

## Usage

Visit the url this was installed at in a web browser. The page will display a date selection form and a calendar. Changing the date does not refresh the calendar automatically; it's necessary to click the "Look-up" button. Changing the year and month will, however, affect the options in the day drop-down to reflect the total number of days in the given month.

## Thoughts

This could be refactored quite a bit. The Calendar class is doing mostly date related things, but also provides some CSS class names, which isn't a true separation of concerns. Of course libraries such as Carbon or jQuery could be used, or even Laravel or other frameworks, but I wanted to just stick to vanilla PHP and JavaScript for this demonstration.