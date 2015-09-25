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

if (!empty($PAGE->theme->setting_file_url('masonryimage1', 'masonryimage1'))) {
    $masonryimage1 = $PAGE->theme->setting_file_url('masonryimage1', 'masonryimage1');
} else {
    $masonryimage1 = $CFG->wwwroot."/theme/roshnilite/data/cat-1.jpg";
}
if (!empty($PAGE->theme->setting_file_url('masonryimage2', 'masonryimage2'))) {
    $masonryimage2 = $PAGE->theme->setting_file_url('masonryimage2', 'masonryimage2');
} else {
    $masonryimage2 = $CFG->wwwroot."/theme/roshnilite/data/cat-2.jpg";
}
if (!empty($PAGE->theme->setting_file_url('masonryimage3', 'masonryimage3'))) {
    $masonryimage3 = $PAGE->theme->setting_file_url('masonryimage3', 'masonryimage3');
} else {
    $masonryimage3 = $CFG->wwwroot."/theme/roshnilite/data/cat-3.jpg";
}
if (!empty($PAGE->theme->setting_file_url('masonryimage4', 'masonryimage4'))) {
    $masonryimage4 = $PAGE->theme->setting_file_url('masonryimage4', 'masonryimage4');
} else {
    $masonryimage4 = $CFG->wwwroot."/theme/roshnilite/data/cat-4.jpg";
}
if (!empty($PAGE->theme->setting_file_url('masonryimage5', 'masonryimage5'))) {
    $masonryimage5 = $PAGE->theme->setting_file_url('masonryimage5', 'masonryimage5');
} else {
    $masonryimage5 = $CFG->wwwroot."/theme/roshnilite/data/cat-5.jpg";
}
if (!empty($PAGE->theme->setting_file_url('masonryimage6', 'masonryimage6'))) {
    $masonryimage6 = $PAGE->theme->setting_file_url('masonryimage6', 'masonryimage6');
} else {
    $masonryimage6 = $CFG->wwwroot."/theme/roshnilite/data/cat-6.jpg";
}
if (!empty($PAGE->theme->setting_file_url('masonryimage7', 'masonryimage7'))) {
    $masonryimage7 = $PAGE->theme->setting_file_url('masonryimage7', 'masonryimage7');
} else {
    $masonryimage7 = $CFG->wwwroot."/theme/roshnilite/data/cat-7.jpg";
}
if (!empty($PAGE->theme->setting_file_url('masonryimage8', 'masonryimage8'))) {
    $masonryimage8 = $PAGE->theme->setting_file_url('masonryimage8', 'masonryimage8');
} else {
    $masonryimage8 = $CFG->wwwroot."/theme/roshnilite/data/cat-8.jpg";
}
if (!empty($html->masonryheading)) {
?>

<div class="categories">
	<div class="container">
		<h1 class="h-large"><?php echo $html->masonryheading; ?></h1>
		<h3 class="header-b-2"><?php echo $html->masonrysubheading; ?></h3>
	</div><!-- END of .container -->

	<div class="categories-items">
<?php
    if (!empty($html->masonrytext1)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $masonryimage1;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->masonryurl1; ?>"><?php echo $html->masonrytext1; ?></a></h5>
				<p><?php echo $html->masonrysubtext1; ?></p>
			</div>
		</div><!-- END of .categories-item -->
<?php 
    }
    if (!empty($html->masonrytext2)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $masonryimage2;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->masonryurl2; ?>"><?php echo $html->masonrytext2; ?></a></h5>
				<p><?php echo $html->masonrysubtext2; ?></p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->masonrytext3)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $masonryimage3;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->masonryurl3; ?>"><?php echo $html->masonrytext3; ?></a></h5>
				<p><?php echo $html->masonrysubtext3; ?></p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->masonrytext4)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $masonryimage4;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->masonryurl4; ?>"><?php echo $html->masonrytext4; ?></a></h5>
				<p><?php echo $html->masonrysubtext4; ?></p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->masonrytext5)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $masonryimage5;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->masonryurl5; ?>;"><?php echo $html->masonrytext5; ?></a></h5>
				<p><?php echo $html->masonrysubtext5; ?></p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->masonrytext6)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $masonryimage6;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->masonryurl6; ?>"><?php echo $html->masonrytext6; ?></a></h5>
				<p><?php echo $html->masonrysubtext6; ?></p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->masonrytext7)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $masonryimage7;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->masonryurl7; ?>"><?php echo $html->masonrytext7; ?></a></h5>
				<p><?php echo $html->masonrysubtext7; ?></p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->masonrytext8)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $masonryimage8; ?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->masonryurl8; ?>"><?php echo $html->masonrytext8; ?></a></h5>
				<p><?php echo $html->masonrysubtext8; ?></p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
?>
	</div><!-- END of .categories-items -->
</div><!-- END of .categories -->
<?php
}