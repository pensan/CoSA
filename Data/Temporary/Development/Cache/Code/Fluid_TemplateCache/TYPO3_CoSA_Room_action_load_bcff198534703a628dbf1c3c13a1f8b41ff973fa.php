<?php
class FluidCache_TYPO3_CoSA_Room_action_load_bcff198534703a628dbf1c3c13a1f8b41ff973fa extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output9 = '';

$output9 .= \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);

$output9 .= ' != \'f\'';
$arguments8['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($output9);
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments12 = array();
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments15 = array();
$arguments15['path'] = 'pics/rooms/cora.png';
$arguments15['package'] = NULL;
$arguments15['resource'] = NULL;
$arguments15['uri'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output14 .= $viewHelper17->initializeArgumentsAndRender();

$output14 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments18 = array();
$arguments18['path'] = 'pics/rooms/sprechblase_final.png';
$arguments18['package'] = NULL;
$arguments18['resource'] = NULL;
$arguments18['uri'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output14 .= $viewHelper20->initializeArgumentsAndRender();

$output14 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = 'UTF-8';
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output14 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments21['encoding'], $arguments21['doubleEncode']));

$output14 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments24 = array();
$arguments24['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments24['as'] = 'answer';
$arguments24['key'] = '';
$arguments24['reverse'] = false;
$arguments24['iteration'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments27 = array();
$arguments27['action'] = 'next';
// Rendering Array
$array28 = array();
$array28['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments27['arguments'] = $array28;
$arguments27['additionalAttributes'] = NULL;
$arguments27['controller'] = NULL;
$arguments27['package'] = NULL;
$arguments27['subpackage'] = NULL;
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['additionalParams'] = array (
);
$arguments27['addQueryString'] = false;
$arguments27['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['name'] = NULL;
$arguments27['rel'] = NULL;
$arguments27['rev'] = NULL;
$arguments27['target'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';
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

$output30 .= (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments31['encoding'], $arguments31['doubleEncode']));

$output30 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.FLOW3_Persistence_Identifier', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = 'UTF-8';
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output30 .= (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments34['encoding'], $arguments34['doubleEncode']));

$output30 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.id', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = 'UTF-8';
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output30 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments37['encoding'], $arguments37['doubleEncode']));

$output30 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.__identifier', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = 'UTF-8';
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output30 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments40['encoding'], $arguments40['doubleEncode']));

$output30 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.identifier', $renderingContext);
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = 'UTF-8';
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output30 .= (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments43['encoding'], $arguments43['doubleEncode']));
return $output30;
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper46->setArguments($arguments27);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output26 .= $viewHelper46->initializeArgumentsAndRender();

$output26 .= '
	              </div>
				';
return $output26;
};

$output14 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output14 .= '
           </div>
       </div>
';
return $output14;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper47->setArguments($arguments12);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output11 .= $viewHelper47->initializeArgumentsAndRender();

$output11 .= '
';
return $output11;
};
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments49 = array();
$arguments49['path'] = 'pics/rooms/cora.png';
$arguments49['package'] = NULL;
$arguments49['resource'] = NULL;
$arguments49['uri'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output48 .= $viewHelper51->initializeArgumentsAndRender();

$output48 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments52 = array();
$arguments52['path'] = 'pics/rooms/sprechblase_final.png';
$arguments52['package'] = NULL;
$arguments52['resource'] = NULL;
$arguments52['uri'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output48 .= $viewHelper54->initializeArgumentsAndRender();

$output48 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = 'UTF-8';
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());

$output48 .= (!is_string($value57) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments55['encoding'], $arguments55['doubleEncode']));

$output48 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments58 = array();
$arguments58['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments58['as'] = 'answer';
$arguments58['key'] = '';
$arguments58['reverse'] = false;
$arguments58['iteration'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments61 = array();
$arguments61['action'] = 'next';
// Rendering Array
$array62 = array();
$array62['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments61['arguments'] = $array62;
$arguments61['additionalAttributes'] = NULL;
$arguments61['controller'] = NULL;
$arguments61['package'] = NULL;
$arguments61['subpackage'] = NULL;
$arguments61['section'] = '';
$arguments61['format'] = '';
$arguments61['additionalParams'] = array (
);
$arguments61['addQueryString'] = false;
$arguments61['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['name'] = NULL;
$arguments61['rel'] = NULL;
$arguments61['rev'] = NULL;
$arguments61['target'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = 'UTF-8';
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output64 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments65['encoding'], $arguments65['doubleEncode']));

$output64 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.FLOW3_Persistence_Identifier', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = 'UTF-8';
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output64 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments68['encoding'], $arguments68['doubleEncode']));

$output64 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.id', $renderingContext);
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = 'UTF-8';
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());

