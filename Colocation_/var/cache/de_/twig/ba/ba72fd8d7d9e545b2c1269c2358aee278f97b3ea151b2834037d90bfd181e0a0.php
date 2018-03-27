<?php

/* annonces/show.html.twig */
class __TwigTemplate_d6c2bed01af753d83767828ea01a5b359cf54a6c5176fd744048d625c4e94fae extends Twig_Template
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
        $__internal_724145199f572e7df3974630fc5c6c9ef821226d22d52db57584d3c605fe189a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724145199f572e7df3974630fc5c6c9ef821226d22d52db57584d3c605fe189a->enter($__internal_724145199f572e7df3974630fc5c6c9ef821226d22d52db57584d3c605fe189a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/show.html.twig"));

        $__internal_18198e58c1991ac53a7a3e76d52fa6c8518283f77ec14785471cf441318805af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18198e58c1991ac53a7a3e76d52fa6c8518283f77ec14785471cf441318805af->enter($__internal_18198e58c1991ac53a7a3e76d52fa6c8518283f77ec14785471cf441318805af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_724145199f572e7df3974630fc5c6c9ef821226d22d52db57584d3c605fe189a->leave($__internal_724145199f572e7df3974630fc5c6c9ef821226d22d52db57584d3c605fe189a_prof);

        
        $__internal_18198e58c1991ac53a7a3e76d52fa6c8518283f77ec14785471cf441318805af->leave($__internal_18198e58c1991ac53a7a3e76d52fa6c8518283f77ec14785471cf441318805af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d84bdbff8a1be81d1f3636a4420e706da0243e901b25e75e7715f8ee1ffe4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d84bdbff8a1be81d1f3636a4420e706da0243e901b25e75e7715f8ee1ffe4a2->enter($__internal_7d84bdbff8a1be81d1f3636a4420e706da0243e901b25e75e7715f8ee1ffe4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc340be33945393878ef60ae4b5f3fe95fa8cf8362624e3d4ccab9c49e351936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc340be33945393878ef60ae4b5f3fe95fa8cf8362624e3d4ccab9c49e351936->enter($__internal_cc340be33945393878ef60ae4b5f3fe95fa8cf8362624e3d4ccab9c49e351936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "description", array()), "html", null, true);
        echo "</td>
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
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_edit", array("id" => $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_cc340be33945393878ef60ae4b5f3fe95fa8cf8362624e3d4ccab9c49e351936->leave($__internal_cc340be33945393878ef60ae4b5f3fe95fa8cf8362624e3d4ccab9c49e351936_prof);

        
        $__internal_7d84bdbff8a1be81d1f3636a4420e706da0243e901b25e75e7715f8ee1ffe4a2->leave($__internal_7d84bdbff8a1be81d1f3636a4420e706da0243e901b25e75e7715f8ee1ffe4a2_prof);

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
        return array (  129 => 45,  124 => 43,  116 => 40,  108 => 37,  98 => 30,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  61 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                <td>{{ annonce.description }}</td>
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
        <li>
            <a href=\"{{ path('annonces_index') }}\">{{'Back to the list'|trans}}</a>
        </li>
        <li>
            <a href=\"{{ path('annonces_edit', { 'id': annonce.id }) }}\">{{'Edit'|trans}}</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "annonces/show.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\show.html.twig");
    }
}
