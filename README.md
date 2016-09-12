# _pingPongTDD_

#### _Basic Ping Pong exercise using php, silex, twig, and tests (phpunit). 09.12.16_

#### By _**Alexandre Leibler**_


## Description

_pingPongTDD is an exercise in using test driven development in php. The website will allow users to specify a number and then will display a list based on that input. The list consists of a list of numbers between 1 and the user input. However any number that is divisible by 3 will be replaced by the string "ping", every number divisible by 5 will be replaced by the string "pong", and every number divisible by both 3 and 5 will be replaced with the string "ping pong"._


## Setup/Installation Requirements

* _If you wish to view the source code locally on your machine please follow the following steps:_

  +  _1). Navigate to the directory in which you want the pingPong project to reside._

  +  _2). Enter the following command into your terminal:_
        _git clone https://github.com/KomodoTech/pingPongTDD.git_

  +  _3). Navigate to the pingPongTDD directory, and execute the following command in the terminal:_
          _composer install_

  +  _4). Navigate to the web directory and start your local host by executing the following command in your terminal:_
          _php -S localhost:8000_

  +  _5). Open up the browser of your choice and go to the following url:_
          _http://localhost:8000/_

  +  _6). If you wish to look at the source code, feel free to browse through the files in the pingPongTDD directory_


## Specs

* _Single non-negative integer less than 3_
  + _IN:  2_
  + _OUT: {1, 2}_

* _3_
  + _IN:  3_
  + _OUT: {1, 2, ping}_

* _4_
  + _IN:  4_
  + _OUT: {1, 2, ping, 4}_

* _5_
  + _IN:  5_
  + _OUT: {1, 2, ping, 4, pong}_

* _Single integer greater than 5, not divisible by 3 or 5_
  + _IN:  238_
  + _OUT: {1, 2, ping, 4, pong, ... , 238}_

* _Single non-negative integer divisible by 3 but not by 5_
  + _IN:  321_
  + _OUT: {1, 2, ping, 4, pong, ... , 320, ping}_

* _Single non-negative integer divisible by 5 but not by 3_
  + _IN:  25_
  + _OUT: {1, 2, ping, 4, pong, ... , 22, 23, ping, pong}_

* _Single non-negative integer divisible by 5 and by 3_
  + _IN:  150_
  + _OUT: {1, 2, ping, 4, pong, ..., 149, ping-pong}_

* _Multiple integers_
  + _IN:  232 354_
  +  _OUT: ERROR (please enter a single number)_

* _0_
  + _IN:  0_
  + _OUT: ERROR (please enter a positive integer)_

* _Negative number_
  + _IN:  -325_
  + _OUT: ERROR (please enter a positive integer)_

* _String with non numeric character_
  + _IN:  ab34bc_
  + _OUT: ERROR (please enter a positive integer)_


## Known Bugs

_Displaying the list of tests does not work as of yet_


## Support and Contact Details

_Please feel free to contact me through my github account (KomodoTech) or at the following email:_
    _alexandre.leibler@gmail.com_


## Technologies Used

* _silex v~2.0_
* _twig v~1.0_
* _phpunit v5.5.*_
* _jQuery v3.1.0_
* _bootstrap v3.3.7_



### License

* GPLV3

pingPongTDD Copyright (c) 2016 **_Alexandre Leibler_**
