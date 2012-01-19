<?php
class FluidCache_TYPO3_CoSA_Answer_action_new_02fc7c8c53dc22db3cddd8a4261adf646955b52e extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return 'New answer';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<p>Just fill out the following form to create a new answer:</p>

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['action'] = 'create';
$arguments1['name'] = 'newAnswer';
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
				<label for="text">Text</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments4 = array();
$arguments4['property'] = 'text';
$arguments4['id'] = 'text';
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
				<label for="question">Question</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments7 = array();
$arguments7['property'] = 'question';
$arguments7['name'] = 'Question';
$arguments7['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'questions', $renderingContext);
$arguments7['optionLabelField'] = 'text';
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
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments10 = array();
$arguments10['value'] = 'Create';
$arguments10['additionalAttributes'] = NULL;
$arguments10['name'] = NULL;
$arguments10['property'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['class'] = NULL;
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
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper12->initializeArgumentsAndRender();

$output3 .= '
			</li>
		</ol>
	';
return $output3;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper13->setArguments($arguments1);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper13->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output14 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments15 = array();
$arguments15['name'] = 'Default';
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output14 .= $viewHelper17->initializeArgumentsAndRender();

$output14 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments18 = array();
$arguments18['name'] = 'Title';
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return 'New answer';
};

$output14 .= '';

$output14 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments20 = array();
$arguments20['name'] = 'Content';
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
	<p>Just fill out the following form to create a new answer:</p>

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments23 = array();
$arguments23['action'] = 'create';
$arguments23['name'] = 'newAnswer';
$arguments23['additionalAttributes'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['controller'] = NULL;
$arguments23['package'] = NULL;
$arguments23['subpackage'] = NULL;
$arguments23['object'] = NULL;
$arguments23['section'] = '';
$arguments23['format'] = '';
$arguments23['additionalParams'] = array (
);
$arguments23['absolute'] = false;
$arguments23['addQueryString'] = false;
$arguments23['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments23['fieldNamePrefix'] = NULL;
$arguments23['actionUri'] = NULL;
$arguments23['objectName'] = NULL;
$arguments23['enctype'] = NULL;
$arguments23['method'] = NULL;
$arguments23['onreset'] = NULL;
$arguments23['onsubmit'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
		<ol>
			<li>
				<label for="text">Text</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments26 = array();
$arguments26['property'] = 'text';
$arguments26['id'] = 'text';
$arguments26['additionalAttributes'] = NULL;
$arguments26['required'] = NULL;
$arguments26['type'] = 'text';
$arguments26['placeholder'] = NULL;
$arguments26['name'] = NULL;
$arguments26['value'] = NULL;
$arguments26['disabled'] = NULL;
$arguments26['maxlength'] = NULL;
$arguments26['readonly'] = NULL;
$arguments26['size'] = NULL;
$arguments26['errorClass'] = 'f3-form-error';
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output25 .= $viewHelper28->initializeArgumentsAndRender();

$output25 .= '
			</li>
			<li>
				<label for="question">Question</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments29 = array();
$arguments29['property'] = 'question';
$arguments29['name'] = 'Question';
$arguments29['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'questions', $renderingContext);
$arguments29['optionLabelField'] = 'text';
$arguments29['additionalAttributes'] = NULL;
$arguments29['value'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['multiple'] = NULL;
$arguments29['size'] = NULL;
$arguments29['disabled'] = NULL;
$arguments29['optionValueField'] = NULL;
$arguments29['sortByOptionLabel'] = false;
$arguments29['selectAllByDefault'] = false;
$arguments29['errorClass'] = 'f3-form-error';
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output25 .= $viewHelper31->initializeArgumentsAndRender();

$output25 .= '
			</li>
			<li>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments32 = array();
$arguments32['value'] = 'Create';
$arguments32['additionalAttributes'] = NULL;
$arguments32['name'] = NULL;
$arguments32['property'] = NULL;
$arguments32['disabled'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output25 .= $viewHelper34->initializeArgumentsAndRender();

$output25 .= '
			</li>
		</ol>
	';
return $output25;
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper35->setArguments($arguments23);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output22 .= $viewHelper35->initializeArgumentsAndRender();

$output22 .= '
';
return $output22;
};

$output14 .= '';

return $output14;
}


}
#0             13750     