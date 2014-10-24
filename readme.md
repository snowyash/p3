# P3 by Yixie Li (Claire)

##Live URL
<http://p3.snowyash.me>

##Description
This is a Developer's Best Friend project consist of 3 tools: xkcd password generator, lorem ipsum generator, and fake user generator.
1. xkcd password generator will let you choose the amount of words to use, and perhaps indicate a maximum number for password length. It comes with validation for password length input to ensure user only enter natural number, and also calculate if the maximum length given the amount of words chosen make logical sense.
2. Lorem ipsum generator will generate 1-6 paragraphs in Latin depending on selection.
3. Fake user generator will generate 1-6 users with name, birthday, company, address, and description in divs depending on selection.
All three tools are accessible immediately on welcome page through iframes or by clicking the menu on the top.

This project uses Laravel and Laravel packagist such as paste/pre, badcow/lorem-ipsum, and fzaninotto/faker to assist with programming Lorem ipsum generator and fake user generator. Both of the generators uses AJAX to call a controller class to return form submit results.

##Demo
Demo will be presented in a live section.

##Details for the teaching team
Validation error passed. Site speed is 654ms according to <http://tools.pingdom.com/> No login or password required.

##Outside Code
* Twitter Bootstrap: <http://http://getbootstrap.com/2.3.2/>