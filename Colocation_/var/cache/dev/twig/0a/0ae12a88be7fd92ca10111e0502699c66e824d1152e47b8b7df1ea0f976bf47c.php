<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ac54d6324cf3d315c7755320b6e6e64b53226c90df6a2f0ca15c20809912b723 extends Twig_Template
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
        $__internal_7e2f87a86b2e3548b779cdc4a030a62d401d0eb9e1881a66c0753d0f743ffbd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2f87a86b2e3548b779cdc4a030a62d401d0eb9e1881a66c0753d0f743ffbd0->enter($__internal_7e2f87a86b2e3548b779cdc4a030a62d401d0eb9e1881a66c0753d0f743ffbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cba2588afc0bd2e35039afa92f13e15f3ef7d61a09a0fbfbb20c801486e27ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba2588afc0bd2e35039afa92f13e15f3ef7d61a09a0fbfbb20c801486e27ef6->enter($__internal_cba2588afc0bd2e35039afa92f13e15f3ef7d61a09a0fbfbb20c801486e27ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e2f87a86b2e3548b779cdc4a030a62d401d0eb9e1881a66c0753d0f743ffbd0->leave($__internal_7e2f87a86b2e3548b779cdc4a030a62d401d0eb9e1881a66c0753d0f743ffbd0_prof);

        
        $__internal_cba2588afc0bd2e35039afa92f13e15f3ef7d61a09a0fbfbb20c801486e27ef6->leave($__internal_cba2588afc0bd2e35039afa92f13e15f3ef7d61a09a0fbfbb20c801486e27ef6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4775e7cd1e02b85d783923544540928f2d3f2aeec32f10aa43c3b72474fcda02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4775e7cd1e02b85d783923544540928f2d3f2aeec32f10aa43c3b72474fcda02->enter($__internal_4775e7cd1e02b85d783923544540928f2d3f2aeec32f10aa43c3b72474fcda02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe576385d2d1f3c87a5f97aaef7a278cf93c70b1a5a921eebcad595498cf1ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe576385d2d1f3c87a5f97aaef7a278cf93c70b1a5a921eebcad595498cf1ff3->enter($__internal_fe576385d2d1f3c87a5f97aaef7a278cf93c70b1a5a921eebcad595498cf1ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe576385d2d1f3c87a5f97aaef7a278cf93c70b1a5a921eebcad595498cf1ff3->leave($__internal_fe576385d2d1f3c87a5f97aaef7a278cf93c70b1a5a921eebcad595498cf1ff3_prof);

        
        $__internal_4775e7cd1e02b85d783923544540928f2d3f2aeec32f10aa43c3b72474fcda02->leave($__internal_4775e7cd1e02b85d783923544540928f2d3f2aeec32f10aa43c3b72474fcda02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7b35b80fb323a62147d27cb654727fd446787055aaa83ae27a6e266f303e861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b35b80fb323a62147d27cb654727fd446787055aaa83ae27a6e266f303e861->enter($__internal_d7b35b80fb323a62147d27cb654727fd446787055aaa83ae27a6e266f303e861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_947c9396baf3e94e252f7a6b922eb67ed3cff3891e3d65aba6ffcc287d757b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947c9396baf3e94e252f7a6b922eb67ed3cff3891e3d65aba6ffcc287d757b69->enter($__internal_947c9396baf3e94e252f7a6b922eb67ed3cff3891e3d65aba6ffcc287d757b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_947c9396baf3e94e252f7a6b922eb67ed3cff3891e3d65aba6ffcc287d757b69->leave($__internal_947c9396baf3e94e252f7a6b922eb67ed3cff3891e3d65aba6ffcc287d757b69_prof);

        
        $__internal_d7b35b80fb323a62147d27cb654727fd446787055aaa83ae27a6e266f303e861->leave($__internal_d7b35b80fb323a62147d27cb654727fd446787055aaa83ae27a6e266f303e861_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0cc7a6d01fded7de775ad63e9cb36fd3b84ec76aa2aee6dd23050f78fc50dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0cc7a6d01fded7de775ad63e9cb36fd3b84ec76aa2aee6dd23050f78fc50dc0->enter($__internal_e0cc7a6d01fded7de775ad63e9cb36fd3b84ec76aa2aee6dd23050f78fc50dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_934b3702125ac1e680708483278d1d1c5e81d1f0ea528b1777ce3e5081678b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934b3702125ac1e680708483278d1d1c5e81d1f0ea528b1777ce3e5081678b8b->enter($__internal_934b3702125ac1e680708483278d1d1c5e81d1f0ea528b1777ce3e5081678b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_934b3702125ac1e680708483278d1d1c5e81d1f0ea528b1777ce3e5081678b8b->leave($__internal_934b3702125ac1e680708483278d1d1c5e81d1f0ea528b1777ce3e5081678b8b_prof);

        
        $__internal_e0cc7a6d01fded7de775ad63e9cb36fd3b84ec76aa2aee6dd23050f78fc50dc0->leave($__internal_e0cc7a6d01fded7de775ad63e9cb36fd3b84ec76aa2aee6dd23050f78fc50dc0_prof);

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
