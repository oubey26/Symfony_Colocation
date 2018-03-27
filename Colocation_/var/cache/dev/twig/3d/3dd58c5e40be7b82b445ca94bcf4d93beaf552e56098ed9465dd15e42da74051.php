<?php

/* annonces/index.html.twig */
class __TwigTemplate_b2e53eef7659e99457aec58cfde1f764e31771402bb5d1d348e5f1da7743be24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonces/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f291f173e7c45ce64b72dd3cf69102e4542b137c2ab5b83073a2b71a443c61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f291f173e7c45ce64b72dd3cf69102e4542b137c2ab5b83073a2b71a443c61d->enter($__internal_5f291f173e7c45ce64b72dd3cf69102e4542b137c2ab5b83073a2b71a443c61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/index.html.twig"));

        $__internal_9ad3cd8ebc9a7357d44b59bac8d617331dfa4422108d32119acd1f8977d64b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad3cd8ebc9a7357d44b59bac8d617331dfa4422108d32119acd1f8977d64b85->enter($__internal_9ad3cd8ebc9a7357d44b59bac8d617331dfa4422108d32119acd1f8977d64b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f291f173e7c45ce64b72dd3cf69102e4542b137c2ab5b83073a2b71a443c61d->leave($__internal_5f291f173e7c45ce64b72dd3cf69102e4542b137c2ab5b83073a2b71a443c61d_prof);

        
        $__internal_9ad3cd8ebc9a7357d44b59bac8d617331dfa4422108d32119acd1f8977d64b85->leave($__internal_9ad3cd8ebc9a7357d44b59bac8d617331dfa4422108d32119acd1f8977d64b85_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2629b34741e59e7c78d42c059616ac9182dc7d754ee0d7cb69015c83bfe8cec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2629b34741e59e7c78d42c059616ac9182dc7d754ee0d7cb69015c83bfe8cec2->enter($__internal_2629b34741e59e7c78d42c059616ac9182dc7d754ee0d7cb69015c83bfe8cec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_423c21d7db359de0347da56cada314ed470eb7709d7e4359a56a31adb2124dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423c21d7db359de0347da56cada314ed470eb7709d7e4359a56a31adb2124dbf->enter($__internal_423c21d7db359de0347da56cada314ed470eb7709d7e4359a56a31adb2124dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se déconnecter"), "html", null, true);
        echo " </a>

    <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annonces list"), "html", null, true);
        echo "</h1>
    <table  class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Innitiateur</th><th>&nbsp;</th>
                <th>Adresse</th><th>&nbsp;</th>
                <th>Description</th><th>&nbsp;</th>
                <th>Prix</th><th>&nbsp;</th>
                <th>Datedebut</th><th>&nbsp;</th>
                <th>NombredechambreDisponible</th><th>&nbsp;</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>-->
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
            echo "</td>
                    <td> <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary btn-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["annonce"], "description", array()), 0, 65), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    
";
        
        $__internal_423c21d7db359de0347da56cada314ed470eb7709d7e4359a56a31adb2124dbf->leave($__internal_423c21d7db359de0347da56cada314ed470eb7709d7e4359a56a31adb2124dbf_prof);

        
        $__internal_2629b34741e59e7c78d42c059616ac9182dc7d754ee0d7cb69015c83bfe8cec2->leave($__internal_2629b34741e59e7c78d42c059616ac9182dc7d754ee0d7cb69015c83bfe8cec2_prof);

    }

    public function getTemplateName()
    {
        return "annonces/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  92 => 25,  86 => 24,  82 => 23,  79 => 22,  75 => 21,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <a href=\"{{ path('fos_user_security_logout') }}\"> {{'se déconnecter'|trans}} </a>

    <h1>{{'Annonces list'|trans}}</h1>
    <table  class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Innitiateur</th><th>&nbsp;</th>
                <th>Adresse</th><th>&nbsp;</th>
                <th>Description</th><th>&nbsp;</th>
                <th>Prix</th><th>&nbsp;</th>
                <th>Datedebut</th><th>&nbsp;</th>
                <th>NombredechambreDisponible</th><th>&nbsp;</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>-->
            {% for annonce in annonces %}
                <tr>
                    <td>{{ annonce.adresse }}</td>
                    <td> <a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\"class=\"btn btn-primary btn-block\">{{'show'|trans}}</a></td>
                    <td>{{ annonce.description[:65]}}</td>
                </tr>
            {% endfor %}    
{% endblock %}
", "annonces/index.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\index.html.twig");
    }
}
