[33mcommit ef094a2add8b72a22cb92ed8ada86088c41c5206[m
Author: Md. Mir Hossain <mircse11.duet@gmail.com>
Date:   Fri Nov 20 22:22:03 2015 +0600

    This is a School Website whis is developed by ME

[1mdiff --git a/.gitattributes b/.gitattributes[m
[1mnew file mode 100644[m
[1mindex 0000000..bdb0cab[m
[1m--- /dev/null[m
[1m+++ b/.gitattributes[m
[36m@@ -0,0 +1,17 @@[m
[32m+[m[32m# Auto detect text files and perform LF normalization[m
[32m+[m[32m* text=auto[m
[32m+[m
[32m+[m[32m# Custom for Visual Studio[m
[32m+[m[32m*.cs     diff=csharp[m
[32m+[m
[32m+[m[32m# Standard to msysgit[m
[32m+[m[32m*.doc	 diff=astextplain[m
[32m+[m[32m*.DOC	 diff=astextplain[m
[32m+[m[32m*.docx diff=astextplain[m
[32m+[m[32m*.DOCX diff=astextplain[m
[32m+[m[32m*.dot  diff=astextplain[m
[32m+[m[32m*.DOT  diff=astextplain[m
[32m+[m[32m*.pdf  diff=astextplain[m
[32m+[m[32m*.PDF	 diff=astextplain[m
[32m+[m[32m*.rtf	 diff=astextplain[m
[32m+[m[32m*.RTF	 diff=astextplain[m
[1mdiff --git a/.gitignore b/.gitignore[m
[1mnew file mode 100644[m
[1mindex 0000000..5982f9b[m
[1m--- /dev/null[m
[1m+++ b/.gitignore[m
[36m@@ -0,0 +1,27 @@[m
[32m+[m[32m.DS_Store[m
[32m+[m
[32m+[m[32mapplication/cache/*[m
[32m+[m[32m!application/cache/index.html[m
[32m+[m[32m!application/cache/.htaccess[m
[32m+[m
[32m+[m[32mapplication/logs/*[m
[32m+[m[32m!application/logs/index.html[m
[32m+[m[32m!application/logs/.htaccess[m
[32m+[m
[32m+[m[32muser_guide_src/build/*[m
[32m+[m[32muser_guide_src/cilexer/build/*[m
[32m+[m[32muser_guide_src/cilexer/dist/*[m
[32m+[m[32muser_guide_src/cilexer/pycilexer.egg-info/*[m
[32m+[m[32m/vendor/[m
[32m+[m
[32m+[m[32m# IDE Files[m
[32m+[m[32m#-------------------------[m
[32m+[m[32m/nbproject/[m
[32m+[m[32m.idea/*[m
[32m+[m
[32m+[m[32m## Sublime Text cache files[m
[32m+[m[32m*.tmlanguage.cache[m
[32m+[m[32m*.tmPreferences.cache[m
[32m+[m[32m*.stTheme.cache[m
[32m+[m[32m*.sublime-workspace[m
[32m+[m[32m*.sublime-project[m
[1mdiff --git a/.htaccess b/.htaccess[m
[1mnew file mode 100644[m
[1mindex 0000000..5856b37[m
[1m--- /dev/null[m
[1m+++ b/.htaccess[m
[36m@@ -0,0 +1,7 @@[m
[32m+[m[32m<IfModule mod_rewrite.c>[m
[32m+[m[32mRewriteEngine on[m
[32m+[m[32mRewriteBase /cbes/[m
[32m+[m[32mRewriteCond %{REQUEST_FILENAME} !-f[m
[32m+[m[32mRewriteCond %{REQUEST_FILENAME} !-d[m
[32m+[m[32mRewriteRule ^(.*)$ index.php/$1 [L][m
[32m+[m[32m</IfModule>[m
\ No newline at end of file[m
[1mdiff --git a/admin_css/960.css b/admin_css/960.css[m
[1mnew file mode 100644[m
[1mindex 0000000..406f77e[m
[1m--- /dev/null[m
[1m+++ b/admin_css/960.css[m
[36m@@ -0,0 +1,337 @@[m
[32m+[m[32m/*[m
[32m+[m	[32mVariable Grid System.[m
[32m+[m	[32mLearn more ~ http://www.spry-soft.com/grids/[m
[32m+[m	[32mBased on 960 Grid System - http://960.gs/[m
[32m+[m
[32m+[m	[32mLicensed under GPL and MIT.[m
[32m+[m[32m*/[m
[32m+[m
[32m+[m
[32m+[m[32m/* Containers[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m[32m.container_12 {[m
[32m+[m	[32mmargin-left: 10px;[m
[32m+[m	[32mwidth: 696px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m/* Grid >> Global[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m.grid_1,[m
[32m+[m[32m.grid_2,[m
[32m+[m[32m.grid_3,[m
[32m+[m[32m.grid_4,[m
[32m+[m[32m.grid_5,[m
[32m+[m[32m.grid_6,[m
[32m+[m[32m.grid_7,[m
[32m+[m[32m.grid_8,[m
[32m+[m[32m.grid_9,[m
[32m+[m[32m.grid_10,[m
[32m+[m[32m.grid_11,[m
[32m+[m[32m.grid_12 {[m
[32m+[m	[32mdisplay:inline;[m
[32m+[m	[32mfloat: left;[m
[32m+[m	[32mposition: relative;[m
[32m+[m	[32mmargin-left: 10px;[m
[32m+[m	[32mmargin-right: 10px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m/* Grid >> Children (Alpha ~ First, Omega ~ Last)[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m.alpha {[m
[32m+[m	[32mmargin-left: 0;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.omega {[m
[32m+[m	[32mmargin-right: 0;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m/* Grid >> 12 Columns[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m.container_12 .grid_1 {[m
[32m+[m	[32mwidth:38px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_2 {[m
[32m+[m	[32mwidth:96px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_3 {[m
[32m+[m	[32mwidth:154px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_4 {[m
[32m+[m	[32mwidth:212px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_5 {[m
[32m+[m	[32mwidth:270px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_6 {[m
[32m+[m	[32mwidth:328px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_7 {[m
[32m+[m	[32mwidth:386px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_8 {[m
[32m+[m	[32mwidth:444px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_9 {[m
[32m+[m	[32mwidth:502px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_10 {[m
[32m+[m	[32mwidth:560px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_11 {[m
[32m+[m	[32mwidth:618px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_12 {[m
[32m+[m	[32mwidth:676px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* Prefix Extra Space >> 12 Columns[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m.container_12 .prefix_1 {[m
[32m+[m	[32mpadding-left:58px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_2 {[m
[32m+[m	[32mpadding-left:116px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_3 {[m
[32m+[m	[32mpadding-left:174px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_4 {[m
[32m+[m	[32mpadding-left:232px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_5 {[m
[32m+[m	[32mpadding-left:290px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_6 {[m
[32m+[m	[32mpadding-left:348px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_7 {[m
[32m+[m	[32mpadding-left:406px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_8 {[m
[32m+[m	[32mpadding-left:464px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_9 {[m
[32m+[m	[32mpadding-left:522px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_10 {[m
[32m+[m	[32mpadding-left:580px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_11 {[m
[32m+[m	[32mpadding-left:638px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* Suffix Extra Space >> 12 Columns[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m.container_12 .suffix_1 {[m
[32m+[m	[32mpadding-right:58px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_2 {[m
[32m+[m	[32mpadding-right:116px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_3 {[m
[32m+[m	[32mpadding-right:174px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_4 {[m
[32m+[m	[32mpadding-right:232px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_5 {[m
[32m+[m	[32mpadding-right:290px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_6 {[m
[32m+[m	[32mpadding-right:348px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_7 {[m
[32m+[m	[32mpadding-right:406px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_8 {[m
[32m+[m	[32mpadding-right:464px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_9 {[m
[32m+[m	[32mpadding-right:522px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_10 {[m
[32m+[m	[32mpadding-right:580px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_11 {[m
[32m+[m	[32mpadding-right:638px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* Push Space >> 12 Columns[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m.container_12 .push_1 {[m
[32m+[m	[32mleft:58px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_2 {[m
[32m+[m	[32mleft:116px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_3 {[m
[32m+[m	[32mleft:174px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_4 {[m
[32m+[m	[32mleft:232px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_5 {[m
[32m+[m	[32mleft:290px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_6 {[m
[32m+[m	[32mleft:348px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_7 {[m
[32m+[m	[32mleft:406px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_8 {[m
[32m+[m	[32mleft:464px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_9 {[m
[32m+[m	[32mleft:522px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_10 {[m
[32m+[m	[32mleft:580px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_11 {[m
[32m+[m	[32mleft:638px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* Pull Space >> 12 Columns[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m.container_12 .pull_1 {[m
[32m+[m	[32mleft:-58px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_2 {[m
[32m+[m	[32mleft:-116px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_3 {[m
[32m+[m	[32mleft:-174px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_4 {[m
[32m+[m	[32mleft:-232px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_5 {[m
[32m+[m	[32mleft:-290px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_6 {[m
[32m+[m	[32mleft:-348px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_7 {[m
[32m+[m	[32mleft:-406px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_8 {[m
[32m+[m	[32mleft:-464px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_9 {[m
[32m+[m	[32mleft:-522px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_10 {[m
[32m+[m	[32mleft:-580px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_11 {[m
[32m+[m	[32mleft:-638px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* Clear Floated Elements[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m/* http://sonspring.com/journal/clearing-floats */[m
[32m+[m
[32m+[m[32m.clear {[m
[32m+[m	[32mclear: both;[m
[32m+[m	[32mdisplay: block;[m
[32m+[m	[32moverflow: hidden;[m
[32m+[m	[32mvisibility: hidden;[m
[32m+[m	[32mwidth: 0;[m
[32m+[m	[32mheight: 0;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m/* http://perishablepress.com/press/2008/02/05/lessons-learned-concerning-the-clearfix-css-hack */[m
[32m+[m
[32m+[m[32m.clearfix:after {[m
[32m+[m	[32mclear: both;[m
[32m+[m	[32mcontent: ' ';[m
[32m+[m	[32mdisplay: block;[m
[32m+[m	[32mfont-size: 0;[m
[32m+[m	[32mline-height: 0;[m
[32m+[m	[32mvisibility: hidden;[m
[32m+[m	[32mwidth: 0;[m
[32m+[m	[32mheight: 0;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.clearfix {[m
[32m+[m	[32mdisplay: inline-block;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m* html .clearfix {[m
[32m+[m	[32mheight: 1%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.clearfix {[m
[32m+[m	[32mdisplay: block;[m
[32m+[m[32m}[m
\ No newline at end of file[m
[1mdiff --git a/admin_css/960.fluid.css b/admin_css/960.fluid.css[m
[1mnew file mode 100644[m
[1mindex 0000000..7af2baa[m
[1m--- /dev/null[m
[1m+++ b/admin_css/960.fluid.css[m
[36m@@ -0,0 +1,343 @@[m
[32m+[m[32m/*[m
[32m+[m	[32mVariable Grid System (Fluid Version).[m
[32m+[m	[32mLearn more ~ http://www.spry-soft.com/grids/[m
[32m+[m	[32mBased on 960 Grid System - http://960.gs/ & 960 Fluid - http://www.designinfluences.com/[m
[32m+[m
[32m+[m	[32mLicensed under GPL and MIT.[m
[32m+[m[32m*/[m
[32m+[m
[32m+[m
[32m+[m[32m/* Containers[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m[32m.container_12 {[m
[32m+[m	[32mmargin-left: 1%;[m
[32m+[m	[32mmargin-right: 1%;[m
[32m+[m	[32mwidth: 98%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m/* Grid >> Global[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m.grid_1,[m
[32m+[m[32m.grid_2,[m
[32m+[m[32m.grid_3,[m
[32m+[m[32m.grid_4,[m
[32m+[m[32m.grid_5,[m
[32m+[m[32m.grid_6,[m
[32m+[m[32m.grid_7,[m
[32m+[m[32m.grid_8,[m
[32m+[m[32m.grid_9,[m
[32m+[m[32m.grid_10,[m
[32m+[m[32m.grid_11,[m
[32m+[m[32m.grid_12 {[m
[32m+[m	[32mdisplay:inline;[m
[32m+[m	[32mfloat: left;[m
[32m+[m	[32mposition: relative;[m
[32m+[m	[32mmargin-left: 1%;[m
[32m+[m	[32mmargin-right: 1%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m/* Grid >> Children (Alpha ~ First, Omega ~ Last)[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m.alpha {[m
[32m+[m	[32mmargin-left: 0;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.omega {[m
[32m+[m	[32mmargin-right: 0;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m/* Grid >> 12 Columns[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m
[32m+[m[32m.container_12 .grid_1 {[m
[32m+[m	[32mwidth:6.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_2 {[m
[32m+[m	[32mwidth:14.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_3 {[m
[32m+[m	[32mwidth:23.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_4 {[m
[32m+[m	[32mwidth:31.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_5 {[m
[32m+[m	[32mwidth:39.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_6 {[m
[32m+[m	[32mwidth:48.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_7 {[m
[32m+[m	[32mwidth:56.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_8 {[m
[32m+[m	[32mwidth:64.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_9 {[m
[32m+[m	[32mwidth:73.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_10 {[m
[32m+[m	[32mwidth:81.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_11 {[m
[32m+[m	[32mwidth:89.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .grid_12 {[m
[32m+[m	[32mwidth:98.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* Prefix Extra Space >> 12 Columns[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m
[32m+[m[32m.container_12 .prefix_1 {[m
[32m+[m	[32mpadding-left:8.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_2 {[m
[32m+[m	[32mpadding-left:16.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_3 {[m
[32m+[m	[32mpadding-left:25.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_4 {[m
[32m+[m	[32mpadding-left:33.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_5 {[m
[32m+[m	[32mpadding-left:41.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_6 {[m
[32m+[m	[32mpadding-left:50.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_7 {[m
[32m+[m	[32mpadding-left:58.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_8 {[m
[32m+[m	[32mpadding-left:66.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_9 {[m
[32m+[m	[32mpadding-left:75.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_10 {[m
[32m+[m	[32mpadding-left:83.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .prefix_11 {[m
[32m+[m	[32mpadding-left:91.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* Suffix Extra Space >> 12 Columns[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m
[32m+[m[32m.container_12 .suffix_1 {[m
[32m+[m	[32mpadding-right:8.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_2 {[m
[32m+[m	[32mpadding-right:16.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_3 {[m
[32m+[m	[32mpadding-right:25.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_4 {[m
[32m+[m	[32mpadding-right:33.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_5 {[m
[32m+[m	[32mpadding-right:41.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_6 {[m
[32m+[m	[32mpadding-right:50.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_7 {[m
[32m+[m	[32mpadding-right:58.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_8 {[m
[32m+[m	[32mpadding-right:66.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_9 {[m
[32m+[m	[32mpadding-right:75.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_10 {[m
[32m+[m	[32mpadding-right:83.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .suffix_11 {[m
[32m+[m	[32mpadding-right:91.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* Push Space >> 12 Columns[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m
[32m+[m[32m.container_12 .push_1 {[m
[32m+[m	[32mleft:8.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_2 {[m
[32m+[m	[32mleft:16.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_3 {[m
[32m+[m	[32mleft:25.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_4 {[m
[32m+[m	[32mleft:33.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_5 {[m
[32m+[m	[32mleft:41.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_6 {[m
[32m+[m	[32mleft:50.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_7 {[m
[32m+[m	[32mleft:58.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_8 {[m
[32m+[m	[32mleft:66.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_9 {[m
[32m+[m	[32mleft:75.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_10 {[m
[32m+[m	[32mleft:83.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .push_11 {[m
[32m+[m	[32mleft:91.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* Pull Space >> 12 Columns[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m
[32m+[m[32m.container_12 .pull_1 {[m
[32m+[m	[32mleft:-8.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_2 {[m
[32m+[m	[32mleft:-16.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_3 {[m
[32m+[m	[32mleft:-25.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_4 {[m
[32m+[m	[32mleft:-33.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_5 {[m
[32m+[m	[32mleft:-41.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_6 {[m
[32m+[m	[32mleft:-50.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_7 {[m
[32m+[m	[32mleft:-58.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_8 {[m
[32m+[m	[32mleft:-66.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_9 {[m
[32m+[m	[32mleft:-75.0%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_10 {[m
[32m+[m	[32mleft:-83.333%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.container_12 .pull_11 {[m
[32m+[m	[32mleft:-91.667%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* Clear Floated Elements[m
[32m+[m[32m----------------------------------------------------------------------------------------------------*/[m
[32m+[m
[32m+[m[32m/* http://sonspring.com/journal/clearing-floats */[m
[32m+[m
[32m+[m[32m.clear {[m
[32m+[m	[32mclear: both;[m
[32m+[m	[32mdisplay: block;[m
[32m+[m	[32moverflow: hidden;[m
[32m+[m	[32mvisibility: hidden;[m
[32m+[m	[32mwidth: 0;[m
[32m+[m	[32mheight: 0;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m/* http://perishablepress.com/press/2008/02/05/lessons-learned-concerning-the-clearfix-css-hack */[m
[32m+[m
[32m+[m[32m.clearfix:after {[m
[32m+[m	[32mclear: both;[m
[32m+[m	[32mcontent: ' ';[m
[32m+[m	[32mdisplay: block;[m
[32m+[m	[32mfont-size: 0;[m
[32m+[m	[32mline-height: 0;[m
[32m+[m	[32mvisibility: hidden;[m
[32m+[m	[32mwidth: 0;[m
[32m+[m	[32mheight: 0;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.clearfix {[m
[32m+[m	[32mdisplay: inline-block;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m* html .clearfix {[m
[32m+[m	[32mheight: 1%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.clearfix {[m
[32m+[m	[32mdisplay: block;[m
[32m+[m[32m}[m
\ No newline at end of file[m
[1mdiff --git a/admin_css/buttons.css b/admin_css/buttons.css[m
[1mnew file mode 100644[m
[1mindex 0000000..0004ac4[m
[1m--- /dev/null[m
[1m+++ b/admin_css/buttons.css[m
[36m@@ -0,0 +1,150 @@[m
[32m+[m[32m/*[m
[32m+[m[32m * Grape - Professional & Flexible Admin Template[m
[32m+[m[32m * by Stammi <http://themeforest.net/user/Stammi>[m
[32m+[m[32m *[m[41m [m
[32m+[m[32m * -----------------[m
[32m+[m[32m * TABLE OF CONTENTS[m
[32m+[m[32m * -----------------[m
[32m+[m[32m *[m[41m [m
[32m+[m[32m * 1) Generic Buttons[m
[32m+[m[32m * 2) Image Buttons[m
[32m+[m[32m * 3) Username Button[m
[32m+[m[32m * 4) Footer[m
[32m+[m[32m */[m
[32m+[m
[32m+[m[32m/* ==================================================[m
[32m+[m[32m * 1) Generic Buttons[m
[32m+[m[32m * ================================================== */[m
[32m+[m
[32m+[m[32m.button {[m
[32m+[m	[32mbackground: url("../img/buttons/button-blue.png") repeat-x scroll 0 0 #2d5672;[m
[32m+[m	[32mborder-radius: 20px 20px 20px 20px;[m
[32m+[m	[32mborder-style: solid;[m
[32m+[m	[32mborder-width: 1px;[m
[32m+[m	[32mborder-color: #111111;[m
[32m+[m	[32mcolor: #FFFFFF !important;[m
[32m+[m	[32mcursor: pointer;[m
[32m+[m	[32mdisplay: inline-block;[m
[32m+[m	[32mpadding: 5px 10px;[m
[32m+[m	[32mbox-shadow: 0 1px 4px rgba(0, 0, 0, 0.4);[m
[32m+[m	[32mheight: 14px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32minput[type="submit"].button {[m
[32m+[m	[32mheight: 26px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.button:hover {[m
[32m+[m	[32mbackground: url("../img/buttons/button-blue.png") repeat-x scroll 0 -24px #4d7690;[m
[32m+[m	[32mcolor: #fff !important;[m
[32m+[m	[32mtext-decoration: none;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.button:active {[m
[32m+[m	[32mbackground: url("../img/buttons/button-blue.png") repeat-x scroll 0 -48px #6290b2;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.button.red { background: url("../img/buttons/button-red.png") repeat-x scroll 0 0 #6b352b; }[m
[32m+[m[32m.button.red:hover { background: url("../img/buttons/button-red.png") repeat-x scroll 0 -24px #834a3f; }[m
[32m+[m[32m.button.red:active { background: url("../img/buttons/button-red.png") repeat-x scroll 0 -48px #a85f51; }[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* ==================================================[m
[32m+[m[32m * 2) Image Buttons[m
[32m+[m[32m * ================================================== */[m
[32m+[m
[32m+[m[32m.btn-info {[m
[32m+[m	[32mbackground: url("../img/icons/toolbox/20x20/info.png") no-repeat scroll 0 0 transparent;[m
[32m+[m	[32mheight: 20px;[m
[32m+[m	[32mwidth: 20px;[m
[32m+[m	[32mposition: relative;[m
[32m+[m	[32mmargin-left: -10px;[m
[32m+[m	[32mmargin-top: 10px;[m
[32m+[m	[32mfloat: left;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.btn-info:hover {[m
[32m+[m	[32mbackground-position: 0px -20px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.arrow-link-down {[m
[32m+[m	[32mbackground: url("../img/icons/misc/arrow-down.png") no-repeat scroll center right transparent;[m
[32m+[m	[32mpadding-right: 20px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.arrow-link-down:hover {[m
[32m+[m	[32mbackground: url("../img/icons/misc/arrow-down-hover.png") no-repeat scroll center right transparent;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* ==================================================[m
[32m+[m[32m * 3) Username Button[m
[32m+[m[32m * ================================================== */[m
[32m+[m
[32m+[m[32m.user-button {[m
[32m+[m	[32mbackground: url("../img/misc/shine-effect.png") repeat-x scroll top left #344655;[m
[32m+[m	[32mborder: 1px solid #000;[m
[32m+[m	[32mborder-radius: 3px 3px 3px 3px;[m
[32m+[m	[32mposition: relative;[m
[32m+[m	[32mfloat: left;[m
[32m+[m	[32mdisplay: inline-block;[m
[32m+[m	[32mpadding: 8px 8px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.user-button:hover {[m
[32m+[m	[32mbackground: url("../img/misc/shine-effect.png") repeat-x scroll top left #495f71;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.user-button:active {[m
[32m+[m	[32mtop: 1px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.user-button a {[m
[32m+[m	[32mdisplay: block;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m/* ==================================================[m
[32m+[m[32m * 4) Footer[m
[32m+[m[32m * ================================================== */[m
[32m+[m
[32m+[m[32m#footer a.top {[m
[32m+[m	[32mbackground: url("../img/icons/misc/top-hover.png") no-repeat scroll 0 0 transparent;[m
[32m+[m	[32mheight: 48px;[m
[32m+[m	[32mwidth: 48px;[m
[32m+[m	[32mdisplay: block;[m
[32m+[m	[32mmargin-left: 5px;[m
[32m+[m	[32mpadding-top: 3px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m#footer a.top:hover {[m
[32m+[m	[32mbackground-position: 0 -48px;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[1mdiff --git a/admin_css/charts.css b/admin_css/charts.css[m
[1mnew file mode 100644[m
[1mindex 0000000..53531f5[m
[1m--- /dev/null[m
[1m+++ b/admin_css/charts.css[m
[36m@@ -0,0 +1,64 @@[m
[32m+[m[32m/*[m
[32m+[m[32m * Grape - Professional & Flexible Admin Template[m
[32m+[m[32m * by Stammi <http://themeforest.net/user/Stammi>[m
[32m+[m[32m *[m[41m [m
[32m+[m[32m * -----------------[m
[32m+[m[32m * TABLE OF CONTENTS[m
[32m+[m[32m * -----------------[m
[32m+[m[32m *[m[41m [m
[32m+[m[32m * 1) Generic[m
[32m+[m[32m *   1.1) plugin styles[m
[32m+[m[32m *   1.2) table title, key elements[m
[32m+[m[32m *   1.3) pie labels[m
[32m+[m[32m *   1.4) line,bar, area labels[m
[32m+[m[32m */[m
[32m+[m
[32m+[m[32m/* ==================================================[m
[32m+[m[32m * 1) Generic[m
[32m+[m[32m * ================================================== */[m
[32m+[m
[32m+[m[32mtable.graph {[m
[32m+[m	[32mdisplay: none;[m
[32m+[m	[32mwidth: 90%;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m/*[m
[32m+[m[32m * 1.1) plugin styles[m
[32m+[m[32m */[m
[32m+[m[32m.visualize { margin: 35px auto; border: 1px solid #888; position: relative; background: #fafafa; }[m
[32m+[m[32m.visualize canvas { position: absolute; }[m
[32m+[m[32m.visualize ul,.visualize li { margin: 0; padding: 0;}[m
[32m+[m
[32m+[m[32m/*[m
[32m+[m[32m * 1.2) table title, key elements[m
[32m+[m[32m */[m
[32m+[m[32m.visualize .visualize-info { padding: 3px 5px; background: #fafafa; border: 1px solid #888; position: absolute; top: -20px; right: 10px; opacity: .8; }[m
[32m+[m[32m.visualize .visualize-title { display: block; color: #333; margin-bottom: 3px;  font-size: 1.1em; }[m
[32m+[m[32m.visualize ul.visualize-key { list-style: none;  }[m
[32m+[m[32m.visualize ul.visualize-key li { list-style: none; float: left; margin-right: 10px; padding-left: 10px; position: relative;}[m
[32m+[m[32m.visualize ul.visualize-key .visualize-key-color { width: 6px; height: 6px; left: 0; position: absolute; top: 50%; margin-top: -3px;  }[m
[32m+[m[32m.visualize ul.visualize-key .visualize-key-label { color: #000; }[m
[32m+[m
[32m+[m[32m/*[m
[32m+[m[32m * 1.3) pie labels[m
[32m+[m[32m */[m
[32m+[m[32m.visualize-pie .visualize-labels { list-style: none; }[m
[32m+[m[32m.visualize-pie .visualize-label-pos, .visualize-pie .visualize-label { position: absolute;  margin: 0; padding:0; }[m
[32m+[m[32m.visualize-pie .visualize-label { display: block; color: #fff; font-weight: bold; font-size: 1em; }[m
[32m+[m[32m.visualize-pie-outside .visualize-label { color: #000; font-weight: normal; }[m
[32m+[m
[32m+[m[32m/*[m
[32m+[m[32m * 1.4) line,bar, area labels[m
[32m+[m[32m */[m
[32m+[m[32m.visualize-labels-x,.visualize-labels-y { position: absolute; left: 0; top: 0; list-style: none; }[m
[32m+[m[32m.visualize-labels-x li, .visualize-labels-y li { position: absolute; bottom: 0; }[m
[32m+[m[32m.visualize-labels-x li span.label, .visualize-labels-y li span.label { position: absolute; color: #555;  }[m
[32m+[m[32m.visualize-labels-x li span.line, .visualize-labels-y li span.line {  position: absolute; border: 0 solid #ccc; }[m
[32m+[m[32m.visualize-labels-x li { height: 100%; }[m
[32m+[m[32m.visualize-labels-x li span.label { top: 100%; margin-top: 5px; }[m
[32m+[m[32m.visualize-labels-x li span.line { border-left-width: 1px; height: 100%; display: block; }[m
[32m+[m[32m.visualize-labels-x li span.line { border: 0;} /*hide vertical lines on area, line, bar*/[m
[32m+[m[32m.visualize-labels-y li { width: 100%;  }[m
[32m+[m[32m.visualize-labels-y li span.label { right: 100%; margin-right: 5px; display: block; width: 100px; text-align: right; }[m
[32m+[m[32m.visualize-labels-y li span.line { border-top-width: 1px; width: 100%; }[m
[32m+[m[32m.visualize-bar .visualize-labels-x li span.label { width: 100%; text-align: center; }[m
\ No newline at end of file[m
[1mdiff --git a/admin_css/forms.css b/admin_css/forms.css[m
[1mnew file mode 100644[m
[1mindex 0000000..424fc98[m
[1m--- /dev/null[m
[1m+++ b/admin_css/forms.css[m
[36m@@ -0,0 +1,811 @@[m
[32m+[m[32m/*[m
[32m+[m[32m * Grape - Professional & Flexible Admin Template[m
[32m+[m[32m * by Stammi <http://themeforest.net/user/Stammi>[m
[32m+[m[32m *[m[41m [m
[32m+[m[32m * -----------------[m
[32m+[m[32m * TABLE OF CONTENTS[m
[32m+[m[32m * -----------------[m
[32m+[m[32m *[m[41m [m
[32m+[m[32m * 1) Generic[m
[32m+[m[32m * 2) Validation[m
[32m+[m[32m * 3) Grid[m
[32m+[m[32m * 4)