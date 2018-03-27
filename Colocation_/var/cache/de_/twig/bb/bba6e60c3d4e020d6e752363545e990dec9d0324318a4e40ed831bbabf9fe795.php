<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_79952e741596a37f9911a316e54792f124b54db39f7c950c2b50c960a02252ca extends Twig_Template
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
        $__internal_bc8911abe33dc5932e76c944706d22a4d5658ec4960dfbe54f386bcc6a0126d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8911abe33dc5932e76c944706d22a4d5658ec4960dfbe54f386bcc6a0126d8->enter($__internal_bc8911abe33dc5932e76c944706d22a4d5658ec4960dfbe54f386bcc6a0126d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_edefba723d026e2aa753b5ebc602461467e921cd6b61dff9c4c82f522d9874ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edefba723d026e2aa753b5ebc602461467e921cd6b61dff9c4c82f522d9874ac->enter($__internal_edefba723d026e2aa753b5ebc602461467e921cd6b61dff9c4c82f522d9874ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8911abe33dc5932e76c944706d22a4d5658ec4960dfbe54f386bcc6a0126d8->leave($__internal_bc8911abe33dc5932e76c944706d22a4d5658ec4960dfbe54f386bcc6a0126d8_prof);

        
        $__internal_edefba723d026e2aa753b5ebc602461467e921cd6b61dff9c4c82f522d9874ac->leave($__internal_edefba723d026e2aa753b5ebc602461467e921cd6b61dff9c4c82f522d9874ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4549ba22b3710a7a6ee806582ce1ae6c7fd0d71aad2cd41cc3b11249a05a7c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4549ba22b3710a7a6ee806582ce1ae6c7fd0d71aad2cd41cc3b11249a05a7c8e->enter($__internal_4549ba22b3710a7a6ee806582ce1ae6c7fd0d71aad2cd41cc3b11249a05a7c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_40ec90c2966a9eb711337c6a3578c50d6e5b3589db061ef474f5a6dcacaea25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ec90c2966a9eb711337c6a3578c50d6e5b3589db061ef474f5a6dcacaea25f->enter($__internal_40ec90c2966a9eb711337c6a3578c50d6e5b3589db061ef474f5a6dcacaea25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_40ec90c2966a9eb711337c6a3578c50d6e5b3589db061ef474f5a6dcacaea25f->leave($__internal_40ec90c2966a9eb711337c6a3578c50d6e5b3589db061ef474f5a6dcacaea25f_prof);

        
        $__internal_4549ba22b3710a7a6ee806582ce1ae6c7fd0d71aad2cd41cc3b11249a05a7c8e->leave($__internal_4549ba22b3710a7a6ee806582ce1ae6c7fd0d71aad2cd41cc3b11249a05a7c8e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_36f82fd16fa3e012991f84ef626604897d2dca87952c5572dc2eb94ed48c8cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f82fd16fa3e012991f84ef626604897d2dca87952c5572dc2eb94ed48c8cc0->enter($__internal_36f82fd16fa3e012991f84ef626604897d2dca87952c5572dc2eb94ed48c8cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d6cc4c227a9a1130470364be46bba969b84e20d84c736be3d2687fb8945ea3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6cc4c227a9a1130470364be46bba969b84e20d84c736be3d2687fb8945ea3a->enter($__internal_3d6cc4c227a9a1130470364be46bba969b84e20d84c736be3d2687fb8945ea3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d6cc4c227a9a1130470364be46bba969b84e20d84c736be3d2687fb8945ea3a->leave($__internal_3d6cc4c227a9a1130470364be46bba969b84e20d84c736be3d2687fb8945ea3a_prof);

        
        $__internal_36f82fd16fa3e012991f84ef626604897d2dca87952c5572dc2eb94ed48c8cc0->leave($__internal_36f82fd16fa3e012991f84ef626604897d2dca87952c5572dc2eb94ed48c8cc0_prof);

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
