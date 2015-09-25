<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's roshnilite theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package    theme_roshnilite
 * @copyright  2015 dualcube {@link http://dualcube.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;
$string['choosereadme'] = '
<div class="clearfix">
<div class="well">
<h2>Roshnilite</h2>
<p><img class=img-polaroid src="roshnilite/pix/screenshot.jpg" /></p>
</div>
<div class="well">
<h3>Theme Credits</h3>
<p>Authors: Dualcube<br>
Contact: admin@dualcube.com<br>
Website: <a href="https://dualcube.com/">https://dualcube.com/</a>
</p>
<h3>Parents</h3>
<p>This theme is based upon the Bootstrap theme, which was created for Moodle 2.5, with the help of:<br>
Stuart Lamour, Mark Aberdour, Paul Hibbitts, Mary Evans.</p>
<h3>Theme Credits</h3>
<p>Authors: Bas Brands, David Scotson, Mary Evans<br>
Contact: bas@sonsbeekmedia.nl<br>
Website: <a href="http://www.basbrands.nl">www.basbrands.nl</a>
</p>
<h3>Report a bug:</h3>
<p><a href="http://tracker.moodle.org">http://tracker.moodle.org</a></p>
<h3>More information</h3>
<p><a href="clean/README.txt">How to copy and customise this theme.</a></p>
</div></div>';

$string['configtitle'] = 'Roshni Lite';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Whatever CSS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';

$string['footnote'] = 'Footnote';
$string['footnotedesc'] = 'Whatever you add to this textarea will be displayed in the footer throughout your Moodle site.';

$string['invert'] = 'Invert navbar';
$string['invertdesc'] = 'Swaps text and background for the navbar at the top of the page between black and white.';

$string['logo'] = 'Logo';
$string['logodesc'] = 'Please upload or enter the url of your custom logo here if you want to add it to the header.
The image should be 65px high and any reasonable width that suits.
If you upload a logo it will replace the standard icon and name that was displayed by default.';


$string['favicon'] = 'Favicon';
$string['favicondesc'] = 'Please upload or enter the url of the icon you want to show in the browser address bar, the fav icon.';

$string['pluginname'] = 'Roshnilite';

$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';

$string['generalsettings'] = 'General Settings';
$string['standarddesc'] = 'General Settings Desc';
$string['customsettings'] = 'Custom Settings';



$string['fontfiles'] = 'Upload Unlimited Fonts';
$string['fontfilesdesc'] = 'Upload your font files here.';
$string['fontfilettfheading'] = 'Heading TTF font file';
$string['fontfileotfheading'] = 'Heading OTF font file';
$string['fontfilewoffheading'] = 'Heading WOFF font file';
$string['fontfilewofftwoheading'] = 'Heading WOFF2 font file';
$string['fontfileeotheading'] = 'Heading EOT font file';
$string['fontfilesvgheading'] = 'Heading SVG font file';
$string['fontfilettfbody'] = 'Body TTF font file';
$string['fontfileotfbody'] = 'Body OTF font file';
$string['fontfilewoffbody'] = 'Body WOFF font file';
$string['fontfilewofftwobody'] = 'Body WOFF2 font file';
$string['fontfileeotbody'] = 'Body EOT font file';
$string['fontfilesvgbody'] = 'Body SVG font file';
$string['fontselectdesc'] = 'Font Select Desc';
$string['fonttypestandard'] = 'Font Type Standard';
$string['fonttypecustom'] = 'Font Type Custom';
$string['fontselect'] = 'Select Font';

$string['fontnameheading'] = 'Choose Font Name Heading';
$string['fontnameheadingdesc'] = 'Fontname Headingdesc';
$string['fontnamebody'] = 'Choose Font Name Body';
$string['fontnamebodydesc'] = 'Fontname Body Desc';

$string['customdesc'] = 'Custom Desc';

$string['fontsettings'] = 'Font Settings';
$string['slidercount'] = 'Slidercount ';
$string['slidercountdesc'] = 'Select, from dropdown, the number of slides in the slider.You can add up to 6 slides.';
$string['one'] = '1';
$string['two'] = '2';
$string['three'] = '3';
$string['four'] = '4';
$string['five'] = '5';
$string['six'] = '6';
$string['seven'] = '7';
$string['eight'] = '8';
$string['slideimage'] = 'Upload Your Image For Slide ';
$string['slideimagedesc'] = 'Please upload or enter the url of the image for the slide ';
$string['slidertext'] = 'Text for slide ';
$string['slidertextdesc'] = 'Enter a descriptive text for your slide ';
$string['sliderurl'] = 'Link for slide ';
$string['sliderbuttontext'] = 'Enter your text for button on slide ';
$string['sliderbuttontextdesc'] = 'If you do not enter any text, the button will be disappear.';
$string['sliderurldesc'] = "Enter the target destination of the image link on slide ";

$string['maincolor'] = 'Choose Main Theme Color';
$string['maincolordesc'] = 'Choose your own custom Color scheme for the theme.';

$string['masonrycount'] = 'Masonrycount';
$string['one'] = '1';
$string['two'] = '2';
$string['three'] = '3';
$string['four'] = '4';
$string['five'] = '5';
$string['six'] = '6';
$string['seven'] = '7';
$string['eight'] = '8';
$string['masonryimage'] = 'Upload your image for masonry block ';
$string['masonryimagedesc'] = 'Upload your image for masonry block ';
$string['masonrytext'] = 'Text for masonry block ';
$string['masonrytextdesc'] = 'Enter the text for masonry block ';
$string['masonryurl'] = 'Enter masonry URL ';
$string['masonrysubtext'] = 'Sub text for masonry block ';
$string['masonrysubtextdesc'] = 'Enter the sub text for masonry block ';
$string['masonryurldesc'] = 'Enter the target url for the masonry block ';


$string['addressfontawesomeicon'] = 'Enter Font awesome icon tag for address icon';
$string['addressfontawesomeicondesc'] = 'Just copy and paste &lt; i &gt;&lt; / i &gt; tag';
$string['address'] = 'Enter Address';
$string['addressdesc'] = 'Enter your address here. ';

$string['phonefontawesomeicon'] = 'Enter Font awesome icon tag for phone icon';
$string['phonefontawesomeicondesc'] = 'Just copy and paste &lt; i &gt;&lt; / i &gt; tag';
$string['phone'] = 'Enter Phone Number';
$string['phonedesc'] = 'Enter your contact here. ';

$string['emailfontawesomeicon'] = 'Enter Font awesome icon tag for email icon';
$string['emailfontawesomeicondesc'] = 'Just copy and paste &lt; i &gt;&lt; / i &gt; tag';
$string['email'] = 'Enter Email Address';
$string['emaildesc'] = 'Enter your email address here. ';

$string['socialfontawesomeicon1'] = 'Enter Font awesome icon tag for social icon';
$string['socialfontawesomeicondesc1'] = 'Just copy and paste &lt; i &gt;&lt; / i &gt; tag';
$string['socialfontawesomeicon2'] = 'Enter Font awesome icon tag for social icon';
$string['socialfontawesomeicondesc2'] = 'Just copy and paste &lt; i &gt;&lt; / i &gt; tag';
$string['socialfontawesomeicon3'] = 'Enter Font awesome icon tag for social icon';
$string['socialfontawesomeicondesc3'] = 'Just copy and paste &lt; i &gt;&lt; / i &gt; tag';
$string['socialfontawesomeicon4'] = 'Enter Font awesome icon tag for social icon';
$string['socialfontawesomeicondesc4'] = 'Just copy and paste &lt; i &gt;&lt; / i &gt; tag';

$string['socialicon'] = 'Link of social icon';
$string['socialicondesc'] = 'Enter the target link of icon. ';

$string['aboutsiteimage'] = 'Upload image';
$string['faboutsiteimagedesc'] = 'Upload image for the first block.';
$string['aboutsitename'] = 'Enter block name';
$string['faboutsitenamedesc'] = 'Enter the name of first block in about site section.';
$string['aboutsitetext'] = 'Enter block sub text';
$string['faboutsitetextdesc'] = 'Enter the sub text for the first block.';
$string['aboutsiteurl'] = 'Enter url';
$string['faboutsiteurldesc'] = 'Enter the target url for the first block.';


$string['saboutsiteimagedesc'] = 'Upload image for the second block.';
$string['saboutsitenamedesc'] = 'Enter the name of second block in about site section.';
$string['saboutsitetextdesc'] = 'Enter the sub text for the second block.';
$string['saboutsiteurldesc'] = 'Enter the target url for the second block.';


$string['taboutsiteimagedesc'] = 'Upload image for the third block.';
$string['taboutsitenamedesc'] = 'Enter the name of third block in about site section.';
$string['taboutsitetextdesc'] = 'Enter the sub text for the third block.';
$string['taboutsiteurldesc'] = 'Enter the target url for the third block.';


$string['fraboutsiteimagedesc'] = 'Upload image for the fourth block.';
$string['fraboutsitenamedesc'] = 'Enter the name of fourth block in about site section.';
$string['fraboutsitetextdesc'] = 'Enter the sub text for the fourth block.';
$string['fraboutsiteurldesc'] = 'Enter the target url for the fourth block.';

$string['aboutsiteheading'] = 'Enter heading';
$string['aboutsiteheadingdesc'] = "Enter your custom heading for 'About Site' section.";
$string['aboutsitesubheading'] = 'Enter sub heading';
$string['aboutsitesubheadingdesc'] = 'Enter your custom sub heading, may be your USP or tag line.';

$string['masonrycountdesc'] = 'Select, from dropdown, the number of blocks in the Masonry block section. You can add up to 8 blocks.';
$string['masonryheading'] = 'Enter heading';
$string['masonryheadingdesc'] = "Enter your custom heading for 'Masonry Block' section.";
$string['masonrysubheading'] = 'Enter sub heading';
$string['masonrysubheadingdesc'] = '';

$string['socialheading'] = 'Enter social heading';
$string['socialheadingdesc'] = '';