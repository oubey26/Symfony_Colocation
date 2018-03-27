<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_05aa5c0357428a571c2258b9be6fb7d957d6f8a0d234eb96147d0d851539339b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_12266e0b0f6d137c60d833987e4d53e1b2a8fbf2bbc0e9275988d0bff936e06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12266e0b0f6d137c60d833987e4d53e1b2a8fbf2bbc0e9275988d0bff936e06b->enter($__internal_12266e0b0f6d137c60d833987e4d53e1b2a8fbf2bbc0e9275988d0bff936e06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_31a77517fd06888df9eab8352fa8a29afd28ae77011b6e14e507a0a0cddd0281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a77517fd06888df9eab8352fa8a29afd28ae77011b6e14e507a0a0cddd0281->enter($__internal_31a77517fd06888df9eab8352fa8a29afd28ae77011b6e14e507a0a0cddd0281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12266e0b0f6d137c60d833987e4d53e1b2a8fbf2bbc0e9275988d0bff936e06b->leave($__internal_12266e0b0f6d137c60d833987e4d53e1b2a8fbf2bbc0e9275988d0bff936e06b_prof);

        
        $__internal_31a77517fd06888df9eab8352fa8a29afd28ae77011b6e14e507a0a0cddd0281->leave($__internal_31a77517fd06888df9eab8352fa8a29afd28ae77011b6e14e507a0a0cddd0281_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5b592b68b0144b60752532df5c31e21e88ed86db801cbd9258fc196805755c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b592b68b0144b60752532df5c31e21e88ed86db801cbd9258fc196805755c9->enter($__internal_a5b592b68b0144b60752532df5c31e21e88ed86db801cbd9258fc196805755c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_422bfcde33311e1f49d82411de2bfe622236f8cc9928ca8ed033642be488cc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422bfcde33311e1f49d82411de2bfe622236f8cc9928ca8ed033642be488cc08->enter($__internal_422bfcde33311e1f49d82411de2bfe622236f8cc9928ca8ed033642be488cc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_422bfcde33311e1f49d82411de2bfe622236f8cc9928ca8ed033642be488cc08->leave($__internal_422bfcde33311e1f49d82411de2bfe622236f8cc9928ca8ed033642be488cc08_prof);

        
        $__internal_a5b592b68b0144b60752532df5c31e21e88ed86db801cbd9258fc196805755c9->leave($__internal_a5b592b68b0144b60752532df5c31e21e88ed86db801cbd9258fc196805755c9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_257db18745087095343e37684fcf05708c8239aa736c937c86a8d853b463ab2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257db18745087095343e37684fcf05708c8239aa736c937c86a8d853b463ab2f->enter($__internal_257db18745087095343e37684fcf05708c8239aa736c937c86a8d853b463ab2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b7c9e239e73a20f70ef5720d061b0f3e3a59f50274481e707040c892f35d0914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c9e239e73a20f70ef5720d061b0f3e3a59f50274481e707040c892f35d0914->enter($__internal_b7c9e239e73a20f70ef5720d061b0f3e3a59f50274481e707040c892f35d0914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b7c9e239e73a20f70ef5720d061b0f3e3a59f50274481e707040c892f35d0914->leave($__internal_b7c9e239e73a20f70ef5720d061b0f3e3a59f50274481e707040c892f35d0914_prof);

        
        $__internal_257db18745087095343e37684fcf05708c8239aa736c937c86a8d853b463ab2f->leave($__internal_257db18745087095343e37684fcf05708c8239aa736c937c86a8d853b463ab2f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d687e7afe8bb9c1dd11d50cea1cf302ac9099039b51d3cfc93a884a89657df41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d687e7afe8bb9c1dd11d50cea1cf302ac9099039b51d3cfc93a884a89657df41->enter($__internal_d687e7afe8bb9c1dd11d50cea1cf302ac9099039b51d3cfc93a884a89657df41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_151237a9597f25ba95892d220f0cddf297492490e8927f4405590b40cc32397c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151237a9597f25ba95892d220f0cddf297492490e8927f4405590b40cc32397c->enter($__internal_151237a9597f25ba95892d220f0cddf297492490e8927f4405590b40cc32397c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_151237a9597f25ba95892d220f0cddf297492490e8927f4405590b40cc32397c->leave($__internal_151237a9597f25ba95892d220f0cddf297492490e8927f4405590b40cc32397c_prof);

        
        $__internal_d687e7afe8bb9c1dd11d50cea1cf302ac9099039b51d3cfc93a884a89657df41->leave($__internal_d687e7afe8bb9c1dd11d50cea1cf302ac9099039b51d3cfc93a884a89657df41_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
