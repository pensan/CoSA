<?php
class FluidCache_TYPO3_CoSA_Room_action_load_ad0b3b8a3a8db89165782cb81f3a9215e01f8d1a extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments8['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array9, $array10);
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
	<div>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = 'UTF-8';
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output38 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments39['encoding'], $arguments39['doubleEncode']));

$output38 .= '
       <iframe width="420" height="315" src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'videoUrl', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = 'UTF-8';
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output38 .= (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments42['encoding'], $arguments42['doubleEncode']));

$output38 .= '?rel=0" frameborder="0" allowfullscreen></iframe>
   </div>
';
return $output38;
};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper45->setArguments($arguments36);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output12 .= $viewHelper45->initializeArgumentsAndRender();

$output12 .= '
';
return $output12;
};
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments47 = array();
$arguments47['path'] = 'pics/rooms/cora.png';
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

$output46 .= $viewHelper49->initializeArgumentsAndRender();

$output46 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments50 = array();
$arguments50['path'] = 'pics/rooms/sprechblase_final.png';
$arguments50['package'] = NULL;
$arguments50['resource'] = NULL;
$arguments50['uri'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output46 .= $viewHelper52->initializeArgumentsAndRender();

$output46 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = 'UTF-8';
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output46 .= (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments53['encoding'], $arguments53['doubleEncode']));

$output46 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments56 = array();
$arguments56['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments56['as'] = 'answer';
$arguments56['key'] = '';
$arguments56['reverse'] = false;
$arguments56['iteration'] = NULL;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments59 = array();
$arguments59['action'] = 'next';
// Rendering Array
$array60 = array();
$array60['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments59['arguments'] = $array60;
$arguments59['additionalAttributes'] = NULL;
$arguments59['controller'] = NULL;
$arguments59['package'] = NULL;
$arguments59['subpackage'] = NULL;
$arguments59['section'] = '';
$arguments59['format'] = '';
$arguments59['additionalParams'] = array (
);
$arguments59['addQueryString'] = false;
$arguments59['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['name'] = NULL;
$arguments59['rel'] = NULL;
$arguments59['rev'] = NULL;
$arguments59['target'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = 'UTF-8';
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());
return (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments62['encoding'], $arguments62['doubleEncode']));
};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper65->setArguments($arguments59);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output58 .= $viewHelper65->initializeArgumentsAndRender();

$output58 .= '
	              </div>
				';
return $output58;
};

$output46 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output46 .= '
           </div>
       </div>
';
return $output46;
};
$arguments8['__elseClosure'] = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
	<div>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = 'UTF-8';
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output66 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments67['encoding'], $arguments67['doubleEncode']));

$output66 .= '
       <iframe width="420" height="315" src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments70 = array();
