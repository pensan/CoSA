<?php
class FluidCache_TYPO3_CoSA_Room_layout_Default_0248b0f9355f42570d010d261db02e0d93d9d507 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
		
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\BaseViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\BaseViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\BaseViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '
	</head>
	<body class="startseite">
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments10 = array();
$arguments10['class'] = 'flashmessages';
$arguments10['additionalAttributes'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '
		
		<div id="topArea">

			<div id="intranetStuff" style="display:none;">
				<h2>Intranet-Navigation &#8211; hier kommen sp&#228;ter Sachen dazu wie:</h2>
				<ul>
					<li>Login-Maske</li>
					<li>Meldung &#252;ber eingegangene Mails (wenn man eingeloggt ist)</li>
					<li>Links zum eigenen Webspace &#38; eLearning</li>
					<li>weitere Intranet-Links</li>
					<li>&#8230;</li>
				</ul>


			<hr />

				<div id="suchDiv" style="display:none;">	<form method="post" action="index.php?id=suche&amp;no_cache=1">
					<h2>Bitte geben Sie hier einen Suchbegriff ein!</h2>
					<div>
						<input type="hidden" name="no_cache" value="1" />
						<input type="hidden" name="tx_mgsearch_pi1[more]" value="0" />
						<input type="hidden" name="tx_mgsearch_pi1[lang]" value="0" />

				                         <input type="text" id="suchfeld" size="36" name="tx_mgsearch_pi1[query]" value="Suchbegriff" />
						<input type="submit" id="suchbutton" name="searchGoogle" value="Suchen" />

						<br />
						<label for="googleindex">Suchen in:</label>
						<select name="tx_mgsearch_pi1[googleindex]" id="googleindex">
							<option value="2">Personen</option>
							<option value="0">FH</option>				
						</select>
					</div>
				</form>
				</div>

			<hr />

				<ul id="topMenu"><li id="access"><a href="weitere-seiten/bedienhilfen/" title="Tips zum &#196;ndern der Schriftgr&#246;&#223;e und zum Bedienen der Website &#8211; auch ohne Mouse"><span id="accessErklaerung">Bedienhilfen</span></a></li>
						<li id="intra"><a href="https://www.fh-salzburg.ac.at/fileadmin/sso/login.php" target="_blank" title="Intranet">FHS Intranet</a></li>
						<li id="druckversion"><a href="index.php?id=1&amp;type=98&amp;tx_ttnews[tt_news]=&tx_cljoboffers_pi1[showUid][showUID]=&cHash=" title="zur druckoptimierten Version dieser Seite"><span id="druckErklaerung">Druckversion</span></a></li>
						<li id="suchen"><a id="suchDiv_Button" href="weitere-seiten/suche/" title="Suchen">Suchen</a></li><li id="sidemap"><a href="weitere-seiten/sitemap/"  >Sitemap</a></li><li id="fhsys"><a href="https://fhsys.fh-salzburg.ac.at" target="_blank" title="FHSYS">FHSYS</a></li>
						<li id="sprachen"><a href="en/" title="english version">english</a></li>
				</ul>
			</div>
		</div>

		<hr />

		<div id="wrap">

		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments13 = array();
$arguments13['action'] = 'index';
$arguments13['controller'] = 'standard';
$arguments13['additionalAttributes'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['package'] = NULL;
$arguments13['subpackage'] = NULL;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['additionalParams'] = array (
);
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['name'] = NULL;
$arguments13['rel'] = NULL;
$arguments13['rev'] = NULL;
$arguments13['target'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '<img id="logo" src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments16 = array();
$arguments16['path'] = 'pics/fh_salzburg_logo.gif';
$arguments16['package'] = NULL;
$arguments16['resource'] = NULL;
$arguments16['uri'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output15 .= $viewHelper18->initializeArgumentsAndRender();

$output15 .= '" alt="Fh Salzburg" width="118" height="74" />';
return $output15;
};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper19->setArguments($arguments13);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper19->initializeArgumentsAndRender();

$output0 .= '
		
		<h1 id="fh">Fachhochschule Salzburg<br /><span>University of Applied Science</span></h1>

		<hr />

		<div id="trailers"><div id="c5541" class="csc-default" ><div class="csc-textpic csc-textpic-left csc-textpic-above"><div class="csc-textpic-imagewrap"><div class="csc-textpic-image csc-textpic-firstcol"><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments20 = array();
$arguments20['path'] = 'pics/1110_Gamelab.jpg';
$arguments20['package'] = NULL;
$arguments20['resource'] = NULL;
$arguments20['uri'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper22->initializeArgumentsAndRender();

$output0 .= '" width="207" height="155" alt="Studierende im GameLab" title="Studierende im GameLab" /><div class="csc-textpic-caption"></div></div><div class="csc-textpic-image"><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments23 = array();
$arguments23['path'] = 'pics/20111116_Button_BeSt_BIM_01.JPG';
$arguments23['package'] = NULL;
$arguments23['resource'] = NULL;
$arguments23['uri'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper25->initializeArgumentsAndRender();

$output0 .= '" width="207" height="155" alt="Studierende Tourismus / Exkursion Casino Klessheim" title="Studierende Tourismus / Exkursion Casino Klessheim" /><div class="csc-textpic-caption"></div></div><div class="csc-textpic-image"><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments26 = array();
$arguments26['path'] = 'pics/1111_SMS_Logo_neu1.jpg';
$arguments26['package'] = NULL;
$arguments26['resource'] = NULL;
$arguments26['uri'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper28->initializeArgumentsAndRender();

$output0 .= '" width="207" height="155" alt="Semesterstart: Studierende im Foyer Urstein" title="Semesterstart: Studierende im Foyer Urstein" /><div class="csc-textpic-caption"></div></div><div class="csc-textpic-image csc-textpic-lastcol"><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments29 = array();
$arguments29['path'] = 'pics/20111107_bwi_Contacta_Button_Website.jpg';
$arguments29['package'] = NULL;
$arguments29['resource'] = NULL;
$arguments29['uri'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper31->initializeArgumentsAndRender();

$output0 .= '" width="207" height="155" alt="Salzburger Marketing Symposium" /><div class="csc-textpic-caption"></div></div></div></div><div class="csc-textpic-clear"><!-- --></div></div></div>

		
			<ul id="hauptnavigation">
				<div id="ContentBlock">
					<h1>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments32 = array();
$arguments32['section'] = 'Title';
$arguments32['partial'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['optional'] = false;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper34->initializeArgumentsAndRender();

$output0 .= '</h1>
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments35 = array();
$arguments35['section'] = 'Content';
$arguments35['partial'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['optional'] = false;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper37->setArguments($arguments35);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper37->initializeArgumentsAndRender();

$output0 .= '
				</div>
			</ul>
		</div>
		
		<div id="footer">
			<div id="footerInhalt">
				<ul id="footerMenu"><li><a href="info/service-fuer-schulen/"  >Service f&uuml;r Schulen</a></li><li><a href="info/presse/allgemeines/"  >Presse</a></li><li><a href="info/online-bewerbung/"  >Online Bewerbung</a></li></ul>
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
		
	</body>
</html>';

return $output0;
}


}
#0             18063     