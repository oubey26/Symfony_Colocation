<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d600fe9d38d78940e3f76d3e0079b49761819a784855b30a145ec7c09d6ae9e7 extends Twig_Template
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
        $__internal_f01b088dd34745cde37e12b838a24f465b0287c1596e096dae016e1702afc8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f01b088dd34745cde37e12b838a24f465b0287c1596e096dae016e1702afc8ca->enter($__internal_f01b088dd34745cde37e12b838a24f465b0287c1596e096dae016e1702afc8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_96ba1a8bf906535e0756ca9a0718185ee3f3bc4e151a005c0006f3bf780f7f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ba1a8bf906535e0756ca9a0718185ee3f3bc4e151a005c0006f3bf780f7f3c->enter($__internal_96ba1a8bf906535e0756ca9a0718185ee3f3bc4e151a005c0006f3bf780f7f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f01b088dd34745cde37e12b838a24f465b0287c1596e096dae016e1702afc8ca->leave($__internal_f01b088dd34745cde37e12b838a24f465b0287c1596e096dae016e1702afc8ca_prof);

        
        $__internal_96ba1a8bf906535e0756ca9a0718185ee3f3bc4e151a005c0006f3bf780f7f3c->leave($__internal_96ba1a8bf906535e0756ca9a0718185ee3f3bc4e151a005c0006f3bf780f7f3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
