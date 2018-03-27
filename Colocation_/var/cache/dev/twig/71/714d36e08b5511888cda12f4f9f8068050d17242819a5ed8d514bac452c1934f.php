<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b24052049417270f548c0f81dccbb9baad95c91cc2568e2de8bf65b73b3eb70b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_73e9ca0cd303ecb53b46283c36d083b9ecec89b836c57abcc94a878bdab8ee91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e9ca0cd303ecb53b46283c36d083b9ecec89b836c57abcc94a878bdab8ee91->enter($__internal_73e9ca0cd303ecb53b46283c36d083b9ecec89b836c57abcc94a878bdab8ee91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_99cbd6b8ec92482854d4de3f2f6260b3d6ddd742035cb051ba8a89e70325ccc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cbd6b8ec92482854d4de3f2f6260b3d6ddd742035cb051ba8a89e70325ccc0->enter($__internal_99cbd6b8ec92482854d4de3f2f6260b3d6ddd742035cb051ba8a89e70325ccc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e9ca0cd303ecb53b46283c36d083b9ecec89b836c57abcc94a878bdab8ee91->leave($__internal_73e9ca0cd303ecb53b46283c36d083b9ecec89b836c57abcc94a878bdab8ee91_prof);

        
        $__internal_99cbd6b8ec92482854d4de3f2f6260b3d6ddd742035cb051ba8a89e70325ccc0->leave($__internal_99cbd6b8ec92482854d4de3f2f6260b3d6ddd742035cb051ba8a89e70325ccc0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ec721b7da7250a2add28a538c5f0b0b54b8e236b8f2cd3043d939605ce2ea95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec721b7da7250a2add28a538c5f0b0b54b8e236b8f2cd3043d939605ce2ea95->enter($__internal_8ec721b7da7250a2add28a538c5f0b0b54b8e236b8f2cd3043d939605ce2ea95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7191e462fcd0c8ccf2008787c2f6c640a4c0369ed2f1184919020f0bc5d6de0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7191e462fcd0c8ccf2008787c2f6c640a4c0369ed2f1184919020f0bc5d6de0b->enter($__internal_7191e462fcd0c8ccf2008787c2f6c640a4c0369ed2f1184919020f0bc5d6de0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7191e462fcd0c8ccf2008787c2f6c640a4c0369ed2f1184919020f0bc5d6de0b->leave($__internal_7191e462fcd0c8ccf2008787c2f6c640a4c0369ed2f1184919020f0bc5d6de0b_prof);

        
        $__internal_8ec721b7da7250a2add28a538c5f0b0b54b8e236b8f2cd3043d939605ce2ea95->leave($__internal_8ec721b7da7250a2add28a538c5f0b0b54b8e236b8f2cd3043d939605ce2ea95_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17922e582c99207cae27aee8ac0c878c3510c1c7420a063652c4810bd5609e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17922e582c99207cae27aee8ac0c878c3510c1c7420a063652c4810bd5609e79->enter($__internal_17922e582c99207cae27aee8ac0c878c3510c1c7420a063652c4810bd5609e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cd6e0a8890506d1cc635288a684c5a7d4c38ddffc6e70278166978f36773b82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6e0a8890506d1cc635288a684c5a7d4c38ddffc6e70278166978f36773b82a->enter($__internal_cd6e0a8890506d1cc635288a684c5a7d4c38ddffc6e70278166978f36773b82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cd6e0a8890506d1cc635288a684c5a7d4c38ddffc6e70278166978f36773b82a->leave($__internal_cd6e0a8890506d1cc635288a684c5a7d4c38ddffc6e70278166978f36773b82a_prof);

        
        $__internal_17922e582c99207cae27aee8ac0c878c3510c1c7420a063652c4810bd5609e79->leave($__internal_17922e582c99207cae27aee8ac0c878c3510c1c7420a063652c4810bd5609e79_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d27f6e871cc3b68d59d8bca19ff67a7f866490e0199717669537d1979b50139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d27f6e871cc3b68d59d8bca19ff67a7f866490e0199717669537d1979b50139->enter($__internal_3d27f6e871cc3b68d59d8bca19ff67a7f866490e0199717669537d1979b50139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72d4ddd2b948f8d87ce029484780d38737493e5ffbce55da3f0c12276f9988e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d4ddd2b948f8d87ce029484780d38737493e5ffbce55da3f0c12276f9988e1->enter($__internal_72d4ddd2b948f8d87ce029484780d38737493e5ffbce55da3f0c12276f9988e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72d4ddd2b948f8d87ce029484780d38737493e5ffbce55da3f0c12276f9988e1->leave($__internal_72d4ddd2b948f8d87ce029484780d38737493e5ffbce55da3f0c12276f9988e1_prof);

        
        $__internal_3d27f6e871cc3b68d59d8bca19ff67a7f866490e0199717669537d1979b50139->leave($__internal_3d27f6e871cc3b68d59d8bca19ff67a7f866490e0199717669537d1979b50139_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
