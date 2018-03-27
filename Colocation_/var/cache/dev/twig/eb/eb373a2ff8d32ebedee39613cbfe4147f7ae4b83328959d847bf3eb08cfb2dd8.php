<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c8cf1f6aa116a6c7674d731df50cd4c1e3c609c74e4e784ba18211ed718461b0 extends Twig_Template
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
        $__internal_58e2d51d2cc893434bcbd291f0a60cbbc035e8af7922ea22611cbf0b4c2c4813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e2d51d2cc893434bcbd291f0a60cbbc035e8af7922ea22611cbf0b4c2c4813->enter($__internal_58e2d51d2cc893434bcbd291f0a60cbbc035e8af7922ea22611cbf0b4c2c4813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6126293c27d866d84f008575ba2b4180ab7e300d37dc904a71bb041205a6918b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6126293c27d866d84f008575ba2b4180ab7e300d37dc904a71bb041205a6918b->enter($__internal_6126293c27d866d84f008575ba2b4180ab7e300d37dc904a71bb041205a6918b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_58e2d51d2cc893434bcbd291f0a60cbbc035e8af7922ea22611cbf0b4c2c4813->leave($__internal_58e2d51d2cc893434bcbd291f0a60cbbc035e8af7922ea22611cbf0b4c2c4813_prof);

        
        $__internal_6126293c27d866d84f008575ba2b4180ab7e300d37dc904a71bb041205a6918b->leave($__internal_6126293c27d866d84f008575ba2b4180ab7e300d37dc904a71bb041205a6918b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
