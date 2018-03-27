<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3f1e68294804332f38cd213452a6f1ccae3a51f8c8c3fc37f7b971dbb8807a4c extends Twig_Template
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
        $__internal_04e7f7f09e2b4840290ecf9a9919677d5c48aaa1d3459c82b753720c3a96c0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e7f7f09e2b4840290ecf9a9919677d5c48aaa1d3459c82b753720c3a96c0bc->enter($__internal_04e7f7f09e2b4840290ecf9a9919677d5c48aaa1d3459c82b753720c3a96c0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_baa439581976f78c61e90af85264033a2d3138aad9b7db737dd7e2f49369e258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa439581976f78c61e90af85264033a2d3138aad9b7db737dd7e2f49369e258->enter($__internal_baa439581976f78c61e90af85264033a2d3138aad9b7db737dd7e2f49369e258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_04e7f7f09e2b4840290ecf9a9919677d5c48aaa1d3459c82b753720c3a96c0bc->leave($__internal_04e7f7f09e2b4840290ecf9a9919677d5c48aaa1d3459c82b753720c3a96c0bc_prof);

        
        $__internal_baa439581976f78c61e90af85264033a2d3138aad9b7db737dd7e2f49369e258->leave($__internal_baa439581976f78c61e90af85264033a2d3138aad9b7db737dd7e2f49369e258_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
