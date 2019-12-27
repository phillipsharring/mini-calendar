# Mini Calendar

## Instructions

Create a web page that takes a date as input and highlights the date in a small 5x7 table presenting the calendar for the month including the input date.
This calendar is meant more like an icon close to 40x50 pixels. Make it visually meaningful, it can be a Tetris box look if you feel it looks better.
Highlight the selected date, and highlight weekend with a different color.

#### Additional Requirements Added

Highlight days out of the currently selected month a darker shade of gray, to add additional meaning to the visuals.

## Limitations & Assumptions

This is coded in vanilla PHP & JavaScript. No framework is used and no external libraries are required. There is minimal/simple code structure.

#### Limitations

Requirements stated the target environment runs Apache w/ PHP 5.7, however, there is no such version of PHP, so this was developed in a PHP 5.6.40 environment (the closest without going over).

### Assumptions

We are assuming that addEventListener is available in the user's browser. That is, IE8 is not supported. However, with the use of additional code to standardize event listeners, this issue could be mitigated.

We are assuming that the form is not posted to from a referrer outside itself, and that valid year, month, and day values are provided. There is no validation. This could be added.