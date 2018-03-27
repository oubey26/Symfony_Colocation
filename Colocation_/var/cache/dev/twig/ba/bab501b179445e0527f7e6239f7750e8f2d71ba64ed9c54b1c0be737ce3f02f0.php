<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_c503b9cd43b7484dfcc30aeb224f32727ef0da625dde0926229d686b60342d70 extends Twig_Template
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
        $__internal_3e6da735d4217b6b57f2a305799bb07bf9c7b392e78655fca4c559eb85263f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6da735d4217b6b57f2a305799bb07bf9c7b392e78655fca4c559eb85263f2c->enter($__internal_3e6da735d4217b6b57f2a305799bb07bf9c7b392e78655fca4c559eb85263f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_f949200418c956796f31892b3399ea545c051c3a4e4fd926ed5b7416399a6cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f949200418c956796f31892b3399ea545c051c3a4e4fd926ed5b7416399a6cbe->enter($__internal_f949200418c956796f31892b3399ea545c051c3a4e4fd926ed5b7416399a6cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e6da735d4217b6b57f2a305799bb07bf9c7b392e78655fca4c559eb85263f2c->leave($__internal_3e6da735d4217b6b57f2a305799bb07bf9c7b392e78655fca4c559eb85263f2c_prof);

        
        $__internal_f949200418c956796f31892b3399ea545c051c3a4e4fd926ed5b7416399a6cbe->leave($__internal_f949200418c956796f31892b3399ea545c051c3a4e4fd926ed5b7416399a6cbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_905734e69ab03d7c92513e8d492732a3dacb00b10c36f97d8d2798bbe6a38430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905734e69ab03d7c92513e8d492732a3dacb00b10c36f97d8d2798bbe6a38430->enter($__internal_905734e69ab03d7c92513e8d492732a3dacb00b10c36f97d8d2798bbe6a38430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a0529cef7ad4b6a70290153981808ec16af237ee69efd32c6ed8c5b851938c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0529cef7ad4b6a70290153981808ec16af237ee69efd32c6ed8c5b851938c4->enter($__internal_0a0529cef7ad4b6a70290153981808ec16af237ee69efd32c6ed8c5b851938c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0a0529cef7ad4b6a70290153981808ec16af237ee69efd32c6ed8c5b851938c4->leave($__internal_0a0529cef7ad4b6a70290153981808ec16af237ee69efd32c6ed8c5b851938c4_prof);

        
        $__internal_905734e69ab03d7c92513e8d492732a3dacb00b10c36f97d8d2798bbe6a38430->leave($__internal_905734e69ab03d7c92513e8d492732a3dacb00b10c36f97d8d2798bbe6a38430_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_69cd313a6a4f1c85d7dc6a54bb5fb1f51a1f9ca811ab6b3c9228647d0df9b80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cd313a6a4f1c85d7dc6a54bb5fb1f51a1f9ca811ab6b3c9228647d0df9b80f->enter($__internal_69cd313a6a4f1c85d7dc6a54bb5fb1f51a1f9ca811ab6b3c9228647d0df9b80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cff42314d5d956d4b18f0dd8210bef674fa6da84f8dac7238a21f83c75ac9a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff42314d5d956d4b18f0dd8210bef674fa6da84f8dac7238a21f83c75ac9a85->enter($__internal_cff42314d5d956d4b18f0dd8210bef674fa6da84f8dac7238a21f83c75ac9a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cff42314d5d956d4b18f0dd8210bef674fa6da84f8dac7238a21f83c75ac9a85->leave($__internal_cff42314d5d956d4b18f0dd8210bef674fa6da84f8dac7238a21f83c75ac9a85_prof);

        
        $__internal_69cd313a6a4f1c85d7dc6a54bb5fb1f51a1f9ca811ab6b3c9228647d0df9b80f->leave($__internal_69cd313a6a4f1c85d7dc6a54bb5fb1f51a1f9ca811ab6b3c9228647d0df9b80f_prof);

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