$output64 .= (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments71['encoding'], $arguments71['doubleEncode']));

$output64 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.__identifier', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = 'UTF-8';
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());

$output64 .= (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments74['encoding'], $arguments74['doubleEncode']));

$output64 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.identifier', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = 'UTF-8';
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());

$output64 .= (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments77['encoding'], $arguments77['doubleEncode']));
return $output64;
};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper80->setArguments($arguments61);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output60 .= $viewHelper80->initializeArgumentsAndRender();

$output60 .= '
	              </div>
				';
return $output60;
};

$output48 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output48 .= '
           </div>
       </div>
';
return $output48;
};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper81->setArguments($arguments8);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper81->initializeArgumentsAndRender();

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
$output82 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments83 = array();
$arguments83['name'] = 'Default';
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper85->setArguments($arguments83);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output82 .= $viewHelper85->initializeArgumentsAndRender();

$output82 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments86 = array();
$arguments86['name'] = 'Title';
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};

$output82 .= '';

$output82 .= '


';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments88 = array();
$arguments88['name'] = 'Content';
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
   <div id="roomWrapper" style="background-image: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments91 = array();
$output92 = '';

$output92 .= 'pics/rooms/';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'backgroundImage', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = 'UTF-8';
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output92 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments93['encoding'], $arguments93['doubleEncode']));
$arguments91['path'] = $output92;
$arguments91['package'] = NULL;
$arguments91['resource'] = NULL;
$arguments91['uri'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper97->setArguments($arguments91);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output90 .= $viewHelper97->initializeArgumentsAndRender();

$output90 .= ');">

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments98 = array();
// Rendering Boolean node
$output99 = '';

$output99 .= \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);

