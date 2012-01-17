<?php
class FluidCache_CoSA_Player_layout_Default_05d24289315ab4980764239176e6a23e21f1f70c extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
		<div id="topArea">
			<div id="naviTop"/>

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

		<a href="/" title="Startseite"><img id="logo" src="http://localhost:8888/fileadmin/templates/templates/pics/fh_salzburg_logo.gif" alt="Fh Salzburg" width="118" height="74" /></a>

		<h1 id="fh">Fachhochschule Salzburg<br /><span>University of Applied Science</span></h1>

		<hr />

		<div id="trailers"><div id="c5541" class="csc-default" ><div class="csc-textpic csc-textpic-left csc-textpic-above"><div class="csc-textpic-imagewrap"><div class="csc-textpic-image csc-textpic-firstcol"><img src="http://localhost:8888/fileadmin/templates/templates/pics/1110_Gamelab.jpg" width="207" height="155" alt="Studierende im GameLab" title="Studierende im GameLab" /><div class="csc-textpic-caption"></div></div><div class="csc-textpic-image"><img src="http://localhost:8888/fileadmin/templates/templates/pics/20111116_Button_BeSt_BIM_01.JPG" width="207" height="155" alt="Studierende Tourismus / Exkursion Casino Klessheim" title="Studierende Tourismus / Exkursion Casino Klessheim" /><div class="csc-textpic-caption"></div></div><div class="csc-textpic-image"><img src="http://localhost:8888/fileadmin/templates/templates/pics/1111_SMS_Logo_neu1.jpg" width="207" height="155" alt="Semesterstart: Studierende im Foyer Urstein" title="Semesterstart: Studierende im Foyer Urstein" /><div class="csc-textpic-caption"></div></div><div class="csc-textpic-image csc-textpic-lastcol"><a href="http://localhost:8888/fileadmin/studiengaenge/bwi/documents/1111_SMS_Folder.pdf" target="_blank" title="Salzburger Marketing Symposium"><img src="http://localhost:8888/fileadmin/templates/templates/pics/20111107_bwi_Contacta_Button_Website.jpg" width="207" height="155" alt="Salzburger Marketing Symposium" /><span>Link &ouml;ffnen</span></a><div class="csc-textpic-caption"></div></div></div></div><div class="csc-textpic-clear"><!-- --></div></div></div>

		<hr />
		<!--TYPO3SEARCH_begin-->
		<div id="ContentBlock" class="oberhalbMenue"><div id="c5548" class="csc-default" ><div class="csc-header csc-header-n1"><h2 class="csc-firstHeader">Topnews</h2></div>
			<!--<span class="news-list-browse"></span>-->


		<div class="topNews">
			<h3><a href="aktuelles/news/news-detail/news/Salzburg_Social_Media_Konferenz/?tx_ttnews%5BbackPid%5D=1&amp;cHash=68092e37d3418dcb05886e6cf1eed8c5" title="Salzburg: Social Media Konferenz">Salzburg: Social Media Konferenz</a></h3>
			<p class="bodytext">Social Media - Kontrollverlust oder Marketingchance? Diese Frage diskutieren Experten beim 1....</p>

		</div>


		<div class="topNews">
			<h3><a href="aktuelles/news/news-detail/news/Neue_Publikation_der_Tourismusforscher/?tx_ttnews%5BbackPid%5D=1&amp;cHash=890c3805bb707a6e436c8dd870e813f3" title="Neue Publikation der Tourismusforscher">Neue Publikation der Tourismusforscher</a></h3>
			<p class="bodytext">Frisch aus der Druckerpresse kommt das &quot;Handbuch Neue Medien im Tourismus&quot;, das Herausgeber Mario...</p>

		</div>


		<div class="topNews">
			<h3><a href="aktuelles/news/news-detail/news/Talente_frueh_erkennen-1/?tx_ttnews%5BbackPid%5D=1&amp;cHash=6065d0e970c071de24fa7de9a65c4c7e" title="Erste Junior-Studenten an der FH">Erste Junior-Studenten an der FH</a></h3>
			<p class="bodytext">Die Salzburger Marcus Edlinger (10), Bernhard Schumacher (12) und Armin Fisslthaler (15) sind seit...</p>

		</div>
		
		</div>

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
		
		
	</body>
</html>';

return $output0;
}


}
#0             13441     