<?php

/* :annonces:edit.html.twig */
class __TwigTemplate_a0f94e6a809bd5bd82e2d1e206c5a9b24b367f23a7bff6a4c75e84c014fe905b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":annonces:edit.html.twig", 1);
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
        $__internal_4de49961f8f40a6cb389b2294dc8c037be4fa604040ef48bff86e5132e13a640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de49961f8f40a6cb389b2294dc8c037be4fa604040ef48bff86e5132e13a640->enter($__internal_4de49961f8f40a6cb389b2294dc8c037be4fa604040ef48bff86e5132e13a640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:edit.html.twig"));

        $__internal_4901c99d8e5efd8630ae29a3df0fe44c18aa0550c21e44e6c7d9ef3fa4f09e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4901c99d8e5efd8630ae29a3df0fe44c18aa0550c21e44e6c7d9ef3fa4f09e1d->enter($__internal_4901c99d8e5efd8630ae29a3df0fe44c18aa0550c21e44e6c7d9ef3fa4f09e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4de49961f8f40a6cb389b2294dc8c037be4fa604040ef48bff86e5132e13a640->leave($__internal_4de49961f8f40a6cb389b2294dc8c037be4fa604040ef48bff86e5132e13a640_prof);

        
        $__internal_4901c99d8e5efd8630ae29a3df0fe44c18aa0550c21e44e6c7d9ef3fa4f09e1d->leave($__internal_4901c99d8e5efd8630ae29a3df0fe44c18aa0550c21e44e6c7d9ef3fa4f09e1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55b4f1b4c357ac2f01e167e194a92f84ccf43c1320ded79ecb9521b3c34a68b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b4f1b4c357ac2f01e167e194a92f84ccf43c1320ded79ecb9521b3c34a68b1->enter($__internal_55b4f1b4c357ac2f01e167e194a92f84ccf43c1320ded79ecb9521b3c34a68b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b85b6173f4ef17647b7f3b657a0b933f2730861e7ae04d3c7462cb6dd51a5642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85b6173f4ef17647b7f3b657a0b933f2730861e7ae04d3c7462cb6dd51a5642->enter($__internal_b85b6173f4ef17647b7f3b657a0b933f2730861e7ae04d3c7462cb6dd51a5642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annonce_edit"), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b85b6173f4ef17647b7f3b657a0b933f2730861e7ae04d3c7462cb6dd51a5642->leave($__internal_b85b6173f4ef17647b7f3b657a0b933f2730861e7ae04d3c7462cb6dd51a5642_prof);

        
        $__internal_55b4f1b4c357ac2f01e167e194a92f84ccf43c1320ded79ecb9521b3c34a68b1->leave($__internal_55b4f1b4c357ac2f01e167e194a92f84ccf43c1320ded79ecb9521b3c34a68b1_prof);

    }

    public function getTemplateName()
    {
        return ":annonces:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  79 => 16,  71 => 13,  64 => 9,  59 => 7,  55 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{'Annonce_edit'|trans}}</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('annonces_index') }}\">{{'Back to the list'|trans}}</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":annonces:edit.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/annonces/edit.html.twig");
    }
}
