<?php
class FluidCache_TYPO3_CoSA_Standard_action_index_6b1d8f2291a56345ccd5342bb8d9d7a75210e260 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
		<meta charset="utf-8">
		<title>Index view of Standard controller</title> 
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\BaseViewHelper
$arguments1 = array();
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\BaseViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\BaseViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
	</head>
	<body>
		<h1>A freshly created Fluid template!</h1>
		<p>Some data set by the controller:</p>
		<ul>
			
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'foos', $renderingContext);
$arguments4['as'] = 'foo';
$arguments4['key'] = '';
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			<li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'foo', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output6 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments7['encoding'], $arguments7['doubleEncode']));

$output6 .= '</li>
			';
return $output6;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
			
		</ul>
	</body>
</html>';

return $output0;
}


}
#0             2912      