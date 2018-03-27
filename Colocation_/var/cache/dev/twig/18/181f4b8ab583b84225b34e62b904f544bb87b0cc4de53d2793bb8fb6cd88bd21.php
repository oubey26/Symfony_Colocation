<?php

/* :annonces:show.html.twig */
class __TwigTemplate_8bb775ebbc1aaace3fd258e6a0fe8297e895de3c656331c0852412fa0a593145 extends Twig_Template
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
        $__internal_bea06c7e133ced65051e87a6d396ed56928bb68a95ee24aab79f23e1bca3596a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea06c7e133ced65051e87a6d396ed56928bb68a95ee24aab79f23e1bca3596a->enter($__internal_bea06c7e133ced65051e87a6d396ed56928bb68a95ee24aab79f23e1bca3596a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:show.html.twig"));

        $__internal_9e071847d9daa922dd45222fb9975dac46886b29a64a54b0bbc3157d405bc097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e071847d9daa922dd45222fb9975dac46886b29a64a54b0bbc3157d405bc097->enter($__internal_9e071847d9daa922dd45222fb9975dac46886b29a64a54b0bbc3157d405bc097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bea06c7e133ced65051e87a6d396ed56928bb68a95ee24aab79f23e1bca3596a->leave($__internal_bea06c7e133ced65051e87a6d396ed56928bb68a95ee24aab79f23e1bca3596a_prof);

        
        $__internal_9e071847d9daa922dd45222fb9975dac46886b29a64a54b0bbc3157d405bc097->leave($__internal_9e071847d9daa922dd45222fb9975dac46886b29a64a54b0bbc3157d405bc097_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b92b482ea2855d965a592324e8bafe2ea91a9de862394258418fbed91efd3846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92b482ea2855d965a592324e8bafe2ea91a9de862394258418fbed91efd3846->enter($__internal_b92b482ea2855d965a592324e8bafe2ea91a9de862394258418fbed91efd3846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59f31f8c5a429238ea8189e96f2c19d0fd443ee85adf352977dce4c6eae39f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f31f8c5a429238ea8189e96f2c19d0fd443ee85adf352977dce4c6eae39f61->enter($__internal_59f31f8c5a429238ea8189e96f2c19d0fd443ee85adf352977dce4c6eae39f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59f31f8c5a429238ea8189e96f2c19d0fd443ee85adf352977dce4c6eae39f61->leave($__internal_59f31f8c5a429238ea8189e96f2c19d0fd443ee85adf352977dce4c6eae39f61_prof);

        
        $__internal_b92b482ea2855d965a592324e8bafe2ea91a9de862394258418fbed91efd3846->leave($__internal_b92b482ea2855d965a592324e8bafe2ea91a9de862394258418fbed91efd3846_prof);

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
", ":annonces:show.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/annonces/show.html.twig");
    }
}
