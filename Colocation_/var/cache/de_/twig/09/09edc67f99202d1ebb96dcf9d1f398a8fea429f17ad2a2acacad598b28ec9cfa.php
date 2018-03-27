<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d9276f30feae344f70f64ffa222336c0dbade2df25f5c82bd00356c925970203 extends Twig_Template
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
        $__internal_5ffaa6df953718103729759a0f6d0c96f8e9e8845be1b7ff62b4c3cf173df17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffaa6df953718103729759a0f6d0c96f8e9e8845be1b7ff62b4c3cf173df17a->enter($__internal_5ffaa6df953718103729759a0f6d0c96f8e9e8845be1b7ff62b4c3cf173df17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_35c7ff92d77a082e6e95f88b6de72b12206edfb0d9d0dc5438d32c4c8f7c7209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c7ff92d77a082e6e95f88b6de72b12206edfb0d9d0dc5438d32c4c8f7c7209->enter($__internal_35c7ff92d77a082e6e95f88b6de72b12206edfb0d9d0dc5438d32c4c8f7c7209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5ffaa6df953718103729759a0f6d0c96f8e9e8845be1b7ff62b4c3cf173df17a->leave($__internal_5ffaa6df953718103729759a0f6d0c96f8e9e8845be1b7ff62b4c3cf173df17a_prof);

        
        $__internal_35c7ff92d77a082e6e95f88b6de72b12206edfb0d9d0dc5438d32c4c8f7c7209->leave($__internal_35c7ff92d77a082e6e95f88b6de72b12206edfb0d9d0dc5438d32c4c8f7c7209_prof);

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