$output99 .= ' != \'f\'';
$arguments98['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($output99);
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments102 = array();
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments105 = array();
$arguments105['path'] = 'pics/rooms/cora.png';
$arguments105['package'] = NULL;
$arguments105['resource'] = NULL;
$arguments105['uri'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper107->setArguments($arguments105);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output104 .= $viewHelper107->initializeArgumentsAndRender();

$output104 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments108 = array();
$arguments108['path'] = 'pics/rooms/sprechblase_final.png';
$arguments108['package'] = NULL;
$arguments108['resource'] = NULL;
$arguments108['uri'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper110->setArguments($arguments108);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output104 .= $viewHelper110->initializeArgumentsAndRender();

$output104 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = 'UTF-8';
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output104 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments111['encoding'], $arguments111['doubleEncode']));

$output104 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments114 = array();
$arguments114['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments114['as'] = 'answer';
$arguments114['key'] = '';
$arguments114['reverse'] = false;
$arguments114['iteration'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments117 = array();
$arguments117['action'] = 'next';
// Rendering Array
$array118 = array();
$array118['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments117['arguments'] = $array118;
$arguments117['additionalAttributes'] = NULL;
$arguments117['controller'] = NULL;
$arguments117['package'] = NULL;
$arguments117['subpackage'] = NULL;
$arguments117['section'] = '';
$arguments117['format'] = '';
$arguments117['additionalParams'] = array (
);
$arguments117['addQueryString'] = false;
$arguments117['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$arguments117['name'] = NULL;
$arguments117['rel'] = NULL;
$arguments117['rev'] = NULL;
$arguments117['target'] = NULL;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output120 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments121 = array();
$arguments121['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments121['keepQuotes'] = false;
$arguments121['encoding'] = 'UTF-8';
$arguments121['doubleEncode'] = true;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$value123 = ($arguments121['value'] !== NULL ? $arguments121['value'] : $renderChildrenClosure122());

$output120 .= (!is_string($value123) ? $value123 : htmlspecialchars($value123, ($arguments121['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments121['encoding'], $arguments121['doubleEncode']));

$output120 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments124 = array();
$arguments124['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.FLOW3_Persistence_Identifier', $renderingContext);
$arguments124['keepQuotes'] = false;
$arguments124['encoding'] = 'UTF-8';
$arguments124['doubleEncode'] = true;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$value126 = ($arguments124['value'] !== NULL ? $arguments124['value'] : $renderChildrenClosure125());

$output120 .= (!is_string($value126) ? $value126 : htmlspecialchars($value126, ($arguments124['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments124['encoding'], $arguments124['doubleEncode']));

$output120 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments127 = array();
$arguments127['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.id', $renderingContext);
$arguments127['keepQuotes'] = false;
$arguments127['encoding'] = 'UTF-8';
$arguments127['doubleEncode'] = true;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$value129 = ($arguments127['value'] !== NULL ? $arguments127['value'] : $renderChildrenClosure128());

$output120 .= (!is_string($value129) ? $value129 : htmlspecialchars($value129, ($arguments127['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments127['encoding'], $arguments127['doubleEncode']));

$output120 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments130 = array();
$arguments130['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.__identifier', $renderingContext);
$arguments130['keepQuotes'] = false;
$arguments130['encoding'] = 'UTF-8';
$arguments130['doubleEncode'] = true;
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$value132 = ($arguments130['value'] !== NULL ? $arguments130['value'] : $renderChildrenClosure131());

$output120 .= (!is_string($value132) ? $value132 : htmlspecialchars($value132, ($arguments130['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments130['encoding'], $arguments130['doubleEncode']));

$output120 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments133 = array();
$arguments133['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.identifier', $renderingContext);
$arguments133['keepQuotes'] = false;
$arguments133['encoding'] = 'UTF-8';
$arguments133['doubleEncode'] = true;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$value135 = ($arguments133['value'] !== NULL ? $arguments133['value'] : $renderChildrenClosure134());

$output120 .= (!is_string($value135) ? $value135 : htmlspecialchars($value135, ($arguments133['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments133['encoding'], $arguments133['doubleEncode']));
return $output120;
};
$viewHelper136 = $self->getViewHelper('$viewHelper136', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper136->setArguments($arguments117);
$viewHelper136->setRenderingContext($renderingContext);
$viewHelper136->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output116 .= $viewHelper136->initializeArgumentsAndRender();

$output116 .= '
	              </div>
				';
return $output116;
};

$output104 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output104 .= '
           </div>
       </div>
';
return $output104;
};
$viewHelper137 = $self->getViewHelper('$viewHelper137', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper137->setArguments($arguments102);
$viewHelper137->setRenderingContext($renderingContext);
$viewHelper137->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output101 .= $viewHelper137->initializeArgumentsAndRender();

$output101 .= '
';
return $output101;
};
$arguments98['__thenClosure'] = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments139 = array();
$arguments139['path'] = 'pics/rooms/cora.png';
$arguments139['package'] = NULL;
$arguments139['resource'] = NULL;
$arguments139['uri'] = NULL;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper141->setArguments($arguments139);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output138 .= $viewHelper141->initializeArgumentsAndRender();

$output138 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments142 = array();
$arguments142['path'] = 'pics/rooms/sprechblase_final.png';
$arguments142['package'] = NULL;
$arguments142['resource'] = NULL;
$arguments142['uri'] = NULL;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper144 = $self->getViewHelper('$viewHelper144', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper144->setArguments($arguments142);
$viewHelper144->setRenderingContext($renderingContext);
$viewHelper144->setRenderChildrenClosure($renderChildrenClosure143);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output138 .= $viewHelper144->initializeArgumentsAndRender();

$output138 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments145 = array();
$arguments145['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments145['keepQuotes'] = false;
$arguments145['encoding'] = 'UTF-8';
$arguments145['doubleEncode'] = true;
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$value147 = ($arguments145['value'] !== NULL ? $arguments145['value'] : $renderChildrenClosure146());

$output138 .= (!is_string($value147) ? $value147 : htmlspecialchars($value147, ($arguments145['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments145['encoding'], $arguments145['doubleEncode']));

$output138 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments148 = array();
$arguments148['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments148['as'] = 'answer';
$arguments148['key'] = '';
$arguments148['reverse'] = false;
$arguments148['iteration'] = NULL;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments151 = array();
$arguments151['action'] = 'next';
// Rendering Array
$array152 = array();
$array152['answer'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer', $renderingContext);
$arguments151['arguments'] = $array152;
$arguments151['additionalAttributes'] = NULL;
$arguments151['controller'] = NULL;
$arguments151['package'] = NULL;
$arguments151['subpackage'] = NULL;
$arguments151['section'] = '';
$arguments151['format'] = '';
$arguments151['additionalParams'] = array (
);
$arguments151['addQueryString'] = false;
$arguments151['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments151['class'] = NULL;
$arguments151['dir'] = NULL;
$arguments151['id'] = NULL;
$arguments151['lang'] = NULL;
$arguments151['style'] = NULL;
$arguments151['title'] = NULL;
$arguments151['accesskey'] = NULL;
$arguments151['tabindex'] = NULL;
$arguments151['onclick'] = NULL;
$arguments151['name'] = NULL;
$arguments151['rel'] = NULL;
$arguments151['rev'] = NULL;
$arguments151['target'] = NULL;
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments155 = array();
$arguments155['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments155['keepQuotes'] = false;
$arguments155['encoding'] = 'UTF-8';
$arguments155['doubleEncode'] = true;
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$value157 = ($arguments155['value'] !== NULL ? $arguments155['value'] : $renderChildrenClosure156());

$output154 .= (!is_string($value157) ? $value157 : htmlspecialchars($value157, ($arguments155['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments155['encoding'], $arguments155['doubleEncode']));

$output154 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments158 = array();
$arguments158['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.FLOW3_Persistence_Identifier', $renderingContext);
$arguments158['keepQuotes'] = false;
$arguments158['encoding'] = 'UTF-8';
$arguments158['doubleEncode'] = true;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$value160 = ($arguments158['value'] !== NULL ? $arguments158['value'] : $renderChildrenClosure159());

$output154 .= (!is_string($value160) ? $value160 : htmlspecialchars($value160, ($arguments158['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments158['encoding'], $arguments158['doubleEncode']));

$output154 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments161 = array();
$arguments161['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.id', $renderingContext);
$arguments161['keepQuotes'] = false;
$arguments161['encoding'] = 'UTF-8';
$arguments161['doubleEncode'] = true;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$value163 = ($arguments161['value'] !== NULL ? $arguments161['value'] : $renderChildrenClosure162());

$output154 .= (!is_string($value163) ? $value163 : htmlspecialchars($value163, ($arguments161['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments161['encoding'], $arguments161['doubleEncode']));

$output154 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments164 = array();
$arguments164['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.__identifier', $renderingContext);
$arguments164['keepQuotes'] = false;
$arguments164['encoding'] = 'UTF-8';
$arguments164['doubleEncode'] = true;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$value166 = ($arguments164['value'] !== NULL ? $arguments164['value'] : $renderChildrenClosure165());

$output154 .= (!is_string($value166) ? $value166 : htmlspecialchars($value166, ($arguments164['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments164['encoding'], $arguments164['doubleEncode']));

$output154 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments167 = array();
$arguments167['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.identifier', $renderingContext);
$arguments167['keepQuotes'] = false;
$arguments167['encoding'] = 'UTF-8';
$arguments167['doubleEncode'] = true;
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$value169 = ($arguments167['value'] !== NULL ? $arguments167['value'] : $renderChildrenClosure168());

$output154 .= (!is_string($value169) ? $value169 : htmlspecialchars($value169, ($arguments167['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments167['encoding'], $arguments167['doubleEncode']));
return $output154;
};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper170->setArguments($arguments151);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure153);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output150 .= $viewHelper170->initializeArgumentsAndRender();

$output150 .= '
	              </div>
				';
return $output150;
};

$output138 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output138 .= '
           </div>
       </div>
';
return $output138;
};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper171->setArguments($arguments98);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output90 .= $viewHelper171->initializeArgumentsAndRender();

$output90 .= '

   </div>
';
return $output90;
};

$output82 .= '';

return $output82;
}


}
#0             45377     