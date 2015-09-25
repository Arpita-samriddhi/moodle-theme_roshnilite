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
$settings = null;
if (is_siteadmin()) {
    $ADMIN->add('themes', new admin_category('theme_roshnilite', 'Roshnilite'));
    $temp = new admin_settingpage('theme_roshnilite_general',  get_string('generalsettings', 'theme_roshnilite'));

    $name = 'theme_roshnilite/favicon';
    $title = get_string('favicon', 'theme_roshnilite');
    $description = get_string('favicondesc', 'theme_roshnilite');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/logo';
    $title = get_string('logo', 'theme_roshnilite');
    $description = get_string('logodesc', 'theme_roshnilite');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/slidercount';
    $title = get_string('slidercount', 'theme_roshnilite');
    $description = get_string('slidercountdesc', 'theme_roshnilite');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            1 => get_string('one', 'theme_roshnilite'),
            2 => get_string('two', 'theme_roshnilite'),
            3 => get_string('three', 'theme_roshnilite'),
            4 => get_string('four', 'theme_roshnilite'),
            5 => get_string('five', 'theme_roshnilite'),
            6 => get_string('six', 'theme_roshnilite'),
        ));
    $temp->add($setting);

    for ($slidecounts = 1; $slidecounts <= get_config('theme_roshnilite', 'slidercount'); $slidecounts = $slidecounts + 1) {
        $name = 'theme_roshnilite/slideimage'.$slidecounts;
        $title = get_string('slideimage', 'theme_roshnilite').$slidecounts;
        $description = get_string('slideimagedesc', 'theme_roshnilite').$slidecounts;
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'slideimage'.$slidecounts);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_roshnilite/slidertext'.$slidecounts;
        $title = get_string('slidertext', 'theme_roshnilite').$slidecounts;
        $description = get_string('slidertextdesc', 'theme_roshnilite').$slidecounts;
        $default = '<h2>THE TASK OF THE</h2><h1>MODERN EDUCATOR</h1>
        <h3 class="header-b">IS NOT TO CUT DOWN JUNGLES, BUT TO IRRIGATE DESERTS</h3>';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_roshnilite/sliderbuttontext'.$slidecounts;
        $title = get_string('sliderbuttontext', 'theme_roshnilite').$slidecounts;
        $description = get_string('sliderbuttontextdesc', 'theme_roshnilite');
        $default = 'GET STARTED';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_roshnilite/sliderurl'.$slidecounts;
        $title = get_string('sliderurl', 'theme_roshnilite').$slidecounts;
        $description = get_string('sliderurldesc', 'theme_roshnilite').$slidecounts;
        $default = '#';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
    }

    $name = 'theme_roshnilite/aboutsiteheading';
    $title = get_string('aboutsiteheading', 'theme_roshnilite');
    $description = get_string('aboutsiteheadingdesc', 'theme_roshnilite');
    $default = 'NOBODY DOES IT LIKE US';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsitesubheading';
    $title = get_string('aboutsitesubheading', 'theme_roshnilite');
    $description = get_string('aboutsitesubheadingdesc', 'theme_roshnilite');
    $default = 'Put In a Nice Little Piece Of Text That Describes Your USP';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsiteimage1';
    $title = get_string('aboutsiteimage', 'theme_roshnilite');
    $description = get_string('faboutsiteimagedesc', 'theme_roshnilite');;
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutsiteimage'.$slidecounts);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsitename1';
    $title = get_string('aboutsitename', 'theme_roshnilite');
    $description = get_string('faboutsitenamedesc', 'theme_roshnilite');
    $default = 'Our Blog';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsitetext1';
    $title = get_string('aboutsitetext', 'theme_roshnilite');
    $description = get_string('faboutsitetextdesc', 'theme_roshnilite');
    $default = "There's only one way to find out what life can be like at
    University of Utopia: dip into some of our students' uncut and uncensored blogs.";
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsiteurl1';
    $title = get_string('aboutsiteurl', 'theme_roshnilite');
    $description = get_string('faboutsiteurldesc', 'theme_roshnilite');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*-------------*/

    $name = 'theme_roshnilite/aboutsiteimage2';
    $title = get_string('aboutsiteimage', 'theme_roshnilite');
    $description = get_string('saboutsiteimagedesc', 'theme_roshnilite');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutsiteimage'.$slidecounts);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsitename2';
    $title = get_string('aboutsitename', 'theme_roshnilite');
    $description = get_string('saboutsitenamedesc', 'theme_roshnilite');
    $default = 'Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsitetext2';
    $title = get_string('aboutsitetext', 'theme_roshnilite');
    $description = get_string('saboutsitetextdesc', 'theme_roshnilite');
    $default = 'You can rename the content box names from the admin panel,
    and then add nifty descriptions for all the content boxes.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsiteurl2';
    $title = get_string('aboutsiteurl', 'theme_roshnilite');
    $description = get_string('saboutsiteurldesc', 'theme_roshnilite');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*-------------*/

    $name = 'theme_roshnilite/aboutsiteimage3';
    $title = get_string('aboutsiteimage', 'theme_roshnilite');
    $description = get_string('taboutsiteimagedesc', 'theme_roshnilite');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutsiteimage'.$slidecounts);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsitename3';
    $title = get_string('aboutsitename', 'theme_roshnilite');
    $description = get_string('taboutsitenamedesc', 'theme_roshnilite');
    $default = 'Latest News';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsitetext3';
    $title = get_string('aboutsitetext', 'theme_roshnilite');
    $description = get_string('taboutsitetextdesc', 'theme_roshnilite');
    $default = 'Wondering what is happening at you? A lot.
    And reading through this section will keep you updated about all the cutting edge research we are doing here!';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsiteurl3';
    $title = get_string('aboutsiteurl', 'theme_roshnilite');
    $description = get_string('taboutsiteurldesc', 'theme_roshnilite');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    /*-------------*/

    $name = 'theme_roshnilite/aboutsiteimage4';
    $title = get_string('aboutsiteimage', 'theme_roshnilite');
    $description = get_string('fraboutsiteimagedesc', 'theme_roshnilite');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutsiteimage'.$slidecounts);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsitename4';
    $title = get_string('aboutsitename', 'theme_roshnilite');
    $description = get_string('fraboutsitenamedesc', 'theme_roshnilite');
    $default = 'Upcoming Events';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsitetext4';
    $title = get_string('aboutsitetext', 'theme_roshnilite');
    $description = get_string('fraboutsitetextdesc', 'theme_roshnilite');
    $default = "All these content boxes are completely editable.
    You can change the hover colors, icons, names and the description text. Cool, isn't it?";
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/aboutsiteurl4';
    $title = get_string('aboutsiteurl', 'theme_roshnilite');
    $description = get_string('fraboutsiteurldesc', 'theme_roshnilite');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);



    $name = 'theme_roshnilite/maincolor';
    $title = get_string('maincolor', 'theme_roshnilite');
    $description = get_string('maincolordesc', 'theme_roshnilite');
    $default = '#e74c3c';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    $name = 'theme_roshnilite/masonryheading';
    $title = get_string('masonryheading', 'theme_roshnilite');
    $description = get_string('masonryheadingdesc', 'theme_roshnilite');
    $default = 'OUR CATEGORY';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/masonrysubheading';
    $title = get_string('masonrysubheading', 'theme_roshnilite');
    $description = get_string('masonrysubheadingdesc', 'theme_roshnilite');
    $default = 'You Can Showcase All Your Categories In This Beautiful Masonry Block';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/masonrycount';
    $title = get_string('masonrycount', 'theme_roshnilite');
    $description = get_string('masonrycountdesc', 'theme_roshnilite');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            1 => get_string('one', 'theme_roshnilite'),
            2 => get_string('two', 'theme_roshnilite'),
            3 => get_string('three', 'theme_roshnilite'),
            4 => get_string('four', 'theme_roshnilite'),
            5 => get_string('five', 'theme_roshnilite'),
            6 => get_string('six', 'theme_roshnilite'),
            7 => get_string('seven', 'theme_roshnilite'),
            8 => get_string('eight', 'theme_roshnilite'),
        ));
    $temp->add($setting);
    for ($masonrycounts = 1; $masonrycounts <= get_config('theme_roshnilite', 'masonrycount');
        $masonrycounts = $masonrycounts + 1) {
        $name = 'theme_roshnilite/masonryimage'.$masonrycounts;
        $title = get_string('masonryimage', 'theme_roshnilite').$masonrycounts;
        $description = get_string('masonryimagedesc', 'theme_roshnilite').$masonrycounts;
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'masonryimage'.$masonrycounts);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_roshnilite/masonrytext'.$masonrycounts;
        $title = get_string('masonrytext', 'theme_roshnilite').$masonrycounts;
        $description = get_string('masonrytextdesc', 'theme_roshnilite').$masonrycounts;
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_roshnilite/masonrysubtext'.$masonrycounts;
        $title = get_string('masonrysubtext', 'theme_roshnilite').$masonrycounts;
        $description = get_string('masonrysubtextdesc', 'theme_roshnilite').$masonrycounts;
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_roshnilite/masonryrurl'.$masonrycounts;
        $title = get_string('masonryurl', 'theme_roshnilite').$masonrycounts;
        $description = get_string('masonryurldesc', 'theme_roshnilite').$masonrycounts;
        $default = '#';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
    }

    $name = 'theme_roshnilite/addressfontawesomeicon';
    $title = get_string('addressfontawesomeicon', 'theme_roshnilite');
    $description = get_string('addressfontawesomeicondesc', 'theme_roshnilite');
    $default = '<i class="fa fa-map-marker"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/address';
    $title = get_string('address', 'theme_roshnilite');
    $description = get_string('addressdesc', 'theme_roshnilite');
    $default = 'Kolkata, India';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/emailfontawesomeicon';
    $title = get_string('emailfontawesomeicon', 'theme_roshnilite');
    $description = get_string('emailfontawesomeicondesc', 'theme_roshnilite');
    $default = '<i class="fa fa-envelope"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/email';
    $title = get_string('email', 'theme_roshnilite');
    $description = get_string('emaildesc', 'theme_roshnilite');
    $default = 'admin@dualcube.com';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_roshnilite/phonefontawesomeicon';
    $title = get_string('phonefontawesomeicon', 'theme_roshnilite');
    $description = get_string('phonefontawesomeicondesc', 'theme_roshnilite');
    $default = '<i class="fa fa-phone"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/phone';
    $title = get_string('phone', 'theme_roshnilite');
    $description = get_string('phonedesc', 'theme_roshnilite');
    $default = '+91 33 64578322';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/socialheading';
    $title = get_string('socialheading', 'theme_roshnilite');
    $description = get_string('socialheadingdesc', 'theme_roshnilite');
    $default = 'STAY CONNECTED';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/socialfontawesomeicon1';
    $title = get_string('socialfontawesomeicon1', 'theme_roshnilite');
    $description = get_string('socialfontawesomeicondesc1', 'theme_roshnilite');
    $default = '<i class="fa fa-facebook"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/socialicon1';
    $title = get_string('socialicon', 'theme_roshnilite');
    $description = get_string('socialicondesc', 'theme_roshnilite');
    $default = 'javascript:void(0);';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/socialfontawesomeicon2';
    $title = get_string('socialfontawesomeicon2', 'theme_roshnilite');
    $description = get_string('socialfontawesomeicondesc2', 'theme_roshnilite');
    $default = '<i class="fa fa-twitter"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/socialicon2';
    $title = get_string('socialicon', 'theme_roshnilite');
    $description = get_string('socialicondesc', 'theme_roshnilite');
    $default = 'javascript:void(0);';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/socialfontawesomeicon3';
    $title = get_string('socialfontawesomeicon3', 'theme_roshnilite');
    $description = get_string('socialfontawesomeicondesc3', 'theme_roshnilite');
    $default = '<i class="fa fa-linkedin"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/socialicon3';
    $title = get_string('socialicon', 'theme_roshnilite');
    $description = get_string('socialicondesc', 'theme_roshnilite');
    $default = 'socialicon';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/socialfontawesomeicon4';
    $title = get_string('socialfontawesomeicon4', 'theme_roshnilite');
    $description = get_string('socialfontawesomeicondesc4', 'theme_roshnilite');
    $default = '<i class="fa fa-google-plus"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_roshnilite/socialicon4';
    $title = get_string('socialicon', 'theme_roshnilite');
    $description = get_string('socialicondesc', 'theme_roshnilite');
    $default = 'javascript:void(0);';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_roshnilite', $temp);/*END OF GENERAL SETTINGS*/

    $temp = new admin_settingpage('theme_roshnilite_font',  get_string('fontsettings', 'theme_roshnilite'));
    $name = 'theme_roshnilite/fontselect';
    $title = get_string('fontselect', 'theme_roshnilite');
    $description = get_string('fontselectdesc', 'theme_roshnilite');
    $default = 1;
    $choices = array(
            1 => get_string('fonttypestandard', 'theme_roshnilite'),
            2 => get_string('fonttypecustom', 'theme_roshnilite'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Heading font name.
    $name = 'theme_roshnilite/fontnameheading';
    $title = get_string('fontnameheading', 'theme_roshnilite');
    $description = get_string('fontnameheadingdesc', 'theme_roshnilite');
    $default = 'Raleway';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Text font name.
    $name = 'theme_roshnilite/fontnamebody';
    $title = get_string('fontnamebody', 'theme_roshnilite');
    $description = get_string('fontnamebodydesc', 'theme_roshnilite');
    $default = 'Raleway';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    if (get_config('theme_roshnilite', 'fontselect') === "2") {
        if (floatval($CFG->version) >= 2014111005.01) { // 2.8.5+ (Build: 20150313) which has MDL-49074 integrated into it.
            $woff2 = true;
        } else {
            $woff2 = false;
        }
        // This is the descriptor for the font files.
        $name = 'theme_roshnilite/fontfiles';
        $heading = get_string('fontfiles', 'theme_roshnilite');
        $information = get_string('fontfilesdesc', 'theme_roshnilite');
        $setting = new admin_setting_heading($name, $heading, $information);
        $temp->add($setting);
        // Heading Fonts.
        // TTF Font.
        $name = 'theme_roshnilite/fontfilettfheading';
        $title = get_string('fontfilettfheading', 'theme_roshnilite');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilettfheading');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
        // OTF Font.
        $name = 'theme_roshnilite/fontfileotfheading';
        $title = get_string('fontfileotfheading', 'theme_roshnilite');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfileotfheading');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // WOFF Font.
        $name = 'theme_roshnilite/fontfilewoffheading';
        $title = get_string('fontfilewoffheading', 'theme_roshnilite');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilewoffheading');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        if ($woff2) {
                // WOFF2 Font.
                $name = 'theme_roshnilite/fontfilewofftwoheading';
                $title = get_string('fontfilewofftwoheading', 'theme_roshnilite');
                $description = '';
                $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilewofftwoheading');
                $setting->set_updatedcallback('theme_reset_all_caches');
                $temp->add($setting);
        }

        // EOT Font.
        $name = 'theme_roshnilite/fontfileeotheading';
        $title = get_string('fontfileeotheading', 'theme_roshnilite');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfileweotheading');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // SVG Font.
        $name = 'theme_roshnilite/fontfilesvgheading';
        $title = get_string('fontfilesvgheading', 'theme_roshnilite');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilesvgheading');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Body fonts.
        // TTF Font.
        $name = 'theme_roshnilite/fontfilettfbody';
        $title = get_string('fontfilettfbody', 'theme_roshnilite');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilettfbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // OTF Font.
        $name = 'theme_roshnilite/fontfileotfbody';
        $title = get_string('fontfileotfbody', 'theme_roshnilite');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfileotfbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // WOFF Font.
        $name = 'theme_roshnilite/fontfilewoffbody';
        $title = get_string('fontfilewoffbody', 'theme_roshnilite');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilewoffbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        if ($woff2) {
            // WOFF2 Font.
            $name = 'theme_roshnilite/fontfilewofftwobody';
            $title = get_string('fontfilewofftwobody', 'theme_roshnilite');
            $description = '';
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilewofftwobody');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);
        }

        // EOT Font.
        $name = 'theme_roshnilite/fontfileeotbody';
        $title = get_string('fontfileeotbody', 'theme_roshnilite');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfileweotbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
        // SVG Font.
        $name = 'theme_roshnilite/fontfilesvgbody';
        $title = get_string('fontfilesvgbody', 'theme_roshnilite');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilesvgbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
    }
    $ADMIN->add('theme_roshnilite', $temp);
}