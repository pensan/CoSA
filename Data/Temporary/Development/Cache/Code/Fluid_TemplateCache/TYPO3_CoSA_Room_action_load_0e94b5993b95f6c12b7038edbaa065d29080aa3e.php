<?php
class FluidCache_TYPO3_CoSA_Room_action_load_0e94b5993b95f6c12b7038edbaa065d29080aa3e extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$array28['roomSource'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room', $renderingContext);
$array28['answer'] = 'asdf';
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

$output30 .= ',';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments46 = array();
$arguments46['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments46['keepQuotes'] = false;
$arguments46['encoding'] = 'UTF-8';
$arguments46['doubleEncode'] = true;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$value48 = ($arguments46['value'] !== NULL ? $arguments46['value'] : $renderChildrenClosure47());

$output30 .= (!is_string($value48) ? $value48 : htmlspecialchars($value48, ($arguments46['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments46['encoding'], $arguments46['doubleEncode']));
return $output30;
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper49->setArguments($arguments27);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output26 .= $viewHelper49->initializeArgumentsAndRender();

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
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper50->setArguments($arguments12);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output11 .= $viewHelper50->initializeArgumentsAndRender();

$output11 .= '
';
return $output11;
};
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments52 = array();
$arguments52['path'] = 'pics/rooms/cora.png';
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

$output51 .= $viewHelper54->initializeArgumentsAndRender();

$output51 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments55 = array();
$arguments55['path'] = 'pics/rooms/sprechblase_final.png';
$arguments55['package'] = NULL;
$arguments55['resource'] = NULL;
$arguments55['uri'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper57->setArguments($arguments55);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output51 .= $viewHelper57->initializeArgumentsAndRender();

$output51 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments58 = array();
$arguments58['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments58['keepQuotes'] = false;
$arguments58['encoding'] = 'UTF-8';
$arguments58['doubleEncode'] = true;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$value60 = ($arguments58['value'] !== NULL ? $arguments58['value'] : $renderChildrenClosure59());

$output51 .= (!is_string($value60) ? $value60 : htmlspecialchars($value60, ($arguments58['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments58['encoding'], $arguments58['doubleEncode']));

$output51 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments61 = array();
$arguments61['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments61['as'] = 'answer';
$arguments61['key'] = '';
$arguments61['reverse'] = false;
$arguments61['iteration'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments64 = array();
$arguments64['action'] = 'next';
// Rendering Array
$array65 = array();
$array65['roomSource'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room', $renderingContext);
$array65['answer'] = 'asdf';
$arguments64['arguments'] = $array65;
$arguments64['additionalAttributes'] = NULL;
$arguments64['controller'] = NULL;
$arguments64['package'] = NULL;
$arguments64['subpackage'] = NULL;
$arguments64['section'] = '';
$arguments64['format'] = '';
$arguments64['additionalParams'] = array (
);
$arguments64['addQueryString'] = false;
$arguments64['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['name'] = NULL;
$arguments64['rel'] = NULL;
$arguments64['rev'] = NULL;
$arguments64['target'] = NULL;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = 'UTF-8';
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output67 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments68['encoding'], $arguments68['doubleEncode']));

$output67 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.FLOW3_Persistence_Identifier', $renderingContext);
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = 'UTF-8';
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());

$output67 .= (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments71['encoding'], $arguments71['doubleEncode']));

$output67 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.id', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = 'UTF-8';
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());

$output67 .= (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments74['encoding'], $arguments74['doubleEncode']));

$output67 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.__identifier', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = 'UTF-8';
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());

$output67 .= (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments77['encoding'], $arguments77['doubleEncode']));

$output67 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments80 = array();
$arguments80['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.identifier', $renderingContext);
$arguments80['keepQuotes'] = false;
$arguments80['encoding'] = 'UTF-8';
$arguments80['doubleEncode'] = true;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$value82 = ($arguments80['value'] !== NULL ? $arguments80['value'] : $renderChildrenClosure81());

$output67 .= (!is_string($value82) ? $value82 : htmlspecialchars($value82, ($arguments80['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments80['encoding'], $arguments80['doubleEncode']));

$output67 .= ',';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments83 = array();
$arguments83['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments83['keepQuotes'] = false;
$arguments83['encoding'] = 'UTF-8';
$arguments83['doubleEncode'] = true;
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$value85 = ($arguments83['value'] !== NULL ? $arguments83['value'] : $renderChildrenClosure84());

$output67 .= (!is_string($value85) ? $value85 : htmlspecialchars($value85, ($arguments83['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments83['encoding'], $arguments83['doubleEncode']));
return $output67;
};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper86->setArguments($arguments64);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output63 .= $viewHelper86->initializeArgumentsAndRender();

$output63 .= '
	              </div>
				';
return $output63;
};

$output51 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output51 .= '
           </div>
       </div>
';
return $output51;
};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper87->setArguments($arguments8);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper87->initializeArgumentsAndRender();

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
$output88 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments89 = array();
$arguments89['name'] = 'Default';
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output88 .= $viewHelper91->initializeArgumentsAndRender();

$output88 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments92 = array();
$arguments92['name'] = 'Title';
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};

$output88 .= '';

$output88 .= '


';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments94 = array();
$arguments94['name'] = 'Content';
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
   <div id="roomWrapper" style="background-image: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments97 = array();
$output98 = '';

$output98 .= 'pics/rooms/';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments99 = array();
$arguments99['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'backgroundImage', $renderingContext);
$arguments99['keepQuotes'] = false;
$arguments99['encoding'] = 'UTF-8';
$arguments99['doubleEncode'] = true;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$value101 = ($arguments99['value'] !== NULL ? $arguments99['value'] : $renderChildrenClosure100());

$output98 .= (!is_string($value101) ? $value101 : htmlspecialchars($value101, ($arguments99['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments99['encoding'], $arguments99['doubleEncode']));
$arguments97['path'] = $output98;
$arguments97['package'] = NULL;
$arguments97['resource'] = NULL;
$arguments97['uri'] = NULL;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper103->setArguments($arguments97);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output96 .= $viewHelper103->initializeArgumentsAndRender();

$output96 .= ');">

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments104 = array();
// Rendering Boolean node
$output105 = '';

$output105 .= \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);

$output105 .= ' != \'f\'';
$arguments104['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($output105);
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments108 = array();
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments111 = array();
$arguments111['path'] = 'pics/rooms/cora.png';
$arguments111['package'] = NULL;
$arguments111['resource'] = NULL;
$arguments111['uri'] = NULL;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper113->setArguments($arguments111);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output110 .= $viewHelper113->initializeArgumentsAndRender();

$output110 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments114 = array();
$arguments114['path'] = 'pics/rooms/sprechblase_final.png';
$arguments114['package'] = NULL;
$arguments114['resource'] = NULL;
$arguments114['uri'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper116->setArguments($arguments114);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output110 .= $viewHelper116->initializeArgumentsAndRender();

$output110 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments117 = array();
$arguments117['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments117['keepQuotes'] = false;
$arguments117['encoding'] = 'UTF-8';
$arguments117['doubleEncode'] = true;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$value119 = ($arguments117['value'] !== NULL ? $arguments117['value'] : $renderChildrenClosure118());

$output110 .= (!is_string($value119) ? $value119 : htmlspecialchars($value119, ($arguments117['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments117['encoding'], $arguments117['doubleEncode']));

$output110 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments120 = array();
$arguments120['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments120['as'] = 'answer';
$arguments120['key'] = '';
$arguments120['reverse'] = false;
$arguments120['iteration'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments123 = array();
$arguments123['action'] = 'next';
// Rendering Array
$array124 = array();
$array124['roomSource'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room', $renderingContext);
$array124['answer'] = 'asdf';
$arguments123['arguments'] = $array124;
$arguments123['additionalAttributes'] = NULL;
$arguments123['controller'] = NULL;
$arguments123['package'] = NULL;
$arguments123['subpackage'] = NULL;
$arguments123['section'] = '';
$arguments123['format'] = '';
$arguments123['additionalParams'] = array (
);
$arguments123['addQueryString'] = false;
$arguments123['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments123['class'] = NULL;
$arguments123['dir'] = NULL;
$arguments123['id'] = NULL;
$arguments123['lang'] = NULL;
$arguments123['style'] = NULL;
$arguments123['title'] = NULL;
$arguments123['accesskey'] = NULL;
$arguments123['tabindex'] = NULL;
$arguments123['onclick'] = NULL;
$arguments123['name'] = NULL;
$arguments123['rel'] = NULL;
$arguments123['rev'] = NULL;
$arguments123['target'] = NULL;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments127 = array();
$arguments127['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments127['keepQuotes'] = false;
$arguments127['encoding'] = 'UTF-8';
$arguments127['doubleEncode'] = true;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$value129 = ($arguments127['value'] !== NULL ? $arguments127['value'] : $renderChildrenClosure128());

$output126 .= (!is_string($value129) ? $value129 : htmlspecialchars($value129, ($arguments127['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments127['encoding'], $arguments127['doubleEncode']));

$output126 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments130 = array();
$arguments130['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.FLOW3_Persistence_Identifier', $renderingContext);
$arguments130['keepQuotes'] = false;
$arguments130['encoding'] = 'UTF-8';
$arguments130['doubleEncode'] = true;
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$value132 = ($arguments130['value'] !== NULL ? $arguments130['value'] : $renderChildrenClosure131());

$output126 .= (!is_string($value132) ? $value132 : htmlspecialchars($value132, ($arguments130['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments130['encoding'], $arguments130['doubleEncode']));

$output126 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments133 = array();
$arguments133['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.id', $renderingContext);
$arguments133['keepQuotes'] = false;
$arguments133['encoding'] = 'UTF-8';
$arguments133['doubleEncode'] = true;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$value135 = ($arguments133['value'] !== NULL ? $arguments133['value'] : $renderChildrenClosure134());

$output126 .= (!is_string($value135) ? $value135 : htmlspecialchars($value135, ($arguments133['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments133['encoding'], $arguments133['doubleEncode']));

$output126 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments136 = array();
$arguments136['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.__identifier', $renderingContext);
$arguments136['keepQuotes'] = false;
$arguments136['encoding'] = 'UTF-8';
$arguments136['doubleEncode'] = true;
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$value138 = ($arguments136['value'] !== NULL ? $arguments136['value'] : $renderChildrenClosure137());

$output126 .= (!is_string($value138) ? $value138 : htmlspecialchars($value138, ($arguments136['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments136['encoding'], $arguments136['doubleEncode']));

$output126 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments139 = array();
$arguments139['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.identifier', $renderingContext);
$arguments139['keepQuotes'] = false;
$arguments139['encoding'] = 'UTF-8';
$arguments139['doubleEncode'] = true;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$value141 = ($arguments139['value'] !== NULL ? $arguments139['value'] : $renderChildrenClosure140());

$output126 .= (!is_string($value141) ? $value141 : htmlspecialchars($value141, ($arguments139['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments139['encoding'], $arguments139['doubleEncode']));

$output126 .= ',';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments142 = array();
$arguments142['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments142['keepQuotes'] = false;
$arguments142['encoding'] = 'UTF-8';
$arguments142['doubleEncode'] = true;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$value144 = ($arguments142['value'] !== NULL ? $arguments142['value'] : $renderChildrenClosure143());

$output126 .= (!is_string($value144) ? $value144 : htmlspecialchars($value144, ($arguments142['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments142['encoding'], $arguments142['doubleEncode']));
return $output126;
};
$viewHelper145 = $self->getViewHelper('$viewHelper145', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper145->setArguments($arguments123);
$viewHelper145->setRenderingContext($renderingContext);
$viewHelper145->setRenderChildrenClosure($renderChildrenClosure125);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output122 .= $viewHelper145->initializeArgumentsAndRender();

$output122 .= '
	              </div>
				';
return $output122;
};

$output110 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output110 .= '
           </div>
       </div>
';
return $output110;
};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper146->setArguments($arguments108);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output107 .= $viewHelper146->initializeArgumentsAndRender();

$output107 .= '
';
return $output107;
};
$arguments104['__thenClosure'] = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
       <div id="cora">
           <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments148 = array();
$arguments148['path'] = 'pics/rooms/cora.png';
$arguments148['package'] = NULL;
$arguments148['resource'] = NULL;
$arguments148['uri'] = NULL;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper150 = $self->getViewHelper('$viewHelper150', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper150->setArguments($arguments148);
$viewHelper150->setRenderingContext($renderingContext);
$viewHelper150->setRenderChildrenClosure($renderChildrenClosure149);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output147 .= $viewHelper150->initializeArgumentsAndRender();

$output147 .= '"  />
       </div>

       <div id="bubble" style="background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments151 = array();
$arguments151['path'] = 'pics/rooms/sprechblase_final.png';
$arguments151['package'] = NULL;
$arguments151['resource'] = NULL;
$arguments151['uri'] = NULL;
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper153 = $self->getViewHelper('$viewHelper153', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper153->setArguments($arguments151);
$viewHelper153->setRenderingContext($renderingContext);
$viewHelper153->setRenderChildrenClosure($renderChildrenClosure152);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output147 .= $viewHelper153->initializeArgumentsAndRender();

$output147 .= ');">
           <div id="question">
               <div>
                   ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments154 = array();
$arguments154['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question.text', $renderingContext);
$arguments154['keepQuotes'] = false;
$arguments154['encoding'] = 'UTF-8';
$arguments154['doubleEncode'] = true;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$value156 = ($arguments154['value'] !== NULL ? $arguments154['value'] : $renderChildrenClosure155());

$output147 .= (!is_string($value156) ? $value156 : htmlspecialchars($value156, ($arguments154['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments154['encoding'], $arguments154['doubleEncode']));

$output147 .= '
               </div>
               ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments157 = array();
$arguments157['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments157['as'] = 'answer';
$arguments157['key'] = '';
$arguments157['reverse'] = false;
$arguments157['iteration'] = NULL;
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
	              <div class="answer">
	                  ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments160 = array();
$arguments160['action'] = 'next';
// Rendering Array
$array161 = array();
$array161['roomSource'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room', $renderingContext);
$array161['answer'] = 'asdf';
$arguments160['arguments'] = $array161;
$arguments160['additionalAttributes'] = NULL;
$arguments160['controller'] = NULL;
$arguments160['package'] = NULL;
$arguments160['subpackage'] = NULL;
$arguments160['section'] = '';
$arguments160['format'] = '';
$arguments160['additionalParams'] = array (
);
$arguments160['addQueryString'] = false;
$arguments160['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments160['class'] = NULL;
$arguments160['dir'] = NULL;
$arguments160['id'] = NULL;
$arguments160['lang'] = NULL;
$arguments160['style'] = NULL;
$arguments160['title'] = NULL;
$arguments160['accesskey'] = NULL;
$arguments160['tabindex'] = NULL;
$arguments160['onclick'] = NULL;
$arguments160['name'] = NULL;
$arguments160['rel'] = NULL;
$arguments160['rev'] = NULL;
$arguments160['target'] = NULL;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output163 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments164 = array();
$arguments164['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments164['keepQuotes'] = false;
$arguments164['encoding'] = 'UTF-8';
$arguments164['doubleEncode'] = true;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$value166 = ($arguments164['value'] !== NULL ? $arguments164['value'] : $renderChildrenClosure165());

$output163 .= (!is_string($value166) ? $value166 : htmlspecialchars($value166, ($arguments164['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments164['encoding'], $arguments164['doubleEncode']));

$output163 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments167 = array();
$arguments167['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.FLOW3_Persistence_Identifier', $renderingContext);
$arguments167['keepQuotes'] = false;
$arguments167['encoding'] = 'UTF-8';
$arguments167['doubleEncode'] = true;
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$value169 = ($arguments167['value'] !== NULL ? $arguments167['value'] : $renderChildrenClosure168());

$output163 .= (!is_string($value169) ? $value169 : htmlspecialchars($value169, ($arguments167['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments167['encoding'], $arguments167['doubleEncode']));

$output163 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments170 = array();
$arguments170['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.id', $renderingContext);
$arguments170['keepQuotes'] = false;
$arguments170['encoding'] = 'UTF-8';
$arguments170['doubleEncode'] = true;
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$value172 = ($arguments170['value'] !== NULL ? $arguments170['value'] : $renderChildrenClosure171());

$output163 .= (!is_string($value172) ? $value172 : htmlspecialchars($value172, ($arguments170['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments170['encoding'], $arguments170['doubleEncode']));

$output163 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments173 = array();
$arguments173['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.__identifier', $renderingContext);
$arguments173['keepQuotes'] = false;
$arguments173['encoding'] = 'UTF-8';
$arguments173['doubleEncode'] = true;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$value175 = ($arguments173['value'] !== NULL ? $arguments173['value'] : $renderChildrenClosure174());

$output163 .= (!is_string($value175) ? $value175 : htmlspecialchars($value175, ($arguments173['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments173['encoding'], $arguments173['doubleEncode']));

$output163 .= ', ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments176 = array();
$arguments176['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.identifier', $renderingContext);
$arguments176['keepQuotes'] = false;
$arguments176['encoding'] = 'UTF-8';
$arguments176['doubleEncode'] = true;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$value178 = ($arguments176['value'] !== NULL ? $arguments176['value'] : $renderChildrenClosure177());

$output163 .= (!is_string($value178) ? $value178 : htmlspecialchars($value178, ($arguments176['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments176['encoding'], $arguments176['doubleEncode']));

$output163 .= ',';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments179 = array();
$arguments179['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answer.text', $renderingContext);
$arguments179['keepQuotes'] = false;
$arguments179['encoding'] = 'UTF-8';
$arguments179['doubleEncode'] = true;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$value181 = ($arguments179['value'] !== NULL ? $arguments179['value'] : $renderChildrenClosure180());

$output163 .= (!is_string($value181) ? $value181 : htmlspecialchars($value181, ($arguments179['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments179['encoding'], $arguments179['doubleEncode']));
return $output163;
};
$viewHelper182 = $self->getViewHelper('$viewHelper182', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper182->setArguments($arguments160);
$viewHelper182->setRenderingContext($renderingContext);
$viewHelper182->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output159 .= $viewHelper182->initializeArgumentsAndRender();

$output159 .= '
	              </div>
				';
return $output159;
};

$output147 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output147 .= '
           </div>
       </div>
';
return $output147;
};
$viewHelper183 = $self->getViewHelper('$viewHelper183', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper183->setArguments($arguments104);
$viewHelper183->setRenderingContext($renderingContext);
$viewHelper183->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output96 .= $viewHelper183->initializeArgumentsAndRender();

$output96 .= '

   </div>
';
return $output96;
};

$output88 .= '';

return $output88;
}


}
#0             48735     