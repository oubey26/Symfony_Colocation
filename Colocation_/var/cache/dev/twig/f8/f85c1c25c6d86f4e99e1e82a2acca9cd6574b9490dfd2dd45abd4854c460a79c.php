<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_8c49685a40fdc93032518dcf8807548368e600926c1d2119f36749118e8c65a0 extends Twig_Template
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
        $__internal_7a10fea13ba2d1cc01d33882d4402d900f3c93d7d0f05ea8728734e1d0d4c20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a10fea13ba2d1cc01d33882d4402d900f3c93d7d0f05ea8728734e1d0d4c20a->enter($__internal_7a10fea13ba2d1cc01d33882d4402d900f3c93d7d0f05ea8728734e1d0d4c20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_5c218e1dc413782e93f4feb6364c43855f9a24813698679023b62d585b5580f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c218e1dc413782e93f4feb6364c43855f9a24813698679023b62d585b5580f6->enter($__internal_5c218e1dc413782e93f4feb6364c43855f9a24813698679023b62d585b5580f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7a10fea13ba2d1cc01d33882d4402d900f3c93d7d0f05ea8728734e1d0d4c20a->leave($__internal_7a10fea13ba2d1cc01d33882d4402d900f3c93d7d0f05ea8728734e1d0d4c20a_prof);

        
        $__internal_5c218e1dc413782e93f4feb6364c43855f9a24813698679023b62d585b5580f6->leave($__internal_5c218e1dc413782e93f4feb6364c43855f9a24813698679023b62d585b5580f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
