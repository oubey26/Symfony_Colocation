<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_78b2b702df89c8347d9930e148b5220e5db53312150c9aac54e875b5fe5179a7 extends Twig_Template
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
        $__internal_4f846ffc2deca675f5fb87b8b640970756ff6078c96fe947feed8f157aab1110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f846ffc2deca675f5fb87b8b640970756ff6078c96fe947feed8f157aab1110->enter($__internal_4f846ffc2deca675f5fb87b8b640970756ff6078c96fe947feed8f157aab1110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d854656079ed71341539196a9d0a8709476b89095784c664dd7a1b9509f920e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d854656079ed71341539196a9d0a8709476b89095784c664dd7a1b9509f920e6->enter($__internal_d854656079ed71341539196a9d0a8709476b89095784c664dd7a1b9509f920e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4f846ffc2deca675f5fb87b8b640970756ff6078c96fe947feed8f157aab1110->leave($__internal_4f846ffc2deca675f5fb87b8b640970756ff6078c96fe947feed8f157aab1110_prof);

        
        $__internal_d854656079ed71341539196a9d0a8709476b89095784c664dd7a1b9509f920e6->leave($__internal_d854656079ed71341539196a9d0a8709476b89095784c664dd7a1b9509f920e6_prof);

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
