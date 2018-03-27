<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4f7ad63b0731424fc0ba17613456e681debf6761d21ebe40ad682683c94bb51a extends Twig_Template
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
        $__internal_3646b90b4c9e4b52e87abccfd75b1b1fd64ed8fcc25e4120344deb19589e526c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3646b90b4c9e4b52e87abccfd75b1b1fd64ed8fcc25e4120344deb19589e526c->enter($__internal_3646b90b4c9e4b52e87abccfd75b1b1fd64ed8fcc25e4120344deb19589e526c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7200f8c31420257a67ce23b552dd03273e8cd86c959ef32b97cf343a08e1fd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7200f8c31420257a67ce23b552dd03273e8cd86c959ef32b97cf343a08e1fd32->enter($__internal_7200f8c31420257a67ce23b552dd03273e8cd86c959ef32b97cf343a08e1fd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3646b90b4c9e4b52e87abccfd75b1b1fd64ed8fcc25e4120344deb19589e526c->leave($__internal_3646b90b4c9e4b52e87abccfd75b1b1fd64ed8fcc25e4120344deb19589e526c_prof);

        
        $__internal_7200f8c31420257a67ce23b552dd03273e8cd86c959ef32b97cf343a08e1fd32->leave($__internal_7200f8c31420257a67ce23b552dd03273e8cd86c959ef32b97cf343a08e1fd32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce2ec3f633b38fd6069f1a0cd0fdd586904c8b9656e82e45e682e1c792dc397e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2ec3f633b38fd6069f1a0cd0fdd586904c8b9656e82e45e682e1c792dc397e->enter($__internal_ce2ec3f633b38fd6069f1a0cd0fdd586904c8b9656e82e45e682e1c792dc397e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cad03be11dfab48b95b1a7678bbaed67493e88efad95a0efb2c9456a737e466b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad03be11dfab48b95b1a7678bbaed67493e88efad95a0efb2c9456a737e466b->enter($__internal_cad03be11dfab48b95b1a7678bbaed67493e88efad95a0efb2c9456a737e466b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cad03be11dfab48b95b1a7678bbaed67493e88efad95a0efb2c9456a737e466b->leave($__internal_cad03be11dfab48b95b1a7678bbaed67493e88efad95a0efb2c9456a737e466b_prof);

        
        $__internal_ce2ec3f633b38fd6069f1a0cd0fdd586904c8b9656e82e45e682e1c792dc397e->leave($__internal_ce2ec3f633b38fd6069f1a0cd0fdd586904c8b9656e82e45e682e1c792dc397e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_962e53027ef6c93def4682f45d376e23334045afac1e488af356889de05a5df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962e53027ef6c93def4682f45d376e23334045afac1e488af356889de05a5df0->enter($__internal_962e53027ef6c93def4682f45d376e23334045afac1e488af356889de05a5df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c1e9c4e8578d4605fe22a96ec2eb9ca623d7ab06c653c657306d94cb3bfc1962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e9c4e8578d4605fe22a96ec2eb9ca623d7ab06c653c657306d94cb3bfc1962->enter($__internal_c1e9c4e8578d4605fe22a96ec2eb9ca623d7ab06c653c657306d94cb3bfc1962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c1e9c4e8578d4605fe22a96ec2eb9ca623d7ab06c653c657306d94cb3bfc1962->leave($__internal_c1e9c4e8578d4605fe22a96ec2eb9ca623d7ab06c653c657306d94cb3bfc1962_prof);

        
        $__internal_962e53027ef6c93def4682f45d376e23334045afac1e488af356889de05a5df0->leave($__internal_962e53027ef6c93def4682f45d376e23334045afac1e488af356889de05a5df0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5f7935848320b5362b4bc6e0a6f14383e22cba0d19fd71dec78a46c8f6b7842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f7935848320b5362b4bc6e0a6f14383e22cba0d19fd71dec78a46c8f6b7842->enter($__internal_e5f7935848320b5362b4bc6e0a6f14383e22cba0d19fd71dec78a46c8f6b7842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1dea12750f98d6c37e8ae58ff0bbd88409a4e571cc0a161cbd888d77b936b8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dea12750f98d6c37e8ae58ff0bbd88409a4e571cc0a161cbd888d77b936b8cf->enter($__internal_1dea12750f98d6c37e8ae58ff0bbd88409a4e571cc0a161cbd888d77b936b8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1dea12750f98d6c37e8ae58ff0bbd88409a4e571cc0a161cbd888d77b936b8cf->leave($__internal_1dea12750f98d6c37e8ae58ff0bbd88409a4e571cc0a161cbd888d77b936b8cf_prof);

        
        $__internal_e5f7935848320b5362b4bc6e0a6f14383e22cba0d19fd71dec78a46c8f6b7842->leave($__internal_e5f7935848320b5362b4bc6e0a6f14383e22cba0d19fd71dec78a46c8f6b7842_prof);

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
