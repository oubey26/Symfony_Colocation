<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_adbbe7925088c2503515922b0741aa3b9848ac10fcc8d79fa85f415f6c4ebd24 extends Twig_Template
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
        $__internal_9754772c698eb57275fb7f666c0564f2c98f56ef2a73af7c231d3e50606f1f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9754772c698eb57275fb7f666c0564f2c98f56ef2a73af7c231d3e50606f1f89->enter($__internal_9754772c698eb57275fb7f666c0564f2c98f56ef2a73af7c231d3e50606f1f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_62987d1a6f45e8db79522f7008aa49a5d93febfbb5fa5664b9b4027ca61dd682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62987d1a6f45e8db79522f7008aa49a5d93febfbb5fa5664b9b4027ca61dd682->enter($__internal_62987d1a6f45e8db79522f7008aa49a5d93febfbb5fa5664b9b4027ca61dd682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9754772c698eb57275fb7f666c0564f2c98f56ef2a73af7c231d3e50606f1f89->leave($__internal_9754772c698eb57275fb7f666c0564f2c98f56ef2a73af7c231d3e50606f1f89_prof);

        
        $__internal_62987d1a6f45e8db79522f7008aa49a5d93febfbb5fa5664b9b4027ca61dd682->leave($__internal_62987d1a6f45e8db79522f7008aa49a5d93febfbb5fa5664b9b4027ca61dd682_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
