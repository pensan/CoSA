<?php
class FluidCache_TYPO3_CoSA_Room_action_edit_7a6b10c0610231cc8783d0fcee5ca504451d0392 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output0 = '';

$output0 .= 'Edit room "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.name', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = 'UTF-8';
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments1['encoding'], $arguments1['doubleEncode']));

$output0 .= '"';

return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output4 = '';

$output4 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments5 = array();
$arguments5['action'] = 'update';
$arguments5['object'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room', $renderingContext);
$arguments5['name'] = 'room';
$arguments5['additionalAttributes'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['package'] = NULL;
$arguments5['subpackage'] = NULL;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['additionalParams'] = array (
);
$arguments5['absolute'] = false;
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['fieldNamePrefix'] = NULL;
$arguments5['actionUri'] = NULL;
$arguments5['objectName'] = NULL;
$arguments5['enctype'] = NULL;
$arguments5['method'] = NULL;
$arguments5['onreset'] = NULL;
$arguments5['onsubmit'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
		<ol>
			<li>
				<label for="name">Name</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments8 = array();
$arguments8['property'] = 'name';
$arguments8['id'] = 'name';
$arguments8['additionalAttributes'] = NULL;
$arguments8['required'] = NULL;
$arguments8['type'] = 'text';
$arguments8['placeholder'] = NULL;
$arguments8['name'] = NULL;
$arguments8['value'] = NULL;
$arguments8['disabled'] = NULL;
$arguments8['maxlength'] = NULL;
$arguments8['readonly'] = NULL;
$arguments8['size'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper10->setArguments($arguments8);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output7 .= $viewHelper10->initializeArgumentsAndRender();

$output7 .= '
			</li>
			<li>
				<label for="type">Type</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments11 = array();
$arguments11['property'] = 'type';
$arguments11['name'] = 'Type';
// Rendering Array
$array12 = array();
$array12['s'] = 'standard';
$array12['f'] = 'final';
$array12['e'] = 'entrance';
$arguments11['options'] = $array12;
$arguments11['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);
$arguments11['optionLabelField'] = 'type';
$arguments11['additionalAttributes'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['multiple'] = NULL;
$arguments11['size'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['optionValueField'] = NULL;
$arguments11['sortByOptionLabel'] = false;
$arguments11['selectAllByDefault'] = false;
$arguments11['errorClass'] = 'f3-form-error';
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper14->setArguments($arguments11);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output7 .= $viewHelper14->initializeArgumentsAndRender();

$output7 .= '
			</li>
			<li>
				<label for="question">Question</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments15 = array();
$arguments15['property'] = 'question';
$arguments15['name'] = 'Question';
$arguments15['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'questions', $renderingContext);
$arguments15['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question', $renderingContext);
$arguments15['optionLabelField'] = 'text';
$arguments15['additionalAttributes'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['multiple'] = NULL;
$arguments15['size'] = NULL;
$arguments15['disabled'] = NULL;
$arguments15['optionValueField'] = NULL;
$arguments15['sortByOptionLabel'] = false;
$arguments15['selectAllByDefault'] = false;
$arguments15['errorClass'] = 'f3-form-error';
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output7 .= $viewHelper17->initializeArgumentsAndRender();

$output7 .= '
			</li>		
			<li>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments18 = array();
$arguments18['value'] = 'Create';
$arguments18['additionalAttributes'] = NULL;
$arguments18['name'] = NULL;
$arguments18['property'] = NULL;
$arguments18['disabled'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output7 .= $viewHelper20->initializeArgumentsAndRender();

$output7 .= '
			</li>
		</ol>
	';
return $output7;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper21->setArguments($arguments5);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output4 .= $viewHelper21->initializeArgumentsAndRender();

$output4 .= '
';

return $output4;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output22 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments23 = array();
$arguments23['name'] = 'Default';
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output22 .= $viewHelper25->initializeArgumentsAndRender();

$output22 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments26 = array();
$arguments26['name'] = 'Title';
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= 'Edit room "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.name', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = 'UTF-8';
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output28 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments29['encoding'], $arguments29['doubleEncode']));

$output28 .= '"';
return $output28;
};

$output22 .= '';

$output22 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments32 = array();
$arguments32['name'] = 'Content';
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments35 = array();
$arguments35['action'] = 'update';
$arguments35['object'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room', $renderingContext);
$arguments35['name'] = 'room';
$arguments35['additionalAttributes'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['controller'] = NULL;
$arguments35['package'] = NULL;
$arguments35['subpackage'] = NULL;
$arguments35['section'] = '';
$arguments35['format'] = '';
$arguments35['additionalParams'] = array (
);
$arguments35['absolute'] = false;
$arguments35['addQueryString'] = false;
$arguments35['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments35['fieldNamePrefix'] = NULL;
$arguments35['actionUri'] = NULL;
$arguments35['objectName'] = NULL;
$arguments35['enctype'] = NULL;
$arguments35['method'] = NULL;
$arguments35['onreset'] = NULL;
$arguments35['onsubmit'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
		<ol>
			<li>
				<label for="name">Name</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments38 = array();
$arguments38['property'] = 'name';
$arguments38['id'] = 'name';
$arguments38['additionalAttributes'] = NULL;
$arguments38['required'] = NULL;
$arguments38['type'] = 'text';
$arguments38['placeholder'] = NULL;
$arguments38['name'] = NULL;
$arguments38['value'] = NULL;
$arguments38['disabled'] = NULL;
$arguments38['maxlength'] = NULL;
$arguments38['readonly'] = NULL;
$arguments38['size'] = NULL;
$arguments38['errorClass'] = 'f3-form-error';
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output37 .= $viewHelper40->initializeArgumentsAndRender();

$output37 .= '
			</li>
			<li>
				<label for="type">Type</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments41 = array();
$arguments41['property'] = 'type';
$arguments41['name'] = 'Type';
// Rendering Array
$array42 = array();
$array42['s'] = 'standard';
$array42['f'] = 'final';
$array42['e'] = 'entrance';
$arguments41['options'] = $array42;
$arguments41['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.type', $renderingContext);
$arguments41['optionLabelField'] = 'type';
$arguments41['additionalAttributes'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['multiple'] = NULL;
$arguments41['size'] = NULL;
$arguments41['disabled'] = NULL;
$arguments41['optionValueField'] = NULL;
$arguments41['sortByOptionLabel'] = false;
$arguments41['selectAllByDefault'] = false;
$arguments41['errorClass'] = 'f3-form-error';
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper44->setArguments($arguments41);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output37 .= $viewHelper44->initializeArgumentsAndRender();

$output37 .= '
			</li>
			<li>
				<label for="question">Question</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments45 = array();
$arguments45['property'] = 'question';
$arguments45['name'] = 'Question';
$arguments45['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'questions', $renderingContext);
$arguments45['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'room.question', $renderingContext);
$arguments45['optionLabelField'] = 'text';
$arguments45['additionalAttributes'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['multiple'] = NULL;
$arguments45['size'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['optionValueField'] = NULL;
$arguments45['sortByOptionLabel'] = false;
$arguments45['selectAllByDefault'] = false;
$arguments45['errorClass'] = 'f3-form-error';
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output37 .= $viewHelper47->initializeArgumentsAndRender();

$output37 .= '
			</li>		
			<li>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments48 = array();
$arguments48['value'] = 'Create';
$arguments48['additionalAttributes'] = NULL;
$arguments48['name'] = NULL;
$arguments48['property'] = NULL;
$arguments48['disabled'] = NULL;
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper50->setArguments($arguments48);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output37 .= $viewHelper50->initializeArgumentsAndRender();

$output37 .= '
			</li>
		</ol>
	';
return $output37;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper51->setArguments($arguments35);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output34 .= $viewHelper51->initializeArgumentsAndRender();

$output34 .= '
';
return $output34;
};

$output22 .= '';

return $output22;
}


}
#0             19298     