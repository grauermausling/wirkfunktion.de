WIRKFUNKTION MODERN CLIX 0.1
----------------------------

This is the wordpress blog theme of the site www.wirkfunktion.de based on Modern Clix 1.1 by Rodrigo Galindez.

http://www.rodrigogalindez.com
http://www.rodrigogalindez.com/wordpress-themes/

This theme is released under a GNU General Public License (GPL), version 3 (http://www.gnu.org/licenses/gpl.html). This license also did apply to Modern Clix 1.1

How to install
--------------

I did the changes to original modern clix without thinking about publishing the wirkfunktion theme. However, since this is a GPL licensed theme, you are free to use it.

Copy the theme folder 'wirkfunktion-modern-clix' in wp-content/themes/. Activate it under Appearance > Themes (Wordpress 2.7) or Presentation > Themes (older versions of Wordpress) and you are ready to go.

To change the default tagline, edit the file 'header.php' (line 29). It will be displayed in the header. The tagline that you entered in the Wordpress admin will be displayed in the sidebar by default.

Flickr & Twitter compatibility
------------------------------

By default, the theme is shipped with my Flickr & Twitter accounts.

@TODO: Change this:

* Twitter: In 'footer.php', replace rodrigogalindez.json (line 12) with yourusername.json. Also, don't forget to point to your own Twitter URL in 'js/blogger.js' (line 7) 

* Flickr: In 'sidebar.php' replace user=27741269%40N00 (line 24) with your unique string. You can generate this string by loading this page: http://www.flickr.com/badge.gne and generating a simple HTML badge. In the last step, where the source code is generated, copy the string where it says "user=" and replace with the shipped one.

Type goodies
------------

Wirkfunktion Modern Clix is packed with special classes for nice type ornaments. Here are some ready-to-paste HTML snippets for instant type gratification:

* Nice ampersands: <span class="amp">&amp;</span>
* By-lines: <span class="low">by</span>
* All caps: <span class="ver">Sample text</span>
* Descriptions for images: <small class="tooltip"><em>Sample description.</em></small>

Images
------

To support full width images (up to 596px) use the class 'full-image' in the post. Example:

<div class="full-image">
    <img src="modern-clix.jpg" alt="Modern Clix" />
</div>

Full width images give each post a look of _breaking the grid_ that's pretty cool. 
