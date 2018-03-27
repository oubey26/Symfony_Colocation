<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_dddd2b19d8a3b53cf7a916d8bb0ebff5271794920999653542c8b4892e3830ca extends Twig_Template
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
        $__internal_871d80ad0dd8c44fb3d5b00d5dc3801aa94dcb9a5cc9d37cf685899d6b854497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871d80ad0dd8c44fb3d5b00d5dc3801aa94dcb9a5cc9d37cf685899d6b854497->enter($__internal_871d80ad0dd8c44fb3d5b00d5dc3801aa94dcb9a5cc9d37cf685899d6b854497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_602eb7a5ac86a58016e00d6d9bc19c68abbdc1dd9433638efbf55b1f247b88b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602eb7a5ac86a58016e00d6d9bc19c68abbdc1dd9433638efbf55b1f247b88b0->enter($__internal_602eb7a5ac86a58016e00d6d9bc19c68abbdc1dd9433638efbf55b1f247b88b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_871d80ad0dd8c44fb3d5b00d5dc3801aa94dcb9a5cc9d37cf685899d6b854497->leave($__internal_871d80ad0dd8c44fb3d5b00d5dc3801aa94dcb9a5cc9d37cf685899d6b854497_prof);

        
        $__internal_602eb7a5ac86a58016e00d6d9bc19c68abbdc1dd9433638efbf55b1f247b88b0->leave($__internal_602eb7a5ac86a58016e00d6d9bc19c68abbdc1dd9433638efbf55b1f247b88b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
