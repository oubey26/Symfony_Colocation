<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3d865e38c2e51ae08ea2ea1a214c755c84d054f36f766499d020d35c51a6f242 extends Twig_Template
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
        $__internal_5f74072bc8fed26592a763b33666598d82a906960348fd82a088f52c931f98c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f74072bc8fed26592a763b33666598d82a906960348fd82a088f52c931f98c8->enter($__internal_5f74072bc8fed26592a763b33666598d82a906960348fd82a088f52c931f98c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_674013063ed605da12376b2c065d66dc7685ef4db3c5a5926efaf54651c99817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674013063ed605da12376b2c065d66dc7685ef4db3c5a5926efaf54651c99817->enter($__internal_674013063ed605da12376b2c065d66dc7685ef4db3c5a5926efaf54651c99817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5f74072bc8fed26592a763b33666598d82a906960348fd82a088f52c931f98c8->leave($__internal_5f74072bc8fed26592a763b33666598d82a906960348fd82a088f52c931f98c8_prof);

        
        $__internal_674013063ed605da12376b2c065d66dc7685ef4db3c5a5926efaf54651c99817->leave($__internal_674013063ed605da12376b2c065d66dc7685ef4db3c5a5926efaf54651c99817_prof);

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
