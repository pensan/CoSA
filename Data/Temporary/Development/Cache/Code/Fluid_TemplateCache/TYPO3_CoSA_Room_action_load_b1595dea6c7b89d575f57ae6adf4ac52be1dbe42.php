<?php
class FluidCache_TYPO3_CoSA_Room_action_load_b1595dea6c7b89d575f57ae6adf4ac52be1dbe42 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
   <div id="roomWrapper" style="background-image: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments1 = array();
$output2 = '';

$output2 .= 'pics/rooms/';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments3 = array();
$arguments3['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'backgroundImage', $renderingContext);
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = 'UTF-8';
$arguments3['doubleEncode'] = true;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$value5 = ($arguments3['value'] !== NULL ? $arguments3['value'] : $renderChildrenClosure4());

$output2 .= (!is_string($value5) ? $value5 : htmlspecialchars($value5, ($arguments3['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments3['encoding'], $arguments3['doubleEncode']));
$arguments1['path'] = $output2;
$arguments1['package'] = NULL;
$arguments1['resource'] = NULL;
$arguments1['uri'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper7->setArguments($arguments1);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper7->initializeArgumentsAndRender();

$output0 .= ');">


';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments8 = array();
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array9['0'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);
// Rendering Array
$array10 = array();
$array10['0'] = 'f';
$arguments8['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', $array9, $array10);
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments13 = array();
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments16 = array();
$arguments16['path'] = 'pics/rooms/cora.png';
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

$output15 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments19 = array();
$arguments19['path'] = 'pics/rooms/sprechblase_final.png';
$arguments19['package'] = NULL;
$arguments19['resource'] = NULL;
$arguments19['uri'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output15 .= $viewHelper21->initializeArgumentsAndRender();

$output15 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = 'UTF-8';
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());

$output15 .= (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments22['encoding'], $arguments22['doubleEncode']));

$output15 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments25 = array();
$arguments25['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments25['as'] = 'answer';
$arguments25['key'] = '';
$arguments25['reverse'] = false;
$arguments25['iteration'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments28 = array();
$arguments28['action'] = 'next';
// Rendering Array
$array29 = array();
$array29['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments28['arguments'] = $array29;
$arguments28['additionalAttributes'] = NULL;
$arguments28['controller'] = NULL;
$arguments28['package'] = NULL;
$arguments28['subpackage'] = NULL;
$arguments28['section'] = '';
$arguments28['format'] = '';
$arguments28['additionalParams'] = array (
);
$arguments28['addQueryString'] = false;
$arguments28['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['name'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['rev'] = NULL;
$arguments28['target'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = 'UTF-8';
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());
return (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments31['encoding'], $arguments31['doubleEncode']));
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper34->setArguments($arguments28);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output27 .= $viewHelper34->initializeArgumentsAndRender();

$output27 .= '
	              </div>
				';
return $output27;
};

$output15 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output15 .= '
           </div>
       </div>
';
return $output15;
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper35->setArguments($arguments13);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output12 .= $viewHelper35->initializeArgumentsAndRender();

$output12 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments36 = array();
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
	<div id="video">
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'videoUrl', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = 'UTF-8';
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output38 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments39['encoding'], $arguments39['doubleEncode']));

$output38 .= '
       <iframe width="420" height="315" src="http://www.youtube.com/watch?v=siOHh0uzcuY?rel=0" frameborder="0" allowfullscreen></iframe>

<object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/Zgfi7wnGZlE?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/Zgfi7wnGZlE?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>


   </div>
';
return $output38;
};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper42->setArguments($arguments36);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output12 .= $viewHelper42->initializeArgumentsAndRender();

$output12 .= '
';
return $output12;
};
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments44 = array();
$arguments44['path'] = 'pics/rooms/cora.png';
$arguments44['package'] = NULL;
$arguments44['resource'] = NULL;
$arguments44['uri'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper46->setArguments($arguments44);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output43 .= $viewHelper46->initializeArgumentsAndRender();

$output43 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments47 = array();
$arguments47['path'] = 'pics/rooms/sprechblase_final.png';
$arguments47['package'] = NULL;
$arguments47['resource'] = NULL;
$arguments47['uri'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output43 .= $viewHelper49->initializeArgumentsAndRender();

$output43 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments50 = array();
$arguments50['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = 'UTF-8';
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$value52 = ($arguments50['value'] !== NULL ? $arguments50['value'] : $renderChildrenClosure51());

$output43 .= (!is_string($value52) ? $value52 : htmlspecialchars($value52, ($arguments50['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments50['encoding'], $arguments50['doubleEncode']));

$output43 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments53 = array();
$arguments53['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments53['as'] = 'answer';
$arguments53['key'] = '';
$arguments53['reverse'] = false;
$arguments53['iteration'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments56 = array();
$arguments56['action'] = 'next';
// Rendering Array
$array57 = array();
$array57['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments56['arguments'] = $array57;
$arguments56['additionalAttributes'] = NULL;
$arguments56['controller'] = NULL;
$arguments56['package'] = NULL;
$arguments56['subpackage'] = NULL;
$arguments56['section'] = '';
$arguments56['format'] = '';
$arguments56['additionalParams'] = array (
);
$arguments56['addQueryString'] = false;
$arguments56['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['name'] = NULL;
$arguments56['rel'] = NULL;
$arguments56['rev'] = NULL;
$arguments56['target'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = 'UTF-8';
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());
return (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments59['encoding'], $arguments59['doubleEncode']));
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper62->setArguments($arguments56);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output55 .= $viewHelper62->initializeArgumentsAndRender();

$output55 .= '
	              </div>
				';
return $output55;
};

$output43 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output43 .= '
           </div>
       </div>
';
return $output43;
};
$arguments8['__elseClosure'] = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
	<div id="video">
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'videoUrl', $renderingContext);
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = 'UTF-8';
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output63 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments64['encoding'], $arguments64['doubleEncode']));

$output63 .= '
       <iframe width="420" height="315" src="http://www.youtube.com/watch?v=siOHh0uzcuY?rel=0" frameborder="0" allowfullscreen></iframe>

<object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/Zgfi7wnGZlE?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/Zgfi7wnGZlE?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>


   </div>
';
return $output63;
};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper67->setArguments($arguments8);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper67->initializeArgumentsAndRender();

$output0 .= '

   </div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output68 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments69 = array();
$arguments69['name'] = 'Default';
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper71->setArguments($arguments69);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output68 .= $viewHelper71->initializeArgumentsAndRender();

$output68 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments72 = array();
$arguments72['name'] = 'Title';
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};

$output68 .= '';

$output68 .= '


';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments74 = array();
$arguments74['name'] = 'Content';
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
   <div id="roomWrapper" style="background-image: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments77 = array();
$output78 = '';

$output78 .= 'pics/rooms/';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments79 = array();
$arguments79['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'backgroundImage', $renderingContext);
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = 'UTF-8';
$arguments79['doubleEncode'] = true;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());

$output78 .= (!is_string($value81) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments79['encoding'], $arguments79['doubleEncode']));
$arguments77['path'] = $output78;
$arguments77['package'] = NULL;
$arguments77['resource'] = NULL;
$arguments77['uri'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper83->setArguments($arguments77);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output76 .= $viewHelper83->initializeArgumentsAndRender();

$output76 .= ');">


';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments84 = array();
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array85['0'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);
// Rendering Array
$array86 = array();
$array86['0'] = 'f';
$arguments84['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', $array85, $array86);
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments89 = array();
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments92 = array();
$arguments92['path'] = 'pics/rooms/cora.png';
$arguments92['package'] = NULL;
$arguments92['resource'] = NULL;
$arguments92['uri'] = NULL;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper94 = $self->getViewHelper('$viewHelper94', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper94->setArguments($arguments92);
$viewHelper94->setRenderingContext($renderingContext);
$viewHelper94->setRenderChildrenClosure($renderChildrenClosure93);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output91 .= $viewHelper94->initializeArgumentsAndRender();

$output91 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments95 = array();
$arguments95['path'] = 'pics/rooms/sprechblase_final.png';
$arguments95['package'] = NULL;
$arguments95['resource'] = NULL;
$arguments95['uri'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output91 .= $viewHelper97->initializeArgumentsAndRender();

$output91 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments98 = array();
$arguments98['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments98['keepQuotes'] = false;
$arguments98['encoding'] = 'UTF-8';
$arguments98['doubleEncode'] = true;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$value100 = ($arguments98['value'] !== NULL ? $arguments98['value'] : $renderChildrenClosure99());

$output91 .= (!is_string($value100) ? $value100 : htmlspecialchars($value100, ($arguments98['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments98['encoding'], $arguments98['doubleEncode']));

$output91 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments101 = array();
$arguments101['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments101['as'] = 'answer';
$arguments101['key'] = '';
$arguments101['reverse'] = false;
$arguments101['iteration'] = NULL;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments104 = array();
$arguments104['action'] = 'next';
// Rendering Array
$array105 = array();
$array105['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments104['arguments'] = $array105;
$arguments104['additionalAttributes'] = NULL;
$arguments104['controller'] = NULL;
$arguments104['package'] = NULL;
$arguments104['subpackage'] = NULL;
$arguments104['section'] = '';
$arguments104['format'] = '';
$arguments104['additionalParams'] = array (
);
$arguments104['addQueryString'] = false;
$arguments104['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['name'] = NULL;
$arguments104['rel'] = NULL;
$arguments104['rev'] = NULL;
$arguments104['target'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = 'UTF-8';
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());
return (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments107['encoding'], $arguments107['doubleEncode']));
};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper110->setArguments($arguments104);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output103 .= $viewHelper110->initializeArgumentsAndRender();

$output103 .= '
	              </div>
				';
return $output103;
};

$output91 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output91 .= '
           </div>
       </div>
';
return $output91;
};
$viewHelper111 = $self->getViewHelper('$viewHelper111', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper111->setArguments($arguments89);
$viewHelper111->setRenderingContext($renderingContext);
$viewHelper111->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output88 .= $viewHelper111->initializeArgumentsAndRender();

$output88 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments112 = array();
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
	<div id="video">
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments115 = array();
$arguments115['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'videoUrl', $renderingContext);
$arguments115['keepQuotes'] = false;
$arguments115['encoding'] = 'UTF-8';
$arguments115['doubleEncode'] = true;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$value117 = ($arguments115['value'] !== NULL ? $arguments115['value'] : $renderChildrenClosure116());

$output114 .= (!is_string($value117) ? $value117 : htmlspecialchars($value117, ($arguments115['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments115['encoding'], $arguments115['doubleEncode']));

$output114 .= '
       <iframe width="420" height="315" src="http://www.youtube.com/watch?v=siOHh0uzcuY?rel=0" frameborder="0" allowfullscreen></iframe>

<object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/Zgfi7wnGZlE?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/Zgfi7wnGZlE?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>


   </div>
';
return $output114;
};
$viewHelper118 = $self->getViewHelper('$viewHelper118', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper118->setArguments($arguments112);
$viewHelper118->setRenderingContext($renderingContext);
$viewHelper118->setRenderChildrenClosure($renderChildrenClosure113);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output88 .= $viewHelper118->initializeArgumentsAndRender();

$output88 .= '
';
return $output88;
};
$arguments84['__thenClosure'] = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments120 = array();
$arguments120['path'] = 'pics/rooms/cora.png';
$arguments120['package'] = NULL;
$arguments120['resource'] = NULL;
$arguments120['uri'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper122 = $self->getViewHelper('$viewHelper122', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper122->setArguments($arguments120);
$viewHelper122->setRenderingContext($renderingContext);
$viewHelper122->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output119 .= $viewHelper122->initializeArgumentsAndRender();

$output119 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments123 = array();
$arguments123['path'] = 'pics/rooms/sprechblase_final.png';
$arguments123['package'] = NULL;
$arguments123['resource'] = NULL;
$arguments123['uri'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper125->setArguments($arguments123);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output119 .= $viewHelper125->initializeArgumentsAndRender();

$output119 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments126 = array();
$arguments126['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments126['keepQuotes'] = false;
$arguments126['encoding'] = 'UTF-8';
$arguments126['doubleEncode'] = true;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$value128 = ($arguments126['value'] !== NULL ? $arguments126['value'] : $renderChildrenClosure127());

$output119 .= (!is_string($value128) ? $value128 : htmlspecialchars($value128, ($arguments126['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments126['encoding'], $arguments126['doubleEncode']));

$output119 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments129 = array();
$arguments129['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments129['as'] = 'answer';
$arguments129['key'] = '';
$arguments129['reverse'] = false;
$arguments129['iteration'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments132 = array();
$arguments132['action'] = 'next';
// Rendering Array
$array133 = array();
$array133['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments132['arguments'] = $array133;
$arguments132['additionalAttributes'] = NULL;
$arguments132['controller'] = NULL;
$arguments132['package'] = NULL;
$arguments132['subpackage'] = NULL;
$arguments132['section'] = '';
$arguments132['format'] = '';
$arguments132['additionalParams'] = array (
);
$arguments132['addQueryString'] = false;
$arguments132['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['name'] = NULL;
$arguments132['rel'] = NULL;
$arguments132['rev'] = NULL;
$arguments132['target'] = NULL;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = 'UTF-8';
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());
return (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments135['encoding'], $arguments135['doubleEncode']));
};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper138->setArguments($arguments132);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure134);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output131 .= $viewHelper138->initializeArgumentsAndRender();

$output131 .= '
	              </div>
				';
return $output131;
};

$output119 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output119 .= '
           </div>
       </div>
';
return $output119;
};
$arguments84['__elseClosure'] = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
	<div id="video">
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments140 = array();
$arguments140['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'videoUrl', $renderingContext);
$arguments140['keepQuotes'] = false;
$arguments140['encoding'] = 'UTF-8';
$arguments140['doubleEncode'] = true;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$value142 = ($arguments140['value'] !== NULL ? $arguments140['value'] : $renderChildrenClosure141());

$output139 .= (!is_string($value142) ? $value142 : htmlspecialchars($value142, ($arguments140['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments140['encoding'], $arguments140['doubleEncode']));

$output139 .= '
       <iframe width="420" height="315" src="http://www.youtube.com/watch?v=siOHh0uzcuY?rel=0" frameborder="0" allowfullscreen></iframe>

<object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/Zgfi7wnGZlE?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/Zgfi7wnGZlE?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>


   </div>
';
return $output139;
};
$viewHelper143 = $self->getViewHelper('$viewHelper143', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper143->setArguments($arguments84);
$viewHelper143->setRenderingContext($renderingContext);
$viewHelper143->setRenderChildrenClosure($renderChildrenClosure87);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output76 .= $viewHelper143->initializeArgumentsAndRender();

$output76 .= '

   </div>
';
return $output76;
};

$output68 .= '';

return $output68;
}


}
#0             39559     