<?php
namespace gamut;

LocalSite::aside((isset($pageLevelAside))
	? $pageLevelAside
	: '<div class="Module Module--sidebar Module--news">
<h2 class="Module__header"><a href="/artdept/web/news" class="Module__headerLink">Announcements</a></h2>
<ul class="news-annos Module__list"><li class="Module__listItem"><a href="/artdept/web/news/announcements/2012-2013/130110-century-association.html" class="Module__link">Three paintings tied to the Hudson River School now on rare public view at the Frances Lehman Loeb Art Center through May 2014</a></li><li class="Module__listItem"><a href="/artdept/web/news/announcements/2012-2013/130110-century-association.html" class="Module__link">Three paintings tied to the Hudson River School now on rare public view at the Frances Lehman Loeb Art Center through May 2014</a></li></ul>
<p class="all-link"><a class="moreLink" href="/artdept/web/news">View all</a></p></div>

<div class="Module Module--contact Module--sidebar"><h2 class="Module__header">Contact</h2><div class="Module__item"><h3 class="Module__name orgname">Art Department at Vassar College</h3><div class="Module__list"><dl class="Module__listItem"><dt class="ac-hiddenVisually Module__label">Phone</dt><dd><a class="tel Module__tel" href="tel:+18454375426">(845) 437-5426</a></dd></dl><dl class="Module__listItem"><dt class="ac-hiddenVisually Module__label">Office</dt><dd> <b class="extended-address Module__building">Main Building</b>, <b class="extended-address Module__room">North 163</b></dd></dl><dl class="Module__listItem"><dt class="ac-hiddenVisually Module__label">Email</dt><dd><a class="email Module__email" href="mailto:campuslife@vassar.edu">campuslife@vassar.edu</a></dd></dl><dl class="Module__listItem"><dt class="Module__label">Vassar College Box</dt><dd class="post-office-box Module__poBox">24</dd></dl> <a class="moreLink" href="/staff/">View Staff</a></div></div></div>

<div class="Module Module--hours Module--sidebar"><h2 class="Module__header">Hours</h2><ul class="Module__list"><li class="Module__listItem"> <b class="Module__days Module__label--side">Weekdays<b class="separator">:</b></b> <b class="Module__times">8:30am – 5pm</b></li></ul></div>');

	echo 
		U_CONTENT_CLOSE.
		U_ASIDE_OPEN.
		U_ASIDE_CONTENT.
		U_ASIDE_CLOSE.
		U_MAIN_CLOSE.
		U_SEARCH.
		U_NAV.
		U_FOOTER_OPEN.
			U_VCARD.
		U_FOOTER_CLOSE.
		U_JS_LOCAL.
		U_CONTAINER_CLOSE.
	U_BODY_CLOSE.
U_HTML_CLOSE;


// Cache the contents to a file
/* USE THIS LINE */
/*****$cachefile = PATH_LOCAL_ABS .'/cached/' . str_replace('/', '-', ltrim(FILE_CURRENT_LOCAL_PATH_FULL,'/'));
*/
//d(str_replace(FILE_CURRENT_FILENAME, '', PATH_LOCAL_ABS . FILE_CURRENT_LOCAL_PATH_FULL));
//$fullPathFolder = (str_replace(FILE_CURRENT_FILENAME, '', PATH_LOCAL_ABS . FILE_CURRENT_LOCAL_PATH_FULL));
//d($fullPathFolder);
//chmod($fullPathFolder, 0777);
/******
$cached = fopen($cachefile, 'w');
//d($cached);
fwrite($cached, ob_get_contents());
fclose($cached);
ob_end_flush(); // Send the output to the browser
*/
