<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_2d4a9094872cd577d3aea6ef8a2f680fd61815e92a6213430b48fe950ccb6c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_785f1b9a70948a2a4a005be0b473a4f8e203bbdadc5327ea994e9921e9c27aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785f1b9a70948a2a4a005be0b473a4f8e203bbdadc5327ea994e9921e9c27aa6->enter($__internal_785f1b9a70948a2a4a005be0b473a4f8e203bbdadc5327ea994e9921e9c27aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_93a2cbe14ba59c68e4361aab10c75fccdb8f139895dc8801792358432269a37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a2cbe14ba59c68e4361aab10c75fccdb8f139895dc8801792358432269a37c->enter($__internal_93a2cbe14ba59c68e4361aab10c75fccdb8f139895dc8801792358432269a37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_785f1b9a70948a2a4a005be0b473a4f8e203bbdadc5327ea994e9921e9c27aa6->leave($__internal_785f1b9a70948a2a4a005be0b473a4f8e203bbdadc5327ea994e9921e9c27aa6_prof);

        
        $__internal_93a2cbe14ba59c68e4361aab10c75fccdb8f139895dc8801792358432269a37c->leave($__internal_93a2cbe14ba59c68e4361aab10c75fccdb8f139895dc8801792358432269a37c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
