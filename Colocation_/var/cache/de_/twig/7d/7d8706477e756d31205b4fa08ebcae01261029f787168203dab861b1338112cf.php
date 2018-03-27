<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_056189ed346ebb6e462f5f59bb676cf3e0fce8cfbee3f7dd8c82df71825f01de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cb459cfbeb095952ef8a1a309a784b65ac1d345978429a5c7dd1f471e62711a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb459cfbeb095952ef8a1a309a784b65ac1d345978429a5c7dd1f471e62711a->enter($__internal_7cb459cfbeb095952ef8a1a309a784b65ac1d345978429a5c7dd1f471e62711a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b390bbf1741fcdaad750018c3b011e13897a7b2fd018f0b0ecaddf48aa05d578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b390bbf1741fcdaad750018c3b011e13897a7b2fd018f0b0ecaddf48aa05d578->enter($__internal_b390bbf1741fcdaad750018c3b011e13897a7b2fd018f0b0ecaddf48aa05d578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb459cfbeb095952ef8a1a309a784b65ac1d345978429a5c7dd1f471e62711a->leave($__internal_7cb459cfbeb095952ef8a1a309a784b65ac1d345978429a5c7dd1f471e62711a_prof);

        
        $__internal_b390bbf1741fcdaad750018c3b011e13897a7b2fd018f0b0ecaddf48aa05d578->leave($__internal_b390bbf1741fcdaad750018c3b011e13897a7b2fd018f0b0ecaddf48aa05d578_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7914ed6c0138eec4367710ca8c0ac440bc1bf0891896e0e4993084ce27350ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7914ed6c0138eec4367710ca8c0ac440bc1bf0891896e0e4993084ce27350ef->enter($__internal_e7914ed6c0138eec4367710ca8c0ac440bc1bf0891896e0e4993084ce27350ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_358aeddd4c3d730e1f954956c6f9025f29e6992d226acf0c0d9ec990931e6691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358aeddd4c3d730e1f954956c6f9025f29e6992d226acf0c0d9ec990931e6691->enter($__internal_358aeddd4c3d730e1f954956c6f9025f29e6992d226acf0c0d9ec990931e6691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_358aeddd4c3d730e1f954956c6f9025f29e6992d226acf0c0d9ec990931e6691->leave($__internal_358aeddd4c3d730e1f954956c6f9025f29e6992d226acf0c0d9ec990931e6691_prof);

        
        $__internal_e7914ed6c0138eec4367710ca8c0ac440bc1bf0891896e0e4993084ce27350ef->leave($__internal_e7914ed6c0138eec4367710ca8c0ac440bc1bf0891896e0e4993084ce27350ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_405c29a119ec6a232d21c9c358ec00504babebaec8faebaf3cdfebf369383374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405c29a119ec6a232d21c9c358ec00504babebaec8faebaf3cdfebf369383374->enter($__internal_405c29a119ec6a232d21c9c358ec00504babebaec8faebaf3cdfebf369383374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fd9f340a7aa447f603e012ec34d3205eb8ee95b146f3794bb6bc13ef245b614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9f340a7aa447f603e012ec34d3205eb8ee95b146f3794bb6bc13ef245b614e->enter($__internal_fd9f340a7aa447f603e012ec34d3205eb8ee95b146f3794bb6bc13ef245b614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fd9f340a7aa447f603e012ec34d3205eb8ee95b146f3794bb6bc13ef245b614e->leave($__internal_fd9f340a7aa447f603e012ec34d3205eb8ee95b146f3794bb6bc13ef245b614e_prof);

        
        $__internal_405c29a119ec6a232d21c9c358ec00504babebaec8faebaf3cdfebf369383374->leave($__internal_405c29a119ec6a232d21c9c358ec00504babebaec8faebaf3cdfebf369383374_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f42f35e9f09208fa41527df0e761aa03e58b31f770afb63fbff281bd0d9d5309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42f35e9f09208fa41527df0e761aa03e58b31f770afb63fbff281bd0d9d5309->enter($__internal_f42f35e9f09208fa41527df0e761aa03e58b31f770afb63fbff281bd0d9d5309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_227fce6193881f47166d37af3fbddf27733abb25d2ade9b36360427e59df2b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227fce6193881f47166d37af3fbddf27733abb25d2ade9b36360427e59df2b37->enter($__internal_227fce6193881f47166d37af3fbddf27733abb25d2ade9b36360427e59df2b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_227fce6193881f47166d37af3fbddf27733abb25d2ade9b36360427e59df2b37->leave($__internal_227fce6193881f47166d37af3fbddf27733abb25d2ade9b36360427e59df2b37_prof);

        
        $__internal_f42f35e9f09208fa41527df0e761aa03e58b31f770afb63fbff281bd0d9d5309->leave($__internal_f42f35e9f09208fa41527df0e761aa03e58b31f770afb63fbff281bd0d9d5309_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
