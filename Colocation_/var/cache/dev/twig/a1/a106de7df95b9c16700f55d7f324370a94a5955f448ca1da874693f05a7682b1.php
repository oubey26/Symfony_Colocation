<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5490aa320af4d1c29c75ab7a5bf8289680ba977d56938ecd327509f3b6e3aec5 extends Twig_Template
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
        $__internal_d683298243081c4ed9e73e4529c6845084906827181523d0de87b543f131611d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d683298243081c4ed9e73e4529c6845084906827181523d0de87b543f131611d->enter($__internal_d683298243081c4ed9e73e4529c6845084906827181523d0de87b543f131611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_62b0d0b3ec0ff35b33dfcd9fd76db5fde2b5bb7e639f8592e827cb1837faeff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b0d0b3ec0ff35b33dfcd9fd76db5fde2b5bb7e639f8592e827cb1837faeff1->enter($__internal_62b0d0b3ec0ff35b33dfcd9fd76db5fde2b5bb7e639f8592e827cb1837faeff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d683298243081c4ed9e73e4529c6845084906827181523d0de87b543f131611d->leave($__internal_d683298243081c4ed9e73e4529c6845084906827181523d0de87b543f131611d_prof);

        
        $__internal_62b0d0b3ec0ff35b33dfcd9fd76db5fde2b5bb7e639f8592e827cb1837faeff1->leave($__internal_62b0d0b3ec0ff35b33dfcd9fd76db5fde2b5bb7e639f8592e827cb1837faeff1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8def5e29c662fce877586f387a79bd9f5f87565b60d8eace0d6e5b9070b8f619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8def5e29c662fce877586f387a79bd9f5f87565b60d8eace0d6e5b9070b8f619->enter($__internal_8def5e29c662fce877586f387a79bd9f5f87565b60d8eace0d6e5b9070b8f619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_850afc2e476cf7f1b4de14d59ac24dfb8df68fb88e2afc36759c6dd3f529c901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850afc2e476cf7f1b4de14d59ac24dfb8df68fb88e2afc36759c6dd3f529c901->enter($__internal_850afc2e476cf7f1b4de14d59ac24dfb8df68fb88e2afc36759c6dd3f529c901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_850afc2e476cf7f1b4de14d59ac24dfb8df68fb88e2afc36759c6dd3f529c901->leave($__internal_850afc2e476cf7f1b4de14d59ac24dfb8df68fb88e2afc36759c6dd3f529c901_prof);

        
        $__internal_8def5e29c662fce877586f387a79bd9f5f87565b60d8eace0d6e5b9070b8f619->leave($__internal_8def5e29c662fce877586f387a79bd9f5f87565b60d8eace0d6e5b9070b8f619_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9872990593f45df554925c3b5bf7938e8a629038b299e818a9fc650fcbb0d200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9872990593f45df554925c3b5bf7938e8a629038b299e818a9fc650fcbb0d200->enter($__internal_9872990593f45df554925c3b5bf7938e8a629038b299e818a9fc650fcbb0d200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_90fcdfdc8d76a3f63cf8e37cd5a1cd44d7f3e564670708d05b201d05b81647d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fcdfdc8d76a3f63cf8e37cd5a1cd44d7f3e564670708d05b201d05b81647d8->enter($__internal_90fcdfdc8d76a3f63cf8e37cd5a1cd44d7f3e564670708d05b201d05b81647d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_90fcdfdc8d76a3f63cf8e37cd5a1cd44d7f3e564670708d05b201d05b81647d8->leave($__internal_90fcdfdc8d76a3f63cf8e37cd5a1cd44d7f3e564670708d05b201d05b81647d8_prof);

        
        $__internal_9872990593f45df554925c3b5bf7938e8a629038b299e818a9fc650fcbb0d200->leave($__internal_9872990593f45df554925c3b5bf7938e8a629038b299e818a9fc650fcbb0d200_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1b786fbc060c49216e1d7b3365e1e7d3442ef096330ee9a75a0bdc8d68e862c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b786fbc060c49216e1d7b3365e1e7d3442ef096330ee9a75a0bdc8d68e862c->enter($__internal_a1b786fbc060c49216e1d7b3365e1e7d3442ef096330ee9a75a0bdc8d68e862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9ab5111a0f53fbe08e764b0300c2ea9e3187ef9656e84856081b9c67063eb6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab5111a0f53fbe08e764b0300c2ea9e3187ef9656e84856081b9c67063eb6f5->enter($__internal_9ab5111a0f53fbe08e764b0300c2ea9e3187ef9656e84856081b9c67063eb6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9ab5111a0f53fbe08e764b0300c2ea9e3187ef9656e84856081b9c67063eb6f5->leave($__internal_9ab5111a0f53fbe08e764b0300c2ea9e3187ef9656e84856081b9c67063eb6f5_prof);

        
        $__internal_a1b786fbc060c49216e1d7b3365e1e7d3442ef096330ee9a75a0bdc8d68e862c->leave($__internal_a1b786fbc060c49216e1d7b3365e1e7d3442ef096330ee9a75a0bdc8d68e862c_prof);

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
