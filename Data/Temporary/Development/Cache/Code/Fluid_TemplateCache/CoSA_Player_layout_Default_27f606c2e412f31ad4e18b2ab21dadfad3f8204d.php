<?php
class FluidCache_CoSA_Player_layout_Default_27f606c2e412f31ad4e18b2ab21dadfad3f8204d extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<!DOCTYPE html>
<html>
	<head>
		<title>Fachhochschule Salzburg: Fachhochschule Salzburg</title>
		<meta charset="utf-8">
		<title>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['section'] = 'Title';
$arguments1['partial'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '</title>
		<link rel="stylesheet" href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments4 = array();
$arguments4['path'] = 'css/style.css';
$arguments4['package'] = NULL;
$arguments4['resource'] = NULL;
$arguments4['uri'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '" type="text/css" media="all" />
		<link rel="stylesheet" href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments7 = array();
$arguments7['path'] = 'css/print.css';
$arguments7['package'] = NULL;
$arguments7['resource'] = NULL;
$arguments7['uri'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '" type="text/css" />
		<script type="text/javascript" src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments10 = array();
$arguments10['path'] = 'js/jquery-1.2.2.pack.js';
$arguments10['package'] = NULL;
$arguments10['resource'] = NULL;
$arguments10['uri'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '"></script>
		<script type="text/javascript" src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments13 = array();
$arguments13['path'] = 'js/scripts.js';
$arguments13['package'] = NULL;
$arguments13['resource'] = NULL;
$arguments13['uri'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '"></script>
		
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\BaseViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\BaseViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\BaseViewHelper

$output0 .= $viewHelper18->initializeArgumentsAndRender();

$output0 .= '
	</head>
	<body class="startseite">
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments19 = array();
$arguments19['class'] = 'flashmessages';
$arguments19['additionalAttributes'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper21->initializeArgumentsAndRender();

$output0 .= '
		<div id="topArea"><!--###topArea### begin -->
		<div id="naviTop"><!--###naviTop### begin -->

		<div style="display:none;" id="intranetStuff"><!--###intranetStuff### begin -->
			<h2>Login für das FH Salzburg Intranet</h2>
			<form method="post" action="https://www.fh-salzburg.ac.at/FHCampus.747.0.html">
				<div>
				<label for="tx-newloginbox-pi1-user">Benutzer</label>
				<input type="text" id="tx-newloginbox-pi1-user" value="Benutzer" size="15" name="user">

				<label for="tx-newloginbox-pi1-pass">Passwort</label>
				<input type="password" id="tx-newloginbox-pi1-pass" size="15" name="pass">

				<input type="submit" id="tx-newloginbox-pi1-login_submit" value="Login" name="submit">
				<input type="hidden" value="login" name="logintype">
				<input type="hidden" value="96" name="pid">
				<input type="hidden" value="" name="redirect_url">
				</div>
			</form>
		<!--###intranetStuff### end --></div><!--/intranetStuff -->

		<hr>

		<div style="display:none;" id="suchDiv">	<form action="index.php?id=suche&amp;no_cache=1" method="post">
				<h2>Bitte geben Sie hier einen Suchbegriff ein!</h2>
				<div>
					<input type="hidden" value="1" name="no_cache">
					<input type="hidden" value="0" name="tx_mgsearch_pi1[more]">
					<input type="hidden" value="0" name="tx_mgsearch_pi1[lang]">

		                             <input type="text" value="Suchbegriff" name="tx_mgsearch_pi1[query]" size="36" id="suchfeld">
					<input type="submit" value="Suchen" name="searchGoogle" id="suchbutton">

					<br>
					<label for="googleindex">Suchen in:</label>
					<select id="googleindex" name="tx_mgsearch_pi1[googleindex]">
						<option value="2">Personen</option>
						<option value="0">FH</option>				
					</select>
				</div>
			</form>
		</div><!--/suchDiv-->

		<hr>

		<ul id="topMenu"><li id="access"><a title="Tips zum Ändern der Schriftgröße und zum Bedienen der Website &ndash; auch ohne Mouse" href="weitere-seiten/bedienhilfen/"><span id="accessErklaerung">Bedienhilfen</span></a></li>
				<li id="intra"><a title="Intranet" target="_blank" href="https://www.fh-salzburg.ac.at/fileadmin/sso/login.php">FHS Intranet</a></li><a title="Intranet" target="_blank" href="https://www.fh-salzburg.ac.at/fileadmin/sso/login.php">
				</a><li id="druckversion"><a title="Intranet" target="_blank" href="https://www.fh-salzburg.ac.at/fileadmin/sso/login.php"></a><a title="zur druckoptimierten Version dieser Seite" href="index.php?id=1899&amp;type=98&amp;tx_ttnews[tt_news]=&amp;tx_cljoboffers_pi1[showUid][showUID]=&amp;cHash="><span id="druckErklaerung">Druckversion</span></a></li>
				<li id="suchen"><a title="Suchen" href="weitere-seiten/suche/" id="suchDiv_Button">Suchen</a></li><li id="sidemap"><a href="weitere-seiten/sitemap/">Sitemap</a></li><li id="fhsys"><a title="FHSYS" target="_blank" href="https://fhsys.fh-salzburg.ac.at">FHSYS</a></li>
				<li id="sprachen"><a title="english version" href="en/">english</a></li></ul>
		<!--###naviTop### end --></div><!--/naviTop-->

		<!--###topArea### end --></div>
		<hr />

		<div id="wrap"><!--###wrap### begin -->

		<a title="Startseite" href="/"><img width="118" height="74" alt="Fh Salzburg" src="fileadmin/template/p/fh_salzburg_logo.gif" id="logo"></a>

		<h1 id="fh">Fachhochschule Salzburg<br><span>University of Applied Science</span></h1>

		<hr>

		<div id="trailers"><div class="csc-default" id="c5557"><div class="csc-textpic csc-textpic-left csc-textpic-above"><div class="csc-textpic-imagewrap"><div class="csc-textpic-image csc-textpic-firstcol"><img width="207" height="155" title="Junger Mann mit Kappe" alt="Junger Mann mit Kappe" src="uploads/pics/group.jpg"><div class="csc-textpic-caption"></div></div><div class="csc-textpic-image"><img width="207" height="155" title="Digitaler Roboter" alt="Digitaler Roboter" src="uploads/pics/010.jpg"><div class="csc-textpic-caption"></div></div><div class="csc-textpic-image"><img width="207" height="155" title="Filmstudio" alt="Filmstudio" src="uploads/pics/iphone.jpg"><div class="csc-textpic-caption"></div></div><div class="csc-textpic-image csc-textpic-lastcol"><a title="Illustration" href="http://multimediatechnology.at/"><img width="207" height="155" alt="Illustration" src="uploads/pics/blog_bachelor.jpg"><span>Link öffnen</span></a><div class="csc-textpic-caption"></div></div></div></div><div class="csc-textpic-clear"><!-- --></div></div></div>

		<hr>

		
		<!--###wrap### end --></div>
		
		<h1>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments22 = array();
$arguments22['section'] = 'Title';
$arguments22['partial'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper24->initializeArgumentsAndRender();

$output0 .= '</h1>
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments25 = array();
$arguments25['section'] = 'Content';
$arguments25['partial'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper27->initializeArgumentsAndRender();

$output0 .= '
		
		<div id="footer">
			<div id="footerInhalt">
				<ul id="footerMenu"><li><a href="info/service-fuer-schulen/"  >Service f¸r Schulen</a></li><li><a href="info/presse/allgemeines/"  >Presse</a></li><li><a href="info/online-bewerbung/"  >Online Bewerbung</a></li></ul>
				<ul id="footerMenu1"><li><a href="aktuelles/jobboerse/jobs-an-der-fhs/"  >Jobs an der FHS</a></li><li><a href="info2/kontakt/"  >Kontakt</a></li><li><a href="ueber-uns/organisation/abteilungen/wolfgang-gmachl-bibliothek/"  >Bibliothek</a></li><li><a href="info2/impressum/"  >Impressum</a></li></ul>
				<hr />


				<div id="SocialBookmarks"><h3>Social Bookmarks</h3>
				<ul>
					<li><a id="Delicious" href="http://del.icio.us/" onclick="window.open(\'http://del.icio.us/post?v=2&amp;url=\'+encodeURIComponent(location.href)+\'&amp;notes=&amp;tags=&amp;title=\'+encodeURIComponent(document.title));return false;" title="Delicious">Delicious<span>&#160;</span></a></li>
					<li><a id="Digg" href="http://digg.com/" onclick="window.open(\'http://digg.com/submit?phase=2&amp;url=\'+encodeURIComponent(location.href)+\'&amp;bodytext=&amp;tags=&amp;title=\'+encodeURIComponent(document.title));return false;" title="Digg">Digg<span>&#160;</span></a></li>
					<li><a id="Facebook" href="http://www.facebook.com/pages/Puch-Bei-Hallein-Austria/Fachhochschule-Salzburg/109575046285" title="Facebook">Facebook<span>&#160;</span></a></li>
					<li><a id="Fachhochschulen" href="http://fachhochschulen.ac.at/de/alle_fachhochschulen/fh_salzburg" title="Fachhochschulen.ac.at">Fachhochschulen.at<span>&#160;</span></a></li>
					<li><a id="Flickr" href="http://www.flickr.com/photos/fhsalzburg" title="Flickr">Flickr<span>&#160;</span></a></li>
					<li><a id="Friendfeed" href="http://friendfeed.com/fhsalzburg" title="Friendfeed">FriendFeed<span>&#160;</span></a></li>
					<li><a id="Myspace" href="http://www.myspace.com/490746034" title="Myspace">My Space<span>&#160;</span></a></li>
					<li><a id="Myvideo" href="http://www.myvideo.at/Community/Mitglieder/Profil?searchMember=7567006" title="Myvideo">My Video<span>&#160;</span></a></li>
					<li><a id="Slideshare" href="http://www.slideshare.net/fhsalzburg" title="Slideshare">Slideshare<span>&#160;</span></a></li>
					<li><a id="Twitter" href="http://twitter.com/fhsalzburg" title="Twitter">Twitter<span>&#160;</span></a></li>
					<li><a id="Vimeo" href="http://vimeo.com/user2799189" title="Vimeo">Vimeo<span>&#160;</span></a></li>
					<li><a id="MisterWong" href="http://www.mister-wong.de/" onclick="window.open(\'http://www.mister-wong.de/index.php?action=addurl&amp;bm_url=\'+encodeURIComponent(location.href)+\'&amp;bm_notice=&amp;bm_description=\'+encodeURIComponent(document.title)+\'&amp;bm_tags=\');return false;" title="Mister Wong">Mister Wong<span>&#160;</span></a></li>
					<li><a id="Youtube" href="http://www.youtube.com/fhsalzburg" title="Youtube">Youtube<span>&#160;</span></a></li>

				<br><br>
				</ul>
				<br>
				 <span style="padding-left: -40px; vertical-align: top;"><a href="http://www.fh-salzburg.ac.at/index.php?id=2353" title="Virtour"><h3><font color="000000"><span style="vertical-align:top;">Virtuelle Tour</span></font><hr /><span style="padding-left:8px;"><img src="http://www.fh-salzburg.ac.at/fileadmin/images/arrow.png" width="15" height="15"></span></a></span>
				</div>
				<hr />

				<div id="Urstein"><div id="c5546" class="csc-default" ><h3><a href="no_cache/info2/kontakt/campus-urstein/" class="undefined" >Campus Urstein</a></h3>
		<p class="bodytext"><a href="no_cache/info2/kontakt/campus-urstein/" title="√úbersichtskarte" >Urstein S¸d 1<br /> A-5412 Puch/Salzburg<br /> Tel: +43-(0)50-2211-0<br /> Fax: +43-(0)50-2211-1099</a>  </p></div></div>

				<div id="Kuchl"><div id="c5547" class="csc-default" ><h3><a href="no_cache/info2/kontakt/campus-kuchl/" class="undefined" >Campus Kuchl</a></h3>
		<p class="bodytext"><a href="no_cache/info2/kontakt/campus-kuchl/" class="undefined" >Markt 136a<br />A-5431 Kuchl<br />Tel: +43-(0)50-2211-2000<br />Fax: +43-(0)50-2211-2099</a>  </p></div></div>

				<hr />

				<a id="topScroller" href="#topArea" title="scrollt nach oben">top</a>
		</div>
	</body>
</html>';

return $output0;
}


}
#0             16433     