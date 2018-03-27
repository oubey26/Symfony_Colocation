<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5edaa54b0cdd37395a2cb094e52ac7227d7d3c008d1d1d1415d5e9adc5a93af5 extends Twig_Template
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
        $__internal_42910d9c503f1b649ada3944e8a6503f143b32a4adc90b8aead08b442e345b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42910d9c503f1b649ada3944e8a6503f143b32a4adc90b8aead08b442e345b33->enter($__internal_42910d9c503f1b649ada3944e8a6503f143b32a4adc90b8aead08b442e345b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_0855c41203bc4e9657d42dfbc080a948d0f737a3188056159e8b07fdc8305674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0855c41203bc4e9657d42dfbc080a948d0f737a3188056159e8b07fdc8305674->enter($__internal_0855c41203bc4e9657d42dfbc080a948d0f737a3188056159e8b07fdc8305674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_42910d9c503f1b649ada3944e8a6503f143b32a4adc90b8aead08b442e345b33->leave($__internal_42910d9c503f1b649ada3944e8a6503f143b32a4adc90b8aead08b442e345b33_prof);

        
        $__internal_0855c41203bc4e9657d42dfbc080a948d0f737a3188056159e8b07fdc8305674->leave($__internal_0855c41203bc4e9657d42dfbc080a948d0f737a3188056159e8b07fdc8305674_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
