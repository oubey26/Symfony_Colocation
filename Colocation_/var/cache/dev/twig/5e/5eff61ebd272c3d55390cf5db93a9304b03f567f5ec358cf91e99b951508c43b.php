<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_bd067f3064927f1ca0955828f5af05233a6cc5d89d2b3eb47f998464aba45b6a extends Twig_Template
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
        $__internal_1f161bae5506f492bafa675b76c78db6e1687d5c80e44b6617075fb8dcaa5fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f161bae5506f492bafa675b76c78db6e1687d5c80e44b6617075fb8dcaa5fc5->enter($__internal_1f161bae5506f492bafa675b76c78db6e1687d5c80e44b6617075fb8dcaa5fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4691e729242680cb32f4a3bcbc1616e7122471e13df626f028f9d9343b201df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4691e729242680cb32f4a3bcbc1616e7122471e13df626f028f9d9343b201df8->enter($__internal_4691e729242680cb32f4a3bcbc1616e7122471e13df626f028f9d9343b201df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1f161bae5506f492bafa675b76c78db6e1687d5c80e44b6617075fb8dcaa5fc5->leave($__internal_1f161bae5506f492bafa675b76c78db6e1687d5c80e44b6617075fb8dcaa5fc5_prof);

        
        $__internal_4691e729242680cb32f4a3bcbc1616e7122471e13df626f028f9d9343b201df8->leave($__internal_4691e729242680cb32f4a3bcbc1616e7122471e13df626f028f9d9343b201df8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
