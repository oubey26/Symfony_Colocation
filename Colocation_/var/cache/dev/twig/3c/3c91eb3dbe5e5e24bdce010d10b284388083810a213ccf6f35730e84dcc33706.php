<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dd5d4c6bd4c955a3433bd9b467f3b3a5e83a9c4521f53d9d63b4f4329015e50c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_275911daa94a3dbf3210a6ae7d2e8ccecfab069b32cce6e6e95622695414da30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275911daa94a3dbf3210a6ae7d2e8ccecfab069b32cce6e6e95622695414da30->enter($__internal_275911daa94a3dbf3210a6ae7d2e8ccecfab069b32cce6e6e95622695414da30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fe2d0459e796dcf721e48279fc5ce44e7bc6ddea1d9f8297ce8e58b02914eb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2d0459e796dcf721e48279fc5ce44e7bc6ddea1d9f8297ce8e58b02914eb65->enter($__internal_fe2d0459e796dcf721e48279fc5ce44e7bc6ddea1d9f8297ce8e58b02914eb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275911daa94a3dbf3210a6ae7d2e8ccecfab069b32cce6e6e95622695414da30->leave($__internal_275911daa94a3dbf3210a6ae7d2e8ccecfab069b32cce6e6e95622695414da30_prof);

        
        $__internal_fe2d0459e796dcf721e48279fc5ce44e7bc6ddea1d9f8297ce8e58b02914eb65->leave($__internal_fe2d0459e796dcf721e48279fc5ce44e7bc6ddea1d9f8297ce8e58b02914eb65_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a82474eb1d5ae4820d72d448bfe1f3b940e3621671b56258094c3440800e1db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82474eb1d5ae4820d72d448bfe1f3b940e3621671b56258094c3440800e1db0->enter($__internal_a82474eb1d5ae4820d72d448bfe1f3b940e3621671b56258094c3440800e1db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6269b7f7af76ce2d339fef16b8057cfd0e3ef6307d6eefcd3874946ed6d1fb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6269b7f7af76ce2d339fef16b8057cfd0e3ef6307d6eefcd3874946ed6d1fb25->enter($__internal_6269b7f7af76ce2d339fef16b8057cfd0e3ef6307d6eefcd3874946ed6d1fb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6269b7f7af76ce2d339fef16b8057cfd0e3ef6307d6eefcd3874946ed6d1fb25->leave($__internal_6269b7f7af76ce2d339fef16b8057cfd0e3ef6307d6eefcd3874946ed6d1fb25_prof);

        
        $__internal_a82474eb1d5ae4820d72d448bfe1f3b940e3621671b56258094c3440800e1db0->leave($__internal_a82474eb1d5ae4820d72d448bfe1f3b940e3621671b56258094c3440800e1db0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53bcd469c8d96875fabf8de8cad8033739c07a65385dfae621e13ec90beb1a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bcd469c8d96875fabf8de8cad8033739c07a65385dfae621e13ec90beb1a9c->enter($__internal_53bcd469c8d96875fabf8de8cad8033739c07a65385dfae621e13ec90beb1a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b504c390a8840727e682e09a4e509bd03272c6220fa9deb19a1eb0cd544be68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b504c390a8840727e682e09a4e509bd03272c6220fa9deb19a1eb0cd544be68->enter($__internal_2b504c390a8840727e682e09a4e509bd03272c6220fa9deb19a1eb0cd544be68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b504c390a8840727e682e09a4e509bd03272c6220fa9deb19a1eb0cd544be68->leave($__internal_2b504c390a8840727e682e09a4e509bd03272c6220fa9deb19a1eb0cd544be68_prof);

        
        $__internal_53bcd469c8d96875fabf8de8cad8033739c07a65385dfae621e13ec90beb1a9c->leave($__internal_53bcd469c8d96875fabf8de8cad8033739c07a65385dfae621e13ec90beb1a9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59147b747d8a2677592557c98b66c6d1fcc7e300498d31d767ec24b411dd85d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59147b747d8a2677592557c98b66c6d1fcc7e300498d31d767ec24b411dd85d3->enter($__internal_59147b747d8a2677592557c98b66c6d1fcc7e300498d31d767ec24b411dd85d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01d3c530da292dbca4c63a69793ffca25c78521d427a2c2e3575529b9b73fa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d3c530da292dbca4c63a69793ffca25c78521d427a2c2e3575529b9b73fa77->enter($__internal_01d3c530da292dbca4c63a69793ffca25c78521d427a2c2e3575529b9b73fa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01d3c530da292dbca4c63a69793ffca25c78521d427a2c2e3575529b9b73fa77->leave($__internal_01d3c530da292dbca4c63a69793ffca25c78521d427a2c2e3575529b9b73fa77_prof);

        
        $__internal_59147b747d8a2677592557c98b66c6d1fcc7e300498d31d767ec24b411dd85d3->leave($__internal_59147b747d8a2677592557c98b66c6d1fcc7e300498d31d767ec24b411dd85d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
