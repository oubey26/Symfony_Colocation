<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c01ec39ce0340325c1af74bcbf99b48ab515f0ff3006737dc4ba0ca2a2605f43 extends Twig_Template
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
        $__internal_b17427c65834afbf139e57e07ccd39dd0c72327410ba5c713223fae4d3d11104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17427c65834afbf139e57e07ccd39dd0c72327410ba5c713223fae4d3d11104->enter($__internal_b17427c65834afbf139e57e07ccd39dd0c72327410ba5c713223fae4d3d11104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_837f3230dd0e36a1fa60f52091f0f20c49b2f87f572f194927546436c4c1cf4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837f3230dd0e36a1fa60f52091f0f20c49b2f87f572f194927546436c4c1cf4c->enter($__internal_837f3230dd0e36a1fa60f52091f0f20c49b2f87f572f194927546436c4c1cf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b17427c65834afbf139e57e07ccd39dd0c72327410ba5c713223fae4d3d11104->leave($__internal_b17427c65834afbf139e57e07ccd39dd0c72327410ba5c713223fae4d3d11104_prof);

        
        $__internal_837f3230dd0e36a1fa60f52091f0f20c49b2f87f572f194927546436c4c1cf4c->leave($__internal_837f3230dd0e36a1fa60f52091f0f20c49b2f87f572f194927546436c4c1cf4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
