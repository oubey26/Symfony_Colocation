<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a504f10d7155ad216d73707c2a71338d80f19352a2bb2b9aae5898a9b3000511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_a95a4ca69337edcd2f5f58d66e111799424a02c143c438716ac671704baebf00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95a4ca69337edcd2f5f58d66e111799424a02c143c438716ac671704baebf00->enter($__internal_a95a4ca69337edcd2f5f58d66e111799424a02c143c438716ac671704baebf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_19384546f16efe4cf8c0668f31f509bd4dd11e609f0606d8aeb64d387e12fed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19384546f16efe4cf8c0668f31f509bd4dd11e609f0606d8aeb64d387e12fed7->enter($__internal_19384546f16efe4cf8c0668f31f509bd4dd11e609f0606d8aeb64d387e12fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a95a4ca69337edcd2f5f58d66e111799424a02c143c438716ac671704baebf00->leave($__internal_a95a4ca69337edcd2f5f58d66e111799424a02c143c438716ac671704baebf00_prof);

        
        $__internal_19384546f16efe4cf8c0668f31f509bd4dd11e609f0606d8aeb64d387e12fed7->leave($__internal_19384546f16efe4cf8c0668f31f509bd4dd11e609f0606d8aeb64d387e12fed7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9414972b503e16e3f4a00849e45ceded3793513d7087a5e93f73d223ac240447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9414972b503e16e3f4a00849e45ceded3793513d7087a5e93f73d223ac240447->enter($__internal_9414972b503e16e3f4a00849e45ceded3793513d7087a5e93f73d223ac240447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e61984c7d28958fdb6281c399d919770c9a526b2b4cfd72410545e61c87d0bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61984c7d28958fdb6281c399d919770c9a526b2b4cfd72410545e61c87d0bbe->enter($__internal_e61984c7d28958fdb6281c399d919770c9a526b2b4cfd72410545e61c87d0bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e61984c7d28958fdb6281c399d919770c9a526b2b4cfd72410545e61c87d0bbe->leave($__internal_e61984c7d28958fdb6281c399d919770c9a526b2b4cfd72410545e61c87d0bbe_prof);

        
        $__internal_9414972b503e16e3f4a00849e45ceded3793513d7087a5e93f73d223ac240447->leave($__internal_9414972b503e16e3f4a00849e45ceded3793513d7087a5e93f73d223ac240447_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b158e49db1831beb4328481045f3e33c11fcc859c75222fe134e18b3eb7c177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b158e49db1831beb4328481045f3e33c11fcc859c75222fe134e18b3eb7c177->enter($__internal_7b158e49db1831beb4328481045f3e33c11fcc859c75222fe134e18b3eb7c177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c1bddb5ae0c6920f7bb3d0bef0751e0d25d442f207d7de07e6f931980c828cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1bddb5ae0c6920f7bb3d0bef0751e0d25d442f207d7de07e6f931980c828cc->enter($__internal_7c1bddb5ae0c6920f7bb3d0bef0751e0d25d442f207d7de07e6f931980c828cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c1bddb5ae0c6920f7bb3d0bef0751e0d25d442f207d7de07e6f931980c828cc->leave($__internal_7c1bddb5ae0c6920f7bb3d0bef0751e0d25d442f207d7de07e6f931980c828cc_prof);

        
        $__internal_7b158e49db1831beb4328481045f3e33c11fcc859c75222fe134e18b3eb7c177->leave($__internal_7b158e49db1831beb4328481045f3e33c11fcc859c75222fe134e18b3eb7c177_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
