<?php

/* annonces/edit.html.twig */
class __TwigTemplate_f67588ae3c24cddbcb661ee213b05872f73eac72732f1e35a14e398181960d3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonces/edit.html.twig", 1);
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
        $__internal_5252651d5eb1786d38cd11c48a4bd09dea40fbd7c84876ea49b74c560ef0768e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5252651d5eb1786d38cd11c48a4bd09dea40fbd7c84876ea49b74c560ef0768e->enter($__internal_5252651d5eb1786d38cd11c48a4bd09dea40fbd7c84876ea49b74c560ef0768e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/edit.html.twig"));

        $__internal_f94fe2c1d6100758be152a320028dac8741ddf9a62e65d9f2a70de2262878179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94fe2c1d6100758be152a320028dac8741ddf9a62e65d9f2a70de2262878179->enter($__internal_f94fe2c1d6100758be152a320028dac8741ddf9a62e65d9f2a70de2262878179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5252651d5eb1786d38cd11c48a4bd09dea40fbd7c84876ea49b74c560ef0768e->leave($__internal_5252651d5eb1786d38cd11c48a4bd09dea40fbd7c84876ea49b74c560ef0768e_prof);

        
        $__internal_f94fe2c1d6100758be152a320028dac8741ddf9a62e65d9f2a70de2262878179->leave($__internal_f94fe2c1d6100758be152a320028dac8741ddf9a62e65d9f2a70de2262878179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_abddbc6a88ee59c3cb18d33eb266eb0159e5d1528c3761ca1181d7fdcf5af8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abddbc6a88ee59c3cb18d33eb266eb0159e5d1528c3761ca1181d7fdcf5af8e2->enter($__internal_abddbc6a88ee59c3cb18d33eb266eb0159e5d1528c3761ca1181d7fdcf5af8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b100960a447de0d0b15163bd6c9b0920dddd01f1afe3d2258204eaa0f441e321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b100960a447de0d0b15163bd6c9b0920dddd01f1afe3d2258204eaa0f441e321->enter($__internal_b100960a447de0d0b15163bd6c9b0920dddd01f1afe3d2258204eaa0f441e321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annonce edit"), "html", null, true);
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
        
        $__internal_b100960a447de0d0b15163bd6c9b0920dddd01f1afe3d2258204eaa0f441e321->leave($__internal_b100960a447de0d0b15163bd6c9b0920dddd01f1afe3d2258204eaa0f441e321_prof);

        
        $__internal_abddbc6a88ee59c3cb18d33eb266eb0159e5d1528c3761ca1181d7fdcf5af8e2->leave($__internal_abddbc6a88ee59c3cb18d33eb266eb0159e5d1528c3761ca1181d7fdcf5af8e2_prof);

    }

    public function getTemplateName()
    {
        return "annonces/edit.html.twig";
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
    <h1>{{'Annonce edit'|trans}}</h1>

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
", "annonces/edit.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\edit.html.twig");
    }
}
