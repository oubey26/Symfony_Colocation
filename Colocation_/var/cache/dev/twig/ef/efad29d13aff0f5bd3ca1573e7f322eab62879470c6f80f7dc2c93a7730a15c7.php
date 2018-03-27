<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_19fc2ebfa9737db27eb5a5334146d70742d20cf7768748d9547ebf8d2cb3ce9f extends Twig_Template
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
        $__internal_4876b34ac3eb07a39d1dbb9bb268018eef1c291f9d6eb3f1206357602ffcbb04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4876b34ac3eb07a39d1dbb9bb268018eef1c291f9d6eb3f1206357602ffcbb04->enter($__internal_4876b34ac3eb07a39d1dbb9bb268018eef1c291f9d6eb3f1206357602ffcbb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5b8a5d4e02f58a686b6216860d2a2b5e5458f4f0b9980189ee12cd34d572e3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8a5d4e02f58a686b6216860d2a2b5e5458f4f0b9980189ee12cd34d572e3af->enter($__internal_5b8a5d4e02f58a686b6216860d2a2b5e5458f4f0b9980189ee12cd34d572e3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4876b34ac3eb07a39d1dbb9bb268018eef1c291f9d6eb3f1206357602ffcbb04->leave($__internal_4876b34ac3eb07a39d1dbb9bb268018eef1c291f9d6eb3f1206357602ffcbb04_prof);

        
        $__internal_5b8a5d4e02f58a686b6216860d2a2b5e5458f4f0b9980189ee12cd34d572e3af->leave($__internal_5b8a5d4e02f58a686b6216860d2a2b5e5458f4f0b9980189ee12cd34d572e3af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
