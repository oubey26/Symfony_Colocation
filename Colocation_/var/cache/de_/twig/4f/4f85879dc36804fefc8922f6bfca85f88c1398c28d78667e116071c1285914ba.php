<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4582fa1a00f63b4d1478a6f459043d8f3c45d3e9f4b0a246d4149fccc0778a78 extends Twig_Template
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
        $__internal_88a2411ce645bc7789f5d3710c15c68f8b5df6bacbc60ea9d31f1841c58aa7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a2411ce645bc7789f5d3710c15c68f8b5df6bacbc60ea9d31f1841c58aa7ef->enter($__internal_88a2411ce645bc7789f5d3710c15c68f8b5df6bacbc60ea9d31f1841c58aa7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f76ef350a07ab28dfc665e3ccdd4a702acb6b2fb0d24be839b4a44924674bfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76ef350a07ab28dfc665e3ccdd4a702acb6b2fb0d24be839b4a44924674bfea->enter($__internal_f76ef350a07ab28dfc665e3ccdd4a702acb6b2fb0d24be839b4a44924674bfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_88a2411ce645bc7789f5d3710c15c68f8b5df6bacbc60ea9d31f1841c58aa7ef->leave($__internal_88a2411ce645bc7789f5d3710c15c68f8b5df6bacbc60ea9d31f1841c58aa7ef_prof);

        
        $__internal_f76ef350a07ab28dfc665e3ccdd4a702acb6b2fb0d24be839b4a44924674bfea->leave($__internal_f76ef350a07ab28dfc665e3ccdd4a702acb6b2fb0d24be839b4a44924674bfea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
