<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c7fa32da8b008bc267908eb184090500f4de7e344f18368c0a472eb28997bd5d extends Twig_Template
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
        $__internal_a5458ee1481cc6c8b805f61efa12acd7b9a2c469e4302f51cd77a48cd1a0f1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5458ee1481cc6c8b805f61efa12acd7b9a2c469e4302f51cd77a48cd1a0f1f5->enter($__internal_a5458ee1481cc6c8b805f61efa12acd7b9a2c469e4302f51cd77a48cd1a0f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1b0a49ed97acb51a85719970b8ddf0a8449815e5a7ff0ffa3c79747338d3c6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0a49ed97acb51a85719970b8ddf0a8449815e5a7ff0ffa3c79747338d3c6d9->enter($__internal_1b0a49ed97acb51a85719970b8ddf0a8449815e5a7ff0ffa3c79747338d3c6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a5458ee1481cc6c8b805f61efa12acd7b9a2c469e4302f51cd77a48cd1a0f1f5->leave($__internal_a5458ee1481cc6c8b805f61efa12acd7b9a2c469e4302f51cd77a48cd1a0f1f5_prof);

        
        $__internal_1b0a49ed97acb51a85719970b8ddf0a8449815e5a7ff0ffa3c79747338d3c6d9->leave($__internal_1b0a49ed97acb51a85719970b8ddf0a8449815e5a7ff0ffa3c79747338d3c6d9_prof);

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
