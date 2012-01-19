<?php
class FluidCache_TYPO3_CoSA_Room_action_new_62703dfdef6b1d40d26b3978b922feec16034239 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return 'New room';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<p>Just fill out the following form to create a new room:</p>

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['action'] = 'create';
$arguments1['name'] = 'newRoom';
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
				<label for="type">Type</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments7 = array();
$arguments7['property'] = 'type';
$arguments7['name'] = 'Type';
// Rendering Array
$array8 = array();
$array8['s'] = 'standard';
$array8['f'] = 'final';
$array8['e'] = 'entrance';
$arguments7['options'] = $array8;
$arguments7['optionLabelField'] = 'type';
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
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper10->setArguments($arguments7);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper10->initializeArgumentsAndRender();

$output3 .= '
			</li>
			<li>
				<label for="question">Question</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments11 = array();
$arguments11['property'] = 'question';
$arguments11['name'] = 'Question';
$arguments11['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'questions', $renderingContext);
$arguments11['optionLabelField'] = 'text';
$arguments11['additionalAttributes'] = NULL;
$arguments11['value'] = NULL;
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
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper13->initializeArgumentsAndRender();

$output3 .= '
			</li>		
			<li>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments14 = array();
$arguments14['value'] = 'Create';
$arguments14['additionalAttributes'] = NULL;
$arguments14['name'] = NULL;
$arguments14['property'] = NULL;
$arguments14['disabled'] = NULL;
$arguments14['class'] = NULL;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['title'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper16->initializeArgumentsAndRender();

$output3 .= '
			</li>
		</ol>
	';
return $output3;
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper17->setArguments($arguments1);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper17->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output18 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments19 = array();
$arguments19['name'] = 'Default';
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output18 .= $viewHelper21->initializeArgumentsAndRender();

$output18 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments22 = array();
$arguments22['name'] = 'Title';
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return 'New room';
};

$output18 .= '';

$output18 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments24 = array();
$arguments24['name'] = 'Content';
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
	<p>Just fill out the following form to create a new room:</p>

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments27 = array();
$arguments27['action'] = 'create';
$arguments27['name'] = 'newRoom';
$arguments27['additionalAttributes'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['controller'] = NULL;
$arguments27['package'] = NULL;
$arguments27['subpackage'] = NULL;
$arguments27['object'] = NULL;
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['additionalParams'] = array (
);
$arguments27['absolute'] = false;
$arguments27['addQueryString'] = false;
$arguments27['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments27['fieldNamePrefix'] = NULL;
$arguments27['actionUri'] = NULL;
$arguments27['objectName'] = NULL;
$arguments27['enctype'] = NULL;
$arguments27['method'] = NULL;
$arguments27['onreset'] = NULL;
$arguments27['onsubmit'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
		<ol>
			<li>
				<label for="name">Name</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments30 = array();
$arguments30['property'] = 'name';
$arguments30['id'] = 'name';
$arguments30['additionalAttributes'] = NULL;
$arguments30['required'] = NULL;
$arguments30['type'] = 'text';
$arguments30['placeholder'] = NULL;
$arguments30['name'] = NULL;
$arguments30['value'] = NULL;
$arguments30['disabled'] = NULL;
$arguments30['maxlength'] = NULL;
$arguments30['readonly'] = NULL;
$arguments30['size'] = NULL;
$arguments30['errorClass'] = 'f3-form-error';
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output29 .= $viewHelper32->initializeArgumentsAndRender();

$output29 .= '
			</li>
			<li>
				<label for="type">Type</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments33 = array();
$arguments33['property'] = 'type';
$arguments33['name'] = 'Type';
// Rendering Array
$array34 = array();
$array34['s'] = 'standard';
$array34['f'] = 'final';
$array34['e'] = 'entrance';
$arguments33['options'] = $array34;
$arguments33['optionLabelField'] = 'type';
$arguments33['additionalAttributes'] = NULL;
$arguments33['value'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['multiple'] = NULL;
$arguments33['size'] = NULL;
$arguments33['disabled'] = NULL;
$arguments33['optionValueField'] = NULL;
$arguments33['sortByOptionLabel'] = false;
$arguments33['selectAllByDefault'] = false;
$arguments33['errorClass'] = 'f3-form-error';
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper36->setArguments($arguments33);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output29 .= $viewHelper36->initializeArgumentsAndRender();

$output29 .= '
			</li>
			<li>
				<label for="question">Question</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments37 = array();
$arguments37['property'] = 'question';
$arguments37['name'] = 'Question';
$arguments37['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'questions', $renderingContext);
$arguments37['optionLabelField'] = 'text';
$arguments37['additionalAttributes'] = NULL;
$arguments37['value'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['multiple'] = NULL;
$arguments37['size'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['optionValueField'] = NULL;
$arguments37['sortByOptionLabel'] = false;
$arguments37['selectAllByDefault'] = false;
$arguments37['errorClass'] = 'f3-form-error';
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output29 .= $viewHelper39->initializeArgumentsAndRender();

$output29 .= '
			</li>		
			<li>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments40 = array();
$arguments40['value'] = 'Create';
$arguments40['additionalAttributes'] = NULL;
$arguments40['name'] = NULL;
$arguments40['property'] = NULL;
$arguments40['disabled'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper42->setArguments($arguments40);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output29 .= $viewHelper42->initializeArgumentsAndRender();

$output29 .= '
			</li>
		</ol>
	';
return $output29;
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper43->setArguments($arguments27);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output26 .= $viewHelper43->initializeArgumentsAndRender();

$output26 .= '
';
return $output26;
};

$output18 .= '';

return $output18;
}


}
#0             16847     