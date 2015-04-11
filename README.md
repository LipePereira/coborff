# Project COBORFF
A way to quickly fire up yout web development!

## What the hell is a COBORFF?
It's a combination of many of my personal favorite web development tools in one!
*CO* - CodeIgniter : The *Best* PHP Frameword ever
*BO* - Bootstrap : The *Best* Front end Framework ever
*R* - Rest Controller : For all your API Needs.
*F* - Font Awesome : Screw images, we use FA!
*F* - Facebook : You know what this one is. SDK 4 BTW!

## Getting started
Download it to your computer, Clone it into a git repo, Voodoo it on a wooden doll, whatever!
Once you get the files, simply unzip ip if necessary and start working like you would normally do on any CI project.

### Setting up
Most of the work is done, however you still need to configure some stuff:

* You can reinstall the Facebook dependencies, I recommend using [Composer](https://getcomposer.org/doc/00-intro.md#locally) for that. I have included a version with it already installed, but that are many reasons you should install Composer and use it to install get any dependencies.
* Configure your Facebook api in 'application/config/facebook.php'
* Configure your Rest Server in 'application/config/rest.php'
* Configure your Encryption Key in 'application/config/config.php'

## CodeIgniter
You probably know how to use this one, go to the Application folder and do your thang.
However, if you need help, you can head over to their [Amazing Website](www.codeigniter.com/) and take a look around.

## Bootstrap
When working on your views, you just call the bootstrap classes on HTML elements.
You can find help over at [Bootstrap from Twitter](http://getbootstrap.com/)

## Rest Controller
You can also use this build for creating simple REST APIs, I have included a copy of [CodeIgniter Rest Server](https://github.com/chriskacerguis/codeigniter-restserver).
Head over to their page and have a look around! Show'em some love while you're there. All you need to know to work with this is there.

## Font Awesome
Now this one is a favorite of mine! Font awesome offers a ton of images in the form of a font!
If you didn't get what that means yet, it means full controll over them, without worries about loading a ton of images into your website.
Learn more about it on [Their Website](http://fortawesome.github.io/Font-Awesome/)

## Facebook
I preffer having facebook login on my websites because, let's face it, everybody has a Facebook nowadays. Even my grandma, and my dog for that matter...
Anyway, it makes it easier for our users to access the website, when they can just enter with their facebook accounts.
Included is the SDK4. Go to [their page](https://github.com/facebook/facebook-php-sdk-v4) for more info!

