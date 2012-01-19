<?php
class FluidCache_TYPO3_CoSA_Route_action_new_8dc4e30dd7527079191e5e91d7de0351931e1e59 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return 'New route';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<p>Just fill out the following form to create a new route:</p>

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['action'] = 'create';
$arguments1['name'] = 'newRoute';
$arguments1['additionalAttributes'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['package'] = NULL;
$arguments1['subpackage'] = NULL;
$arguments1['object'] = NULL;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['enctype'] = NULL;
$arguments1['method'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		<ol>
			<li>
				<label for="name">Name</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments4 = array();
$arguments4['property'] = 'name';
$arguments4['id'] = 'name';
$arguments4['additionalAttributes'] = NULL;
$arguments4['required'] = NULL;
$arguments4['type'] = 'text';
$arguments4['placeholder'] = NULL;
$arguments4['name'] = NULL;
$arguments4['value'] = NULL;
$arguments4['disabled'] = NULL;
$arguments4['maxlength'] = NULL;
$arguments4['readonly'] = NULL;
$arguments4['size'] = NULL;
$arguments4['errorClass'] = 'f3-form-error';
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper6->initializeArgumentsAndRender();

$output3 .= '
			</li>
			<li>
				<label for="roomSource">Room source</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments7 = array();
$arguments7['property'] = 'roomSource';
$arguments7['name'] = 'RoomSource';
$arguments7['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'rooms', $renderingContext);
$arguments7['optionLabelField'] = 'name';
$arguments7['additionalAttributes'] = NULL;
$arguments7['value'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['multiple'] = NULL;
$arguments7['size'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['optionValueField'] = NULL;
$arguments7['sortByOptionLabel'] = false;
$arguments7['selectAllByDefault'] = false;
$arguments7['errorClass'] = 'f3-form-error';
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();

$output3 .= '
			</li>
			<li>
				<label for="answer">Answer</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments10 = array();
$arguments10['property'] = 'answer';
$arguments10['name'] = 'Answer';
$arguments10['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments10['optionLabelField'] = 'text';
$arguments10['additionalAttributes'] = NULL;
$arguments10['value'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['multiple'] = NULL;
$arguments10['size'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['optionValueField'] = NULL;
$arguments10['sortByOptionLabel'] = false;
$arguments10['selectAllByDefault'] = false;
$arguments10['errorClass'] = 'f3-form-error';
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper12->initializeArgumentsAndRender();

$output3 .= '
			</li>
			<li>
				<label for="roomDestination">Room destination</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments13 = array();
$arguments13['property'] = 'roomDestination';
$arguments13['name'] = 'RoomDestination';
$arguments13['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'rooms', $renderingContext);
$arguments13['optionLabelField'] = 'name';
$arguments13['additionalAttributes'] = NULL;
$arguments13['value'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['multiple'] = NULL;
$arguments13['size'] = NULL;
$arguments13['disabled'] = NULL;
$arguments13['optionValueField'] = NULL;
$arguments13['sortByOptionLabel'] = false;
$arguments13['selectAllByDefault'] = false;
$arguments13['errorClass'] = 'f3-form-error';
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper15->initializeArgumentsAndRender();

$output3 .= '
			</li>
			<li>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments16 = array();
$arguments16['value'] = 'Create';
$arguments16['additionalAttributes'] = NULL;
$arguments16['name'] = NULL;
$arguments16['property'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper18->initializeArgumentsAndRender();

$output3 .= '
			</li>
		</ol>
	';
return $output3;
};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper19->setArguments($arguments1);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper19->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output20 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments21 = array();
$arguments21['name'] = 'Default';
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output20 .= $viewHelper23->initializeArgumentsAndRender();

$output20 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments24 = array();
$arguments24['name'] = 'Title';
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return 'New route';
};

$output20 .= '';

$output20 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments26 = array();
$arguments26['name'] = 'Content';
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
	<p>Just fill out the following form to create a new route:</p>

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments29 = array();
$arguments29['action'] = 'create';
$arguments29['name'] = 'newRoute';
$arguments29['additionalAttributes'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['controller'] = NULL;
$arguments29['package'] = NULL;
$arguments29['subpackage'] = NULL;
$arguments29['object'] = NULL;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['additionalParams'] = array (
);
$arguments29['absolute'] = false;
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['fieldNamePrefix'] = NULL;
$arguments29['actionUri'] = NULL;
$arguments29['objectName'] = NULL;
$arguments29['enctype'] = NULL;
$arguments29['method'] = NULL;
$arguments29['onreset'] = NULL;
$arguments29['onsubmit'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
		<ol>
			<li>
				<label for="name">Name</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments32 = array();
$arguments32['property'] = 'name';
$arguments32['id'] = 'name';
$arguments32['additionalAttributes'] = NULL;
$arguments32['required'] = NULL;
$arguments32['type'] = 'text';
$arguments32['placeholder'] = NULL;
$arguments32['name'] = NULL;
$arguments32['value'] = NULL;
$arguments32['disabled'] = NULL;
$arguments32['maxlength'] = NULL;
$arguments32['readonly'] = NULL;
$arguments32['size'] = NULL;
$arguments32['errorClass'] = 'f3-form-error';
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output31 .= $viewHelper34->initializeArgumentsAndRender();

$output31 .= '
			</li>
			<li>
				<label for="roomSource">Room source</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments35 = array();
$arguments35['property'] = 'roomSource';
$arguments35['name'] = 'RoomSource';
$arguments35['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'rooms', $renderingContext);
$arguments35['optionLabelField'] = 'name';
$arguments35['additionalAttributes'] = NULL;
$arguments35['value'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['multiple'] = NULL;
$arguments35['size'] = NULL;
$arguments35['disabled'] = NULL;
$arguments35['optionValueField'] = NULL;
$arguments35['sortByOptionLabel'] = false;
$arguments35['selectAllByDefault'] = false;
$arguments35['errorClass'] = 'f3-form-error';
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper37->setArguments($arguments35);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output31 .= $viewHelper37->initializeArgumentsAndRender();

$output31 .= '
			</li>
			<li>
				<label for="answer">Answer</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments38 = array();
$arguments38['property'] = 'answer';
$arguments38['name'] = 'Answer';
$arguments38['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'answers', $renderingContext);
$arguments38['optionLabelField'] = 'text';
$arguments38['additionalAttributes'] = NULL;
$arguments38['value'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['multiple'] = NULL;
$arguments38['size'] = NULL;
$arguments38['disabled'] = NULL;
$arguments38['optionValueField'] = NULL;
$arguments38['sortByOptionLabel'] = false;
$arguments38['selectAllByDefault'] = false;
$arguments38['errorClass'] = 'f3-form-error';
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output31 .= $viewHelper40->initializeArgumentsAndRender();

$output31 .= '
			</li>
			<li>
				<label for="roomDestination">Room destination</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments41 = array();
$arguments41['property'] = 'roomDestination';
$arguments41['name'] = 'RoomDestination';
$arguments41['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'rooms', $renderingContext);
$arguments41['optionLabelField'] = 'name';
$arguments41['additionalAttributes'] = NULL;
$arguments41['value'] = NULL;
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
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output31 .= $viewHelper43->initializeArgumentsAndRender();

$output31 .= '
			</li>
			<li>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments44 = array();
$arguments44['value'] = 'Create';
$arguments44['additionalAttributes'] = NULL;
$arguments44['name'] = NULL;
$arguments44['property'] = NULL;
$arguments44['disabled'] = NULL;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper46->setArguments($arguments44);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output31 .= $viewHelper46->initializeArgumentsAndRender();

$output31 .= '
			</li>
		</ol>
	';
return $output31;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper47->setArguments($arguments29);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output28 .= $viewHelper47->initializeArgumentsAndRender();

$output28 .= '
';
return $output28;
};

$output20 .= '';

return $output20;
}


}
#0             20163     