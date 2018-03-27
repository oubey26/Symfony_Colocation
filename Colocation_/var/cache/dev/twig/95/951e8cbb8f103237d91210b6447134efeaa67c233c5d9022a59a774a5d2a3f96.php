<?php

/* annonces/index.html.twig */
class __TwigTemplate_efd8604001537937410c71bb4d00d9e31c5c6631d05a0a80ae5cd93727c28f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "annonces/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a42199ebcd8bf9471cfb46d623bd4b04efa5b797b4d5f1582459b13d09cce38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42199ebcd8bf9471cfb46d623bd4b04efa5b797b4d5f1582459b13d09cce38a->enter($__internal_a42199ebcd8bf9471cfb46d623bd4b04efa5b797b4d5f1582459b13d09cce38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/index.html.twig"));

        $__internal_364a6de188836d9c1753ba924fabb11ebbda8e5a53d65b722799b4aacc08f11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364a6de188836d9c1753ba924fabb11ebbda8e5a53d65b722799b4aacc08f11c->enter($__internal_364a6de188836d9c1753ba924fabb11ebbda8e5a53d65b722799b4aacc08f11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a42199ebcd8bf9471cfb46d623bd4b04efa5b797b4d5f1582459b13d09cce38a->leave($__internal_a42199ebcd8bf9471cfb46d623bd4b04efa5b797b4d5f1582459b13d09cce38a_prof);

        
        $__internal_364a6de188836d9c1753ba924fabb11ebbda8e5a53d65b722799b4aacc08f11c->leave($__internal_364a6de188836d9c1753ba924fabb11ebbda8e5a53d65b722799b4aacc08f11c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bd426b7413a69c95c12ee56ae801a15afed1f882b6053342cf5cfe640e8ae98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd426b7413a69c95c12ee56ae801a15afed1f882b6053342cf5cfe640e8ae98->enter($__internal_3bd426b7413a69c95c12ee56ae801a15afed1f882b6053342cf5cfe640e8ae98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41f27176f34651a8b02a33f7e404100488f88970cf236a4b7a2e3faf98209cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f27176f34651a8b02a33f7e404100488f88970cf236a4b7a2e3faf98209cbd->enter($__internal_41f27176f34651a8b02a33f7e404100488f88970cf236a4b7a2e3faf98209cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annonces list"), "html", null, true);
        echo "</h1>
    <table  class=\"w3-table-all\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Innitiateur</th>
                <th>Adresse</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Chambre <br>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 20
            echo "                <tr>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "Innitiateur", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo " </td>
                    <td><center>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nombreDeChambre", array()), "html", null, true);
            echo " </center></td>
                    <td> <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary btn-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show"), "html", null, true);
            echo "</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</table>
    
            
";
        
        $__internal_41f27176f34651a8b02a33f7e404100488f88970cf236a4b7a2e3faf98209cbd->leave($__internal_41f27176f34651a8b02a33f7e404100488f88970cf236a4b7a2e3faf98209cbd_prof);

        
        $__internal_3bd426b7413a69c95c12ee56ae801a15afed1f882b6053342cf5cfe640e8ae98->leave($__internal_3bd426b7413a69c95c12ee56ae801a15afed1f882b6053342cf5cfe640e8ae98_prof);

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
        return array (  111 => 30,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  73 => 20,  69 => 19,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}

    <h1>{{'Annonces list'|trans}}</h1>
    <table  class=\"w3-table-all\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Innitiateur</th>
                <th>Adresse</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Chambre <br>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for annonce in annonces %}
                <tr>
                    <td>{{ annonce.id }} </td>
                    <td> {{ annonce.Innitiateur }} </td>
                    <td>{{ annonce.adresse }}</td>
                    <td>{{ annonce.description}}</td>
                    <td>{{ annonce.prix }} </td>
                    <td><center>{{ annonce.nombreDeChambre }} </center></td>
                    <td> <a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\"class=\"btn btn-primary btn-block\">{{'show'|trans}}</a></td>
                </tr>
            {% endfor %}
</table>
    
            
{% endblock %}
", "annonces/index.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\index.html.twig");
    }
}
