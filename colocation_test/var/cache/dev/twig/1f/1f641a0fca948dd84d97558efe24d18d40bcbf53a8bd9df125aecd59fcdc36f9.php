<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c05b27d37c0edea3d3826acbd9420e04844a6a0d01d5bf50a4dfaff34b6f9 extends Twig_Template
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
        $__internal_141a569f311c28cab5fe19eda34b8bc4576a56a40c841e4caabec6a7965bd1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141a569f311c28cab5fe19eda34b8bc4576a56a40c841e4caabec6a7965bd1e2->enter($__internal_141a569f311c28cab5fe19eda34b8bc4576a56a40c841e4caabec6a7965bd1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9f0f0fabb2e44d6ce419e9949395173c4063b898a7577bdea02696e17135cb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0f0fabb2e44d6ce419e9949395173c4063b898a7577bdea02696e17135cb1a->enter($__internal_9f0f0fabb2e44d6ce419e9949395173c4063b898a7577bdea02696e17135cb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141a569f311c28cab5fe19eda34b8bc4576a56a40c841e4caabec6a7965bd1e2->leave($__internal_141a569f311c28cab5fe19eda34b8bc4576a56a40c841e4caabec6a7965bd1e2_prof);

        
        $__internal_9f0f0fabb2e44d6ce419e9949395173c4063b898a7577bdea02696e17135cb1a->leave($__internal_9f0f0fabb2e44d6ce419e9949395173c4063b898a7577bdea02696e17135cb1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10f552bd15e2a28e1fcd1c44383d7f42b554905352b43ab67624fddde372387a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f552bd15e2a28e1fcd1c44383d7f42b554905352b43ab67624fddde372387a->enter($__internal_10f552bd15e2a28e1fcd1c44383d7f42b554905352b43ab67624fddde372387a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_76723c51aa8347086360ff55de07843539af51258b48bfea6e5a03f560371539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76723c51aa8347086360ff55de07843539af51258b48bfea6e5a03f560371539->enter($__internal_76723c51aa8347086360ff55de07843539af51258b48bfea6e5a03f560371539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_76723c51aa8347086360ff55de07843539af51258b48bfea6e5a03f560371539->leave($__internal_76723c51aa8347086360ff55de07843539af51258b48bfea6e5a03f560371539_prof);

        
        $__internal_10f552bd15e2a28e1fcd1c44383d7f42b554905352b43ab67624fddde372387a->leave($__internal_10f552bd15e2a28e1fcd1c44383d7f42b554905352b43ab67624fddde372387a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2f84399bbdc6da8c288d6d1a378655a4b2b4552a5c754dd529f63f80fcc65bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f84399bbdc6da8c288d6d1a378655a4b2b4552a5c754dd529f63f80fcc65bf->enter($__internal_d2f84399bbdc6da8c288d6d1a378655a4b2b4552a5c754dd529f63f80fcc65bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_013d4dbb2260ef77ce229115c12e6930367a891b20e60e9709f0baf5ce1cdd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013d4dbb2260ef77ce229115c12e6930367a891b20e60e9709f0baf5ce1cdd4f->enter($__internal_013d4dbb2260ef77ce229115c12e6930367a891b20e60e9709f0baf5ce1cdd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_013d4dbb2260ef77ce229115c12e6930367a891b20e60e9709f0baf5ce1cdd4f->leave($__internal_013d4dbb2260ef77ce229115c12e6930367a891b20e60e9709f0baf5ce1cdd4f_prof);

        
        $__internal_d2f84399bbdc6da8c288d6d1a378655a4b2b4552a5c754dd529f63f80fcc65bf->leave($__internal_d2f84399bbdc6da8c288d6d1a378655a4b2b4552a5c754dd529f63f80fcc65bf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c7211164b1447114ca6710c6ccdecf09a1643834d8a6c5b5f95b281a1c6bc46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7211164b1447114ca6710c6ccdecf09a1643834d8a6c5b5f95b281a1c6bc46->enter($__internal_2c7211164b1447114ca6710c6ccdecf09a1643834d8a6c5b5f95b281a1c6bc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d7cb476d64d4727094b43d44353d490c0928116ceb9281ddc416b8926856a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7cb476d64d4727094b43d44353d490c0928116ceb9281ddc416b8926856a52->enter($__internal_4d7cb476d64d4727094b43d44353d490c0928116ceb9281ddc416b8926856a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4d7cb476d64d4727094b43d44353d490c0928116ceb9281ddc416b8926856a52->leave($__internal_4d7cb476d64d4727094b43d44353d490c0928116ceb9281ddc416b8926856a52_prof);

        
        $__internal_2c7211164b1447114ca6710c6ccdecf09a1643834d8a6c5b5f95b281a1c6bc46->leave($__internal_2c7211164b1447114ca6710c6ccdecf09a1643834d8a6c5b5f95b281a1c6bc46_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\colocation_test\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
