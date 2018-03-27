<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_968cbc283c86173c1532a727fc8b29fbf356f467e618c58948e6e4eec037b296 extends Twig_Template
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
        $__internal_ec864554e50f3f672bf94ec806518d382c9cb2957dd9dbe1a9a1a45074aec0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec864554e50f3f672bf94ec806518d382c9cb2957dd9dbe1a9a1a45074aec0ee->enter($__internal_ec864554e50f3f672bf94ec806518d382c9cb2957dd9dbe1a9a1a45074aec0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_db971c446fc15cf6c4849e3605db3a4843117e588537f11f3271dd8fc18a6165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db971c446fc15cf6c4849e3605db3a4843117e588537f11f3271dd8fc18a6165->enter($__internal_db971c446fc15cf6c4849e3605db3a4843117e588537f11f3271dd8fc18a6165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec864554e50f3f672bf94ec806518d382c9cb2957dd9dbe1a9a1a45074aec0ee->leave($__internal_ec864554e50f3f672bf94ec806518d382c9cb2957dd9dbe1a9a1a45074aec0ee_prof);

        
        $__internal_db971c446fc15cf6c4849e3605db3a4843117e588537f11f3271dd8fc18a6165->leave($__internal_db971c446fc15cf6c4849e3605db3a4843117e588537f11f3271dd8fc18a6165_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c05fb1efc2568cb60d4ece194fdb3dfb176e995ef0063b392043f138c3b3926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c05fb1efc2568cb60d4ece194fdb3dfb176e995ef0063b392043f138c3b3926->enter($__internal_3c05fb1efc2568cb60d4ece194fdb3dfb176e995ef0063b392043f138c3b3926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18ec326bbb3d779eaf21746bd5f18415547b6ccd71e183af1bfc89bb16b10b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ec326bbb3d779eaf21746bd5f18415547b6ccd71e183af1bfc89bb16b10b35->enter($__internal_18ec326bbb3d779eaf21746bd5f18415547b6ccd71e183af1bfc89bb16b10b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_18ec326bbb3d779eaf21746bd5f18415547b6ccd71e183af1bfc89bb16b10b35->leave($__internal_18ec326bbb3d779eaf21746bd5f18415547b6ccd71e183af1bfc89bb16b10b35_prof);

        
        $__internal_3c05fb1efc2568cb60d4ece194fdb3dfb176e995ef0063b392043f138c3b3926->leave($__internal_3c05fb1efc2568cb60d4ece194fdb3dfb176e995ef0063b392043f138c3b3926_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e451f08dc311fd3dc5d15ec7872eca15694781ca6028f198dc7db3def5bec05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e451f08dc311fd3dc5d15ec7872eca15694781ca6028f198dc7db3def5bec05->enter($__internal_9e451f08dc311fd3dc5d15ec7872eca15694781ca6028f198dc7db3def5bec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c5679cfab29471f9b4050e7ce3bb792a1ee1153a0d832eeb6e76f96ef9c05b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5679cfab29471f9b4050e7ce3bb792a1ee1153a0d832eeb6e76f96ef9c05b3c->enter($__internal_c5679cfab29471f9b4050e7ce3bb792a1ee1153a0d832eeb6e76f96ef9c05b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c5679cfab29471f9b4050e7ce3bb792a1ee1153a0d832eeb6e76f96ef9c05b3c->leave($__internal_c5679cfab29471f9b4050e7ce3bb792a1ee1153a0d832eeb6e76f96ef9c05b3c_prof);

        
        $__internal_9e451f08dc311fd3dc5d15ec7872eca15694781ca6028f198dc7db3def5bec05->leave($__internal_9e451f08dc311fd3dc5d15ec7872eca15694781ca6028f198dc7db3def5bec05_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7c526f85b88c4dac43fb627e6ee25cf7cb65b29dfc95e52428dae9ce20d8e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c526f85b88c4dac43fb627e6ee25cf7cb65b29dfc95e52428dae9ce20d8e2e->enter($__internal_e7c526f85b88c4dac43fb627e6ee25cf7cb65b29dfc95e52428dae9ce20d8e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3da74a960a1ee2e15647c44686cd5e828f922c19291bdda90fab527da8be6839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da74a960a1ee2e15647c44686cd5e828f922c19291bdda90fab527da8be6839->enter($__internal_3da74a960a1ee2e15647c44686cd5e828f922c19291bdda90fab527da8be6839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3da74a960a1ee2e15647c44686cd5e828f922c19291bdda90fab527da8be6839->leave($__internal_3da74a960a1ee2e15647c44686cd5e828f922c19291bdda90fab527da8be6839_prof);

        
        $__internal_e7c526f85b88c4dac43fb627e6ee25cf7cb65b29dfc95e52428dae9ce20d8e2e->leave($__internal_e7c526f85b88c4dac43fb627e6ee25cf7cb65b29dfc95e52428dae9ce20d8e2e_prof);

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
