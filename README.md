ThinkingChristian.net Theme
============================
How to use this theme most effectively, and how to collaborate with me on it. 
##Dependencies
* [Compass](http://www.compass-style.org)
* For easiest collaboration, and to prevent disasters, [git](http://www.mac.github.com/).

##Modifying this theme's PHP
1. Make changes locally then upload them to the server, or make changes on the server and download the file.
2. Commit the changes in Git and sync.
3. I'll get a notification that you've committed a change and I'll pull that change.

## Modifying this themes CSS
### Installing Compass
1. Open Terminal
2. type `gem update --system` and hit enter
3. type `gem install compass` and hit enter. These commands update Ruby, which is similar to PHP in that it's a scripting/programming language that comes installed on with OS X, and then they install the Compass "plugin" (called a gem in Ruby).

### Changing stuff
DON'T CHANGE STYLE.CSS. If you do, your change will vanish into thin air next time I update the CSS.

1. Take 5 minutes and look over [this tutorial](http://sass-lang.com/tutorial.html) focusing on the `scss` syntax examples. A lot of what you see will remind you of PHP.
2. open Terminal and type `compass watch ~/path/to/themeRoot` which in my case is `~/Sites/wordpress/wp-content/themes/ThinkingChristian`
3. Change the `.scss` files in the `sass` directory. The CSS will update automatically, or Compass will give you an error.
4. If you want to change something that is somewhat global, look in `_vars.scss` file or `_normalize.scss` for a variable controlling what you want to change. Ask me about anything confusing.