<?php

/* annonces/show.html.twig */
class __TwigTemplate_c3accc2868373687dd141636441cd2d67269c933048ddbef86ab68f04fe800c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonces/show.html.twig", 1);
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
        $__internal_7570c26e9a3bac8bd6a8b68304f0a899483c5d267c39a3a667ed87ad7050bb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7570c26e9a3bac8bd6a8b68304f0a899483c5d267c39a3a667ed87ad7050bb10->enter($__internal_7570c26e9a3bac8bd6a8b68304f0a899483c5d267c39a3a667ed87ad7050bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/show.html.twig"));

        $__internal_033d8736f2274285a0639d8e238c85786e9c0a3059389ff3b2ef8e17fd5cc83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033d8736f2274285a0639d8e238c85786e9c0a3059389ff3b2ef8e17fd5cc83c->enter($__internal_033d8736f2274285a0639d8e238c85786e9c0a3059389ff3b2ef8e17fd5cc83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7570c26e9a3bac8bd6a8b68304f0a899483c5d267c39a3a667ed87ad7050bb10->leave($__internal_7570c26e9a3bac8bd6a8b68304f0a899483c5d267c39a3a667ed87ad7050bb10_prof);

        
        $__internal_033d8736f2274285a0639d8e238c85786e9c0a3059389ff3b2ef8e17fd5cc83c->leave($__internal_033d8736f2274285a0639d8e238c85786e9c0a3059389ff3b2ef8e17fd5cc83c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_120ea040bbfb94ee2888ab015b8b7c848557cc93c27128b335502831f2471942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120ea040bbfb94ee2888ab015b8b7c848557cc93c27128b335502831f2471942->enter($__internal_120ea040bbfb94ee2888ab015b8b7c848557cc93c27128b335502831f2471942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3062f4ff4d3dc710744051123f42f799b715d9a3c6f4d05ba936c150d0cdf958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3062f4ff4d3dc710744051123f42f799b715d9a3c6f4d05ba936c150d0cdf958->enter($__internal_3062f4ff4d3dc710744051123f42f799b715d9a3c6f4d05ba936c150d0cdf958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se déconnecter"), "html", null, true);
        echo " </a>
    <h1>Annonce</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><center>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "description", array()), "html", null, true);
        echo "</center></td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "dateDebut", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nombredechambre</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "nombreDeChambre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        ";
        // line 36
        if (($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "nombreDeChambre", array()) > 0)) {
            // line 37
            echo "            <li>
                <a href =\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_seloger", array("id" => $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se loger"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        // line 41
        echo "        ";
        if (($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "innitiateur", array()) == ($context["utilisateur"] ?? $this->getContext($context, "utilisateur")))) {
            // line 42
            echo "            <li>
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_edit", array("id" => $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
            echo "</a>
            </li>
            <li>
                ";
            // line 46
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
            echo "
                    <input type=\"submit\" value=\"Delete\">
                ";
            // line 48
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
            echo "
            </li>
            <li>
                <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
            echo "</a>
            </li>
       ";
        }
        // line 54
        echo "
    </ul>
";
        
        $__internal_3062f4ff4d3dc710744051123f42f799b715d9a3c6f4d05ba936c150d0cdf958->leave($__internal_3062f4ff4d3dc710744051123f42f799b715d9a3c6f4d05ba936c150d0cdf958_prof);

        
        $__internal_120ea040bbfb94ee2888ab015b8b7c848557cc93c27128b335502831f2471942->leave($__internal_120ea040bbfb94ee2888ab015b8b7c848557cc93c27128b335502831f2471942_prof);

    }

    public function getTemplateName()
    {
        return "annonces/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 54,  145 => 51,  139 => 48,  134 => 46,  126 => 43,  123 => 42,  120 => 41,  112 => 38,  109 => 37,  107 => 36,  98 => 30,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  61 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Annonce</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ annonce.id }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ annonce.adresse }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><center>{{ annonce.description }}</center></td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ annonce.prix }}</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>{% if annonce.dateDebut %}{{ annonce.dateDebut|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Nombredechambre</th>
                <td>{{ annonce.nombreDeChambre }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        {% if annonce.nombreDeChambre > 0%}
            <li>
                <a href =\"{{ path('annonces_seloger',{ 'id': annonce.id }) }}\">{{'se loger'|trans}}</a>
            </li>
        {%endif%}
        {% if annonce.innitiateur == utilisateur %}
            <li>
                <a href=\"{{ path('annonces_edit', { 'id': annonce.id }) }}\">{{'Edit'|trans}}</a>
            </li>
            <li>
                {{ form_start(delete_form) }}
                    <input type=\"submit\" value=\"Delete\">
                {{ form_end(delete_form) }}
            </li>
            <li>
                <a href=\"{{ path('annonces_index') }}\">{{'Back to the list'|trans}}</a>
            </li>
       {%endif%}

    </ul>
{% endblock %}
", "annonces/show.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\show.html.twig");
    }
}
