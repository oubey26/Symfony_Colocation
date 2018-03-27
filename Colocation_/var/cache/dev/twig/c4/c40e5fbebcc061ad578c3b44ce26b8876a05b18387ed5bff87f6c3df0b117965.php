<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e1c7c0e04f66b3876d0d1087e2b3deb4e303b78b681c1af1bd11e12ea2598c5f extends Twig_Template
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
        $__internal_08a3f9929fb3f4fe5270cdc9c3ab069e2361a469023a13ef670e4832b4b5049d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a3f9929fb3f4fe5270cdc9c3ab069e2361a469023a13ef670e4832b4b5049d->enter($__internal_08a3f9929fb3f4fe5270cdc9c3ab069e2361a469023a13ef670e4832b4b5049d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d2d454e6e50cd5a2afc0f8c0400a23dba955d0d2de35d127e54e24b8db4b8e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d454e6e50cd5a2afc0f8c0400a23dba955d0d2de35d127e54e24b8db4b8e9b->enter($__internal_d2d454e6e50cd5a2afc0f8c0400a23dba955d0d2de35d127e54e24b8db4b8e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_08a3f9929fb3f4fe5270cdc9c3ab069e2361a469023a13ef670e4832b4b5049d->leave($__internal_08a3f9929fb3f4fe5270cdc9c3ab069e2361a469023a13ef670e4832b4b5049d_prof);

        
        $__internal_d2d454e6e50cd5a2afc0f8c0400a23dba955d0d2de35d127e54e24b8db4b8e9b->leave($__internal_d2d454e6e50cd5a2afc0f8c0400a23dba955d0d2de35d127e54e24b8db4b8e9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
