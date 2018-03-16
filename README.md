# kingdomcomecodex-php-generator
PHP script to convert XML lang files from Kingdom Come: Deliverance Codex to web as kingdomcomecodex.github.io

* Take a look into the generation result web and project, where much more info and updating process is made: [kingdomcomecodex/kingdomcomecodex.github.io](https://github.com/kingdomcomecodex/kingdomcomecodex.github.io).

### About
In sum, using various XML files (for texts, categories, images, etc) it makes a single html and then one html for each language that be loaded asynchronously with jquery in the first one. The with ob php functions, I save the html instead showing. Then, the html uses a lot of jquery and css3 for a (hope) nice design.

This is not a very well made project, I make this mainly for repository purposes and not lost this work.

### Remember
* In config.php you may put the ouput folder in "$folder".
* You may place the xml lang files in "lang" folder. These are taken from 1.3 version.
* Remember to give write permissions in the folders (<code>chmod -R 777 folder/</code>).
* There are a folder "common-media" that contains what "media" folder in output where placed. It's important because contains the css file and images that will copy to output.
* Most js is in the bottom of the page (<code>view_footer.php</code>).
