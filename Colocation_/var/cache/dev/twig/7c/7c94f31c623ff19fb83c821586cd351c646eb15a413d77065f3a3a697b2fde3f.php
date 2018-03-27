<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1dcb1621fd6a81d095b9bd1b93429df0064aebaf9a7c6642dd1368347360c1fb extends Twig_Template
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
        $__internal_6a199e6f6d3240ab2a513096f519e54a77b79412eb9623c8d9f42699dc679782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a199e6f6d3240ab2a513096f519e54a77b79412eb9623c8d9f42699dc679782->enter($__internal_6a199e6f6d3240ab2a513096f519e54a77b79412eb9623c8d9f42699dc679782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7554856acc4d6c4c32ace9de06f5f4702ec670dc85f6ad43a9b361781378970c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7554856acc4d6c4c32ace9de06f5f4702ec670dc85f6ad43a9b361781378970c->enter($__internal_7554856acc4d6c4c32ace9de06f5f4702ec670dc85f6ad43a9b361781378970c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6a199e6f6d3240ab2a513096f519e54a77b79412eb9623c8d9f42699dc679782->leave($__internal_6a199e6f6d3240ab2a513096f519e54a77b79412eb9623c8d9f42699dc679782_prof);

        
        $__internal_7554856acc4d6c4c32ace9de06f5f4702ec670dc85f6ad43a9b361781378970c->leave($__internal_7554856acc4d6c4c32ace9de06f5f4702ec670dc85f6ad43a9b361781378970c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
