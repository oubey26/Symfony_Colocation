<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_70ffd94c323c4042bc0adf8c731c3beabb532ccfda61dc887f21169488fe71ce extends Twig_Template
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
        $__internal_d5b518dd42e0fbe289bb978844bfe34183beec668645b298b2d314f9064264f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b518dd42e0fbe289bb978844bfe34183beec668645b298b2d314f9064264f5->enter($__internal_d5b518dd42e0fbe289bb978844bfe34183beec668645b298b2d314f9064264f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5b35531073e4e1985f65b820b445b8d6eb1c46c862b3569b15d377d9de0d0c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b35531073e4e1985f65b820b445b8d6eb1c46c862b3569b15d377d9de0d0c55->enter($__internal_5b35531073e4e1985f65b820b445b8d6eb1c46c862b3569b15d377d9de0d0c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d5b518dd42e0fbe289bb978844bfe34183beec668645b298b2d314f9064264f5->leave($__internal_d5b518dd42e0fbe289bb978844bfe34183beec668645b298b2d314f9064264f5_prof);

        
        $__internal_5b35531073e4e1985f65b820b445b8d6eb1c46c862b3569b15d377d9de0d0c55->leave($__internal_5b35531073e4e1985f65b820b445b8d6eb1c46c862b3569b15d377d9de0d0c55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
