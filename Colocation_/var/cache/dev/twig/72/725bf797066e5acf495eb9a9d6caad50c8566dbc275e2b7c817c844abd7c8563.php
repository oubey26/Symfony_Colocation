<?php

/* annonces/new.html.twig */
class __TwigTemplate_e9d9994cbb3a42034d75914eb7db2a67930a3e6d6c8cdad0b02917eb56cf9a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonces/new.html.twig", 1);
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
        $__internal_491e3fccbe176eb2379c3d3ca65da67b6ff76b496c7ab6561a0e307bcd9a11d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491e3fccbe176eb2379c3d3ca65da67b6ff76b496c7ab6561a0e307bcd9a11d0->enter($__internal_491e3fccbe176eb2379c3d3ca65da67b6ff76b496c7ab6561a0e307bcd9a11d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/new.html.twig"));

        $__internal_5dbb8328d625c423e582e2989bdd830bd22663b26d6f354b897e0f5c959121b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbb8328d625c423e582e2989bdd830bd22663b26d6f354b897e0f5c959121b1->enter($__internal_5dbb8328d625c423e582e2989bdd830bd22663b26d6f354b897e0f5c959121b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_491e3fccbe176eb2379c3d3ca65da67b6ff76b496c7ab6561a0e307bcd9a11d0->leave($__internal_491e3fccbe176eb2379c3d3ca65da67b6ff76b496c7ab6561a0e307bcd9a11d0_prof);

        
        $__internal_5dbb8328d625c423e582e2989bdd830bd22663b26d6f354b897e0f5c959121b1->leave($__internal_5dbb8328d625c423e582e2989bdd830bd22663b26d6f354b897e0f5c959121b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_941f0d85f1b3c7e7cd9c8c098135dbb5135a1488fc3aabf4ed67dc88fcb53b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941f0d85f1b3c7e7cd9c8c098135dbb5135a1488fc3aabf4ed67dc88fcb53b6b->enter($__internal_941f0d85f1b3c7e7cd9c8c098135dbb5135a1488fc3aabf4ed67dc88fcb53b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4a8c4ea4c8fbb396d8c982668e9f623ca87b287eb85b55a4440647df2579024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a8c4ea4c8fbb396d8c982668e9f623ca87b287eb85b55a4440647df2579024->enter($__internal_d4a8c4ea4c8fbb396d8c982668e9f623ca87b287eb85b55a4440647df2579024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se déconnecter"), "html", null, true);
        echo " </a>
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annonce creation"), "html", null, true);
        echo "</h1>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
    </ul>
";
        
        $__internal_d4a8c4ea4c8fbb396d8c982668e9f623ca87b287eb85b55a4440647df2579024->leave($__internal_d4a8c4ea4c8fbb396d8c982668e9f623ca87b287eb85b55a4440647df2579024_prof);

        
        $__internal_941f0d85f1b3c7e7cd9c8c098135dbb5135a1488fc3aabf4ed67dc88fcb53b6b->leave($__internal_941f0d85f1b3c7e7cd9c8c098135dbb5135a1488fc3aabf4ed67dc88fcb53b6b_prof);

    }

    public function getTemplateName()
    {
        return "annonces/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  69 => 9,  64 => 7,  60 => 6,  56 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{'Annonce creation'|trans}}</h1>
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('annonces_index') }}\">{{'Back to the list'|trans}}</a>
        </li>
    </ul>
{% endblock %}
", "annonces/new.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\new.html.twig");
    }
}
