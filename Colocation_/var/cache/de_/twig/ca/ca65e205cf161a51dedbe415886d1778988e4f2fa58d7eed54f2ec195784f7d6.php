<?php

/* :annonces:index.html.twig */
class __TwigTemplate_dd0c96732485cfc247e66154d8182cdc64ce9cc058b5feae1ec9a9d10e0964af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":annonces:index.html.twig", 1);
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
        $__internal_80b1a1add24a43c728fe0c84339d3b026a6dc5448a83e70b044e5abcec40ded9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b1a1add24a43c728fe0c84339d3b026a6dc5448a83e70b044e5abcec40ded9->enter($__internal_80b1a1add24a43c728fe0c84339d3b026a6dc5448a83e70b044e5abcec40ded9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:index.html.twig"));

        $__internal_d66ad7f5dea3491a079b6ad599f5020549a82617fc2fed4f01979d334c39cbe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66ad7f5dea3491a079b6ad599f5020549a82617fc2fed4f01979d334c39cbe8->enter($__internal_d66ad7f5dea3491a079b6ad599f5020549a82617fc2fed4f01979d334c39cbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b1a1add24a43c728fe0c84339d3b026a6dc5448a83e70b044e5abcec40ded9->leave($__internal_80b1a1add24a43c728fe0c84339d3b026a6dc5448a83e70b044e5abcec40ded9_prof);

        
        $__internal_d66ad7f5dea3491a079b6ad599f5020549a82617fc2fed4f01979d334c39cbe8->leave($__internal_d66ad7f5dea3491a079b6ad599f5020549a82617fc2fed4f01979d334c39cbe8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e8cb3799d5fc7658f3adadec6d1ca290037305a51fd77cdd18c94f0aa94766f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8cb3799d5fc7658f3adadec6d1ca290037305a51fd77cdd18c94f0aa94766f->enter($__internal_6e8cb3799d5fc7658f3adadec6d1ca290037305a51fd77cdd18c94f0aa94766f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2aa05ee745132fdee6a6d5f4d43d6939fc14208bb004a044265b7a274d55afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2aa05ee745132fdee6a6d5f4d43d6939fc14208bb004a044265b7a274d55afc->enter($__internal_b2aa05ee745132fdee6a6d5f4d43d6939fc14208bb004a044265b7a274d55afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Adresse</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Datedebut</th>
                <th>Nombredechambre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
            echo "</a></td>
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
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["annonce"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nombreDeChambre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show"), "html", null, true);
            echo "</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_edit", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new annonce"), "html", null, true);
        echo "</a>
        </li>
    </ul>
";
        
        $__internal_b2aa05ee745132fdee6a6d5f4d43d6939fc14208bb004a044265b7a274d55afc->leave($__internal_b2aa05ee745132fdee6a6d5f4d43d6939fc14208bb004a044265b7a274d55afc_prof);

        
        $__internal_6e8cb3799d5fc7658f3adadec6d1ca290037305a51fd77cdd18c94f0aa94766f->leave($__internal_6e8cb3799d5fc7658f3adadec6d1ca290037305a51fd77cdd18c94f0aa94766f_prof);

    }

    public function getTemplateName()
    {
        return ":annonces:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  134 => 40,  120 => 34,  112 => 31,  105 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  81 => 22,  78 => 21,  74 => 20,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Adresse</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Datedebut</th>
                <th>Nombredechambre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for annonce in annonces %}
            <tr>
                <td><a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\">{{ annonce.id }}</a></td>
                <td>{{ annonce.adresse }}</td>
                <td>{{ annonce.description }}</td>
                <td>{{ annonce.prix }}</td>
                <td>{% if annonce.dateDebut %}{{ annonce.dateDebut|date('Y-m-d') }}{% endif %}</td>
                <td>{{ annonce.nombreDeChambre }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\">{{'show'|trans}}</a>
                        </li>
                        <li>
                            <a href=\"{{ path('annonces_edit', { 'id': annonce.id }) }}\">{{'edit'|trans}}</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('annonces_new') }}\">{{'Create a new annonce'|trans}}</a>
        </li>
    </ul>
{% endblock %}
", ":annonces:index.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/annonces/index.html.twig");
    }
}
