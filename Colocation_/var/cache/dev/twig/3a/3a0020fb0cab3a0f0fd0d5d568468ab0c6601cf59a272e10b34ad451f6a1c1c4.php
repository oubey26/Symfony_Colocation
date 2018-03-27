<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_9d3cab8443f276471a1047f5cf9300218468507360f4a0cf6f0c530464918ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4f9cb18686efa7bf0288d2d53f67fcbab9ffcf81fda6474252701edcfd494ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f9cb18686efa7bf0288d2d53f67fcbab9ffcf81fda6474252701edcfd494ae->enter($__internal_a4f9cb18686efa7bf0288d2d53f67fcbab9ffcf81fda6474252701edcfd494ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3584e2d2093bd52d89e9ea35c3ed441eda901bc65797113b08c21a5728b414e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3584e2d2093bd52d89e9ea35c3ed441eda901bc65797113b08c21a5728b414e4->enter($__internal_3584e2d2093bd52d89e9ea35c3ed441eda901bc65797113b08c21a5728b414e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4f9cb18686efa7bf0288d2d53f67fcbab9ffcf81fda6474252701edcfd494ae->leave($__internal_a4f9cb18686efa7bf0288d2d53f67fcbab9ffcf81fda6474252701edcfd494ae_prof);

        
        $__internal_3584e2d2093bd52d89e9ea35c3ed441eda901bc65797113b08c21a5728b414e4->leave($__internal_3584e2d2093bd52d89e9ea35c3ed441eda901bc65797113b08c21a5728b414e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60e76846634cca9c43ac709ebb4b2b5c3196b1565802a79d36174dec8131d337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e76846634cca9c43ac709ebb4b2b5c3196b1565802a79d36174dec8131d337->enter($__internal_60e76846634cca9c43ac709ebb4b2b5c3196b1565802a79d36174dec8131d337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_42747f3aebfe631607a8aca2fed689c0b7732ddcea97598f69e326775e32f115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42747f3aebfe631607a8aca2fed689c0b7732ddcea97598f69e326775e32f115->enter($__internal_42747f3aebfe631607a8aca2fed689c0b7732ddcea97598f69e326775e32f115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_42747f3aebfe631607a8aca2fed689c0b7732ddcea97598f69e326775e32f115->leave($__internal_42747f3aebfe631607a8aca2fed689c0b7732ddcea97598f69e326775e32f115_prof);

        
        $__internal_60e76846634cca9c43ac709ebb4b2b5c3196b1565802a79d36174dec8131d337->leave($__internal_60e76846634cca9c43ac709ebb4b2b5c3196b1565802a79d36174dec8131d337_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0c77d9d6085d331ce83e1dc8e5df4a4cb543ef84bdf3688a402d3f2fb39e90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c77d9d6085d331ce83e1dc8e5df4a4cb543ef84bdf3688a402d3f2fb39e90d->enter($__internal_b0c77d9d6085d331ce83e1dc8e5df4a4cb543ef84bdf3688a402d3f2fb39e90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0ad49dead99e4e7884af6769feb03f4de9b3f6a54f321f669a46f9d87ec7b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ad49dead99e4e7884af6769feb03f4de9b3f6a54f321f669a46f9d87ec7b4a->enter($__internal_c0ad49dead99e4e7884af6769feb03f4de9b3f6a54f321f669a46f9d87ec7b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_c0ad49dead99e4e7884af6769feb03f4de9b3f6a54f321f669a46f9d87ec7b4a->leave($__internal_c0ad49dead99e4e7884af6769feb03f4de9b3f6a54f321f669a46f9d87ec7b4a_prof);

        
        $__internal_b0c77d9d6085d331ce83e1dc8e5df4a4cb543ef84bdf3688a402d3f2fb39e90d->leave($__internal_b0c77d9d6085d331ce83e1dc8e5df4a4cb543ef84bdf3688a402d3f2fb39e90d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
