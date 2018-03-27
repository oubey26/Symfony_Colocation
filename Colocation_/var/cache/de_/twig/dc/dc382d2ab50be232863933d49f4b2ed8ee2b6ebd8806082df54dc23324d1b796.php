<?php

/* :annonces:show.html.twig */
class __TwigTemplate_512014422a3713f74a6bb29b1581f1863c25cafb7d59d990c9524c1b5c21cc26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":annonces:show.html.twig", 1);
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
        $__internal_97e347faf2996f532753731c22de8947e8b95c3895a7137ede91ba1c0c5f98fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e347faf2996f532753731c22de8947e8b95c3895a7137ede91ba1c0c5f98fc->enter($__internal_97e347faf2996f532753731c22de8947e8b95c3895a7137ede91ba1c0c5f98fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:show.html.twig"));

        $__internal_0bb5d20b6ba3f870ab3e7f832547523b034671d809243ad77b336d2f44971ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb5d20b6ba3f870ab3e7f832547523b034671d809243ad77b336d2f44971ae8->enter($__internal_0bb5d20b6ba3f870ab3e7f832547523b034671d809243ad77b336d2f44971ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97e347faf2996f532753731c22de8947e8b95c3895a7137ede91ba1c0c5f98fc->leave($__internal_97e347faf2996f532753731c22de8947e8b95c3895a7137ede91ba1c0c5f98fc_prof);

        
        $__internal_0bb5d20b6ba3f870ab3e7f832547523b034671d809243ad77b336d2f44971ae8->leave($__internal_0bb5d20b6ba3f870ab3e7f832547523b034671d809243ad77b336d2f44971ae8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_490f0c637fa4c8c8f4bce6877adea2f66c3a49ce6e4245fe4526d18d3681e8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490f0c637fa4c8c8f4bce6877adea2f66c3a49ce6e4245fe4526d18d3681e8d2->enter($__internal_490f0c637fa4c8c8f4bce6877adea2f66c3a49ce6e4245fe4526d18d3681e8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c33a6c3246b229515c9bcd13544723084bec3251d96fd610b4a64a51c8d328c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c33a6c3246b229515c9bcd13544723084bec3251d96fd610b4a64a51c8d328c->enter($__internal_1c33a6c3246b229515c9bcd13544723084bec3251d96fd610b4a64a51c8d328c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c33a6c3246b229515c9bcd13544723084bec3251d96fd610b4a64a51c8d328c->leave($__internal_1c33a6c3246b229515c9bcd13544723084bec3251d96fd610b4a64a51c8d328c_prof);

        
        $__internal_490f0c637fa4c8c8f4bce6877adea2f66c3a49ce6e4245fe4526d18d3681e8d2->leave($__internal_490f0c637fa4c8c8f4bce6877adea2f66c3a49ce6e4245fe4526d18d3681e8d2_prof);

    }

    public function getTemplateName()
    {
        return ":annonces:show.html.twig";
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
", ":annonces:show.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/annonces/show.html.twig");
    }
}
