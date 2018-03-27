<?php

/* annonces/show.html.twig */
class __TwigTemplate_2444cc9652eefddbc11bfb818cfe9cbef0c99fae2482127fc1c66cfd4cf29485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "annonces/show.html.twig", 1);
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
        $__internal_56a2f8cf3060a2aaab5e2e7d59f43fcf3bf880c9483849160277f17c4459ebfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a2f8cf3060a2aaab5e2e7d59f43fcf3bf880c9483849160277f17c4459ebfb->enter($__internal_56a2f8cf3060a2aaab5e2e7d59f43fcf3bf880c9483849160277f17c4459ebfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/show.html.twig"));

        $__internal_f2142f405ad0b1e316f49ecaf768301bed5aad7e1ef52efcf2a4b50aacb4fb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2142f405ad0b1e316f49ecaf768301bed5aad7e1ef52efcf2a4b50aacb4fb93->enter($__internal_f2142f405ad0b1e316f49ecaf768301bed5aad7e1ef52efcf2a4b50aacb4fb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56a2f8cf3060a2aaab5e2e7d59f43fcf3bf880c9483849160277f17c4459ebfb->leave($__internal_56a2f8cf3060a2aaab5e2e7d59f43fcf3bf880c9483849160277f17c4459ebfb_prof);

        
        $__internal_f2142f405ad0b1e316f49ecaf768301bed5aad7e1ef52efcf2a4b50aacb4fb93->leave($__internal_f2142f405ad0b1e316f49ecaf768301bed5aad7e1ef52efcf2a4b50aacb4fb93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb528e789086cd06a0ef28b787d4c404cfd844388a3420848bf8266532cf044b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb528e789086cd06a0ef28b787d4c404cfd844388a3420848bf8266532cf044b->enter($__internal_bb528e789086cd06a0ef28b787d4c404cfd844388a3420848bf8266532cf044b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_134273cca1a4410f5cc8885f2a5da6727a6912627ddf019e9b421db14c382add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134273cca1a4410f5cc8885f2a5da6727a6912627ddf019e9b421db14c382add->enter($__internal_134273cca1a4410f5cc8885f2a5da6727a6912627ddf019e9b421db14c382add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><center>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "description", array()), "html", null, true);
        echo "</center></td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 25
        if ($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateDebut", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nombredechambre</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "nombreDeChambre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <table>
        <tr>
            ";
        // line 36
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "nombreDeChambre", array()) > 0)) {
            // line 37
            echo "                <td>
                    <a href =\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_seloger", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se loger"), "html", null, true);
            echo "</a>
                </td>
            ";
        }
        // line 41
        echo "        
            ";
        // line 42
        if ((($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "innitiateur", array()) == (isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur"))) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 43
            echo "                <td>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_edit", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
            echo "</a>
                </td>
                <td>
                    ";
            // line 47
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                        <input type=\"submit\" value=\"Delete\">
                    ";
            // line 49
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
                </td>
            ";
        }
        // line 52
        echo "        </tr>
        <tr>
            <td>
                    <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a>
            </td>
        </tr>
    </table>

";
        
        $__internal_134273cca1a4410f5cc8885f2a5da6727a6912627ddf019e9b421db14c382add->leave($__internal_134273cca1a4410f5cc8885f2a5da6727a6912627ddf019e9b421db14c382add_prof);

        
        $__internal_bb528e789086cd06a0ef28b787d4c404cfd844388a3420848bf8266532cf044b->leave($__internal_bb528e789086cd06a0ef28b787d4c404cfd844388a3420848bf8266532cf044b_prof);

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
        return array (  148 => 55,  143 => 52,  137 => 49,  132 => 47,  124 => 44,  121 => 43,  119 => 42,  116 => 41,  108 => 38,  105 => 37,  103 => 36,  93 => 29,  84 => 25,  77 => 21,  70 => 17,  63 => 13,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

    <table>
        <tr>
            {% if annonce.nombreDeChambre > 0%}
                <td>
                    <a href =\"{{ path('annonces_seloger',{ 'id': annonce.id }) }}\">{{'se loger'|trans}}</a>
                </td>
            {%endif%}
        
            {% if annonce.innitiateur == utilisateur or is_granted('ROLE_ADMIN') %}
                <td>
                    <a href=\"{{ path('annonces_edit', { 'id': annonce.id }) }}\">{{'Edit'|trans}}</a>
                </td>
                <td>
                    {{ form_start(delete_form) }}
                        <input type=\"submit\" value=\"Delete\">
                    {{ form_end(delete_form) }}
                </td>
            {%endif%}
        </tr>
        <tr>
            <td>
                    <a href=\"{{ path('annonces_index') }}\">{{'Back to the list'|trans}}</a>
            </td>
        </tr>
    </table>

{% endblock %}
", "annonces/show.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\show.html.twig");
    }
}