$arguments70['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'videoUrl', $renderingContext);
$arguments70['keepQuotes'] = false;
$arguments70['encoding'] = 'UTF-8';
$arguments70['doubleEncode'] = true;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$value72 = ($arguments70['value'] !== NULL ? $arguments70['value'] : $renderChildrenClosure71());

$output66 .= (!is_string($value72) ? $value72 : htmlspecialchars($value72, ($arguments70['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments70['encoding'], $arguments70['doubleEncode']));

$output66 .= '?rel=0" frameborder="0" allowfullscreen></iframe>
   </div>
';
return $output66;
};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper73->setArguments($arguments8);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper73->initializeArgumentsAndRender();

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
$output74 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments75 = array();
$arguments75['name'] = 'Default';
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper77->setArguments($arguments75);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output74 .= $viewHelper77->initializeArgumentsAndRender();

$output74 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments78 = array();
$arguments78['name'] = 'Title';
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};

$output74 .= '';

$output74 .= '


';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments80 = array();
$arguments80['name'] = 'Content';
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
   <div id="roomWrapper" style="background-image: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments83 = array();
$output84 = '';

$output84 .= 'pics/rooms/';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments85 = array();
$arguments85['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'backgroundImage', $renderingContext);
$arguments85['keepQuotes'] = false;
$arguments85['encoding'] = 'UTF-8';
$arguments85['doubleEncode'] = true;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$value87 = ($arguments85['value'] !== NULL ? $arguments85['value'] : $renderChildrenClosure86());

$output84 .= (!is_string($value87) ? $value87 : htmlspecialchars($value87, ($arguments85['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments85['encoding'], $arguments85['doubleEncode']));
$arguments83['path'] = $output84;
$arguments83['package'] = NULL;
$arguments83['resource'] = NULL;
$arguments83['uri'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper89->setArguments($arguments83);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output82 .= $viewHelper89->initializeArgumentsAndRender();

$output82 .= ');">


';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments90 = array();
// Rendering Boolean node
// Rendering Array
$array91 = array();
$array91['0'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);
// Rendering Array
$array92 = array();
$array92['0'] = 'f';
$arguments90['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array91, $array92);
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments95 = array();
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments98 = array();
$arguments98['path'] = 'pics/rooms/cora.png';
$arguments98['package'] = NULL;
$arguments98['resource'] = NULL;
$arguments98['uri'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper100 = $self->getViewHelper('$viewHelper100', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper100->setArguments($arguments98);
$viewHelper100->setRenderingContext($renderingContext);
$viewHelper100->setRenderChildrenClosure($renderChildrenClosure99);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output97 .= $viewHelper100->initializeArgumentsAndRender();

$output97 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments101 = array();
$arguments101['path'] = 'pics/rooms/sprechblase_final.png';
$arguments101['package'] = NULL;
$arguments101['resource'] = NULL;
$arguments101['uri'] = NULL;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper103->setArguments($arguments101);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output97 .= $viewHelper103->initializeArgumentsAndRender();

$output97 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments104 = array();
$arguments104['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments104['keepQuotes'] = false;
$arguments104['encoding'] = 'UTF-8';
$arguments104['doubleEncode'] = true;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$value106 = ($arguments104['value'] !== NULL ? $arguments104['value'] : $renderChildrenClosure105());

$output97 .= (!is_string($value106) ? $value106 : htmlspecialchars($value106, ($arguments104['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments104['encoding'], $arguments104['doubleEncode']));

$output97 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments107 = array();
$arguments107['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments107['as'] = 'answer';
$arguments107['key'] = '';
$arguments107['reverse'] = false;
$arguments107['iteration'] = NULL;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments110 = array();
$arguments110['action'] = 'next';
// Rendering Array
$array111 = array();
$array111['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments110['arguments'] = $array111;
$arguments110['additionalAttributes'] = NULL;
$arguments110['controller'] = NULL;
$arguments110['package'] = NULL;
$arguments110['subpackage'] = NULL;
$arguments110['section'] = '';
$arguments110['format'] = '';
$arguments110['additionalParams'] = array (
);
$arguments110['addQueryString'] = false;
$arguments110['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments110['class'] = NULL;
$arguments110['dir'] = NULL;
$arguments110['id'] = NULL;
$arguments110['lang'] = NULL;
$arguments110['style'] = NULL;
$arguments110['title'] = NULL;
$arguments110['accesskey'] = NULL;
$arguments110['tabindex'] = NULL;
$arguments110['onclick'] = NULL;
$arguments110['name'] = NULL;
$arguments110['rel'] = NULL;
$arguments110['rev'] = NULL;
$arguments110['target'] = NULL;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments113 = array();
$arguments113['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments113['keepQuotes'] = false;
$arguments113['encoding'] = 'UTF-8';
$arguments113['doubleEncode'] = true;
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$value115 = ($arguments113['value'] !== NULL ? $arguments113['value'] : $renderChildrenClosure114());
return (!is_string($value115) ? $value115 : htmlspecialchars($value115, ($arguments113['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments113['encoding'], $arguments113['doubleEncode']));
};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper116->setArguments($arguments110);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output109 .= $viewHelper116->initializeArgumentsAndRender();

$output109 .= '
	              </div>
				';
return $output109;
};

$output97 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output97 .= '
           </div>
       </div>
';
return $output97;
};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper117->setArguments($arguments95);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output94 .= $viewHelper117->initializeArgumentsAndRender();

$output94 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments118 = array();
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
	<div>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments121 = array();
$arguments121['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);
$arguments121['keepQuotes'] = false;
$arguments121['encoding'] = 'UTF-8';
$arguments121['doubleEncode'] = true;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$value123 = ($arguments121['value'] !== NULL ? $arguments121['value'] : $renderChildrenClosure122());

$output120 .= (!is_string($value123) ? $value123 : htmlspecialchars($value123, ($arguments121['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments121['encoding'], $arguments121['doubleEncode']));

$output120 .= '
       <iframe width="420" height="315" src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments124 = array();
$arguments124['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'videoUrl', $renderingContext);
$arguments124['keepQuotes'] = false;
$arguments124['encoding'] = 'UTF-8';
$arguments124['doubleEncode'] = true;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$value126 = ($arguments124['value'] !== NULL ? $arguments124['value'] : $renderChildrenClosure125());

$output120 .= (!is_string($value126) ? $value126 : htmlspecialchars($value126, ($arguments124['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments124['encoding'], $arguments124['doubleEncode']));

$output120 .= '?rel=0" frameborder="0" allowfullscreen></iframe>
   </div>
';
return $output120;
};
$viewHelper127 = $self->getViewHelper('$viewHelper127', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper127->setArguments($arguments118);
$viewHelper127->setRenderingContext($renderingContext);
$viewHelper127->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output94 .= $viewHelper127->initializeArgumentsAndRender();

$output94 .= '
';
return $output94;
};
$arguments90['__thenClosure'] = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments129 = array();
$arguments129['path'] = 'pics/rooms/cora.png';
$arguments129['package'] = NULL;
$arguments129['resource'] = NULL;
$arguments129['uri'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output128 .= $viewHelper131->initializeArgumentsAndRender();

$output128 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments132 = array();
$arguments132['path'] = 'pics/rooms/sprechblase_final.png';
$arguments132['package'] = NULL;
$arguments132['resource'] = NULL;
$arguments132['uri'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper134->setArguments($arguments132);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output128 .= $viewHelper134->initializeArgumentsAndRender();

$output128 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = 'UTF-8';
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output128 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments135['encoding'], $arguments135['doubleEncode']));

$output128 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments138 = array();
$arguments138['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments138['as'] = 'answer';
$arguments138['key'] = '';
$arguments138['reverse'] = false;
$arguments138['iteration'] = NULL;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments141 = array();
$arguments141['action'] = 'next';
// Rendering Array
$array142 = array();
$array142['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments141['arguments'] = $array142;
$arguments141['additionalAttributes'] = NULL;
$arguments141['controller'] = NULL;
$arguments141['package'] = NULL;
$arguments141['subpackage'] = NULL;
$arguments141['section'] = '';
$arguments141['format'] = '';
$arguments141['additionalParams'] = array (
);
$arguments141['addQueryString'] = false;
$arguments141['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments144 = array();
$arguments144['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments144['keepQuotes'] = false;
$arguments144['encoding'] = 'UTF-8';
$arguments144['doubleEncode'] = true;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$value146 = ($arguments144['value'] !== NULL ? $arguments144['value'] : $renderChildrenClosure145());
return (!is_string($value146) ? $value146 : htmlspecialchars($value146, ($arguments144['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments144['encoding'], $arguments144['doubleEncode']));
};
$viewHelper147 = $self->getViewHelper('$viewHelper147', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper147->setArguments($arguments141);
$viewHelper147->setRenderingContext($renderingContext);
$viewHelper147->setRenderChildrenClosure($renderChildrenClosure143);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output140 .= $viewHelper147->initializeArgumentsAndRender();

$output140 .= '
	              </div>
				';
return $output140;
};

$output128 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output128 .= '
           </div>
       </div>
';
return $output128;
};
$arguments90['__elseClosure'] = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
	<div>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments149 = array();
$arguments149['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);
$arguments149['keepQuotes'] = false;
$arguments149['encoding'] = 'UTF-8';
$arguments149['doubleEncode'] = true;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$value151 = ($arguments149['value'] !== NULL ? $arguments149['value'] : $renderChildrenClosure150());

$output148 .= (!is_string($value151) ? $value151 : htmlspecialchars($value151, ($arguments149['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments149['encoding'], $arguments149['doubleEncode']));

$output148 .= '
       <iframe width="420" height="315" src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments152 = array();
$arguments152['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'videoUrl', $renderingContext);
$arguments152['keepQuotes'] = false;
$arguments152['encoding'] = 'UTF-8';
$arguments152['doubleEncode'] = true;
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$value154 = ($arguments152['value'] !== NULL ? $arguments152['value'] : $renderChildrenClosure153());

$output148 .= (!is_string($value154) ? $value154 : htmlspecialchars($value154, ($arguments152['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments152['encoding'], $arguments152['doubleEncode']));

$output148 .= '?rel=0" frameborder="0" allowfullscreen></iframe>
   </div>
';
return $output148;
};
$viewHelper155 = $self->getViewHelper('$viewHelper155', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper155->setArguments($arguments90);
$viewHelper155->setRenderingContext($renderingContext);
$viewHelper155->setRenderChildrenClosure($renderChildrenClosure93);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output82 .= $viewHelper155->initializeArgumentsAndRender();

$output82 .= '

   </div>
';
return $output82;
};

$output74 .= '';

return $output74;
}


}
#0             40731     