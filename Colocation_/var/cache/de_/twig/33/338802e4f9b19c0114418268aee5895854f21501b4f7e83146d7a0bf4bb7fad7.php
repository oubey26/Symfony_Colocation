<?php

/* annonces/index.html.twig */
class __TwigTemplate_53f2474448f92979977cbd471b7c7616f7b2cb76d10335969c83e5077ef41854 extends Twig_Template
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
        $__internal_83c5281af9123b2dc6a6ee91f35a5b7a366222add1c085424b9ab0195c06c44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c5281af9123b2dc6a6ee91f35a5b7a366222add1c085424b9ab0195c06c44b->enter($__internal_83c5281af9123b2dc6a6ee91f35a5b7a366222add1c085424b9ab0195c06c44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/index.html.twig"));

        $__internal_9ec0e04b4cc217061549aada26c1e58e1b3183d1025a08a47996e1dd59e95366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec0e04b4cc217061549aada26c1e58e1b3183d1025a08a47996e1dd59e95366->enter($__internal_9ec0e04b4cc217061549aada26c1e58e1b3183d1025a08a47996e1dd59e95366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c5281af9123b2dc6a6ee91f35a5b7a366222add1c085424b9ab0195c06c44b->leave($__internal_83c5281af9123b2dc6a6ee91f35a5b7a366222add1c085424b9ab0195c06c44b_prof);

        
        $__internal_9ec0e04b4cc217061549aada26c1e58e1b3183d1025a08a47996e1dd59e95366->leave($__internal_9ec0e04b4cc217061549aada26c1e58e1b3183d1025a08a47996e1dd59e95366_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7013b01071f5484bfb4fc16130c93c8687dd0901c34684398f8732ca245cd4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7013b01071f5484bfb4fc16130c93c8687dd0901c34684398f8732ca245cd4d1->enter($__internal_7013b01071f5484bfb4fc16130c93c8687dd0901c34684398f8732ca245cd4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97069c48ab053f6c8ead46613364e256e77a086b4a35e0f403dff089c7df5a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97069c48ab053f6c8ead46613364e256e77a086b4a35e0f403dff089c7df5a77->enter($__internal_97069c48ab053f6c8ead46613364e256e77a086b4a35e0f403dff089c7df5a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97069c48ab053f6c8ead46613364e256e77a086b4a35e0f403dff089c7df5a77->leave($__internal_97069c48ab053f6c8ead46613364e256e77a086b4a35e0f403dff089c7df5a77_prof);

        
        $__internal_7013b01071f5484bfb4fc16130c93c8687dd0901c34684398f8732ca245cd4d1->leave($__internal_7013b01071f5484bfb4fc16130c93c8687dd0901c34684398f8732ca245cd4d1_prof);

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
", "annonces/index.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\index.html.twig");
    }
}
