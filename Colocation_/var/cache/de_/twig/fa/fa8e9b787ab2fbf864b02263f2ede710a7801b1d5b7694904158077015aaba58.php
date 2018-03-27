<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4d62d3ab0cbc243e303af63b980faa6f40e8add86daf07578ab998d208a0e9af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb7e2513e27d302d1adbe739d80edeab1e95efb38f8849bed0b31a5d95b8ec83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7e2513e27d302d1adbe739d80edeab1e95efb38f8849bed0b31a5d95b8ec83->enter($__internal_fb7e2513e27d302d1adbe739d80edeab1e95efb38f8849bed0b31a5d95b8ec83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_575293aaea8a79a3c763d9d1b30f171829e9372a67fd8b158e3f2f098aa0fbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575293aaea8a79a3c763d9d1b30f171829e9372a67fd8b158e3f2f098aa0fbc4->enter($__internal_575293aaea8a79a3c763d9d1b30f171829e9372a67fd8b158e3f2f098aa0fbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb7e2513e27d302d1adbe739d80edeab1e95efb38f8849bed0b31a5d95b8ec83->leave($__internal_fb7e2513e27d302d1adbe739d80edeab1e95efb38f8849bed0b31a5d95b8ec83_prof);

        
        $__internal_575293aaea8a79a3c763d9d1b30f171829e9372a67fd8b158e3f2f098aa0fbc4->leave($__internal_575293aaea8a79a3c763d9d1b30f171829e9372a67fd8b158e3f2f098aa0fbc4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a90eace35a0a03072ea1cfce699ede42c8e6239d85c1db9138621a5b68e7c38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90eace35a0a03072ea1cfce699ede42c8e6239d85c1db9138621a5b68e7c38b->enter($__internal_a90eace35a0a03072ea1cfce699ede42c8e6239d85c1db9138621a5b68e7c38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_516c357ae132e52ba92fe4b2dce44f518bb8eb4e2de370600c509aa6d5303327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516c357ae132e52ba92fe4b2dce44f518bb8eb4e2de370600c509aa6d5303327->enter($__internal_516c357ae132e52ba92fe4b2dce44f518bb8eb4e2de370600c509aa6d5303327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_516c357ae132e52ba92fe4b2dce44f518bb8eb4e2de370600c509aa6d5303327->leave($__internal_516c357ae132e52ba92fe4b2dce44f518bb8eb4e2de370600c509aa6d5303327_prof);

        
        $__internal_a90eace35a0a03072ea1cfce699ede42c8e6239d85c1db9138621a5b68e7c38b->leave($__internal_a90eace35a0a03072ea1cfce699ede42c8e6239d85c1db9138621a5b68e7c38b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da8b795fe160929b2310ddd7f21571c511d9898bc8d771bb9379ecce4987480b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8b795fe160929b2310ddd7f21571c511d9898bc8d771bb9379ecce4987480b->enter($__internal_da8b795fe160929b2310ddd7f21571c511d9898bc8d771bb9379ecce4987480b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aef3e293037cc63213a4e681f5094d5a7e5abf1041fc56226e7d4b871b094f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef3e293037cc63213a4e681f5094d5a7e5abf1041fc56226e7d4b871b094f50->enter($__internal_aef3e293037cc63213a4e681f5094d5a7e5abf1041fc56226e7d4b871b094f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_aef3e293037cc63213a4e681f5094d5a7e5abf1041fc56226e7d4b871b094f50->leave($__internal_aef3e293037cc63213a4e681f5094d5a7e5abf1041fc56226e7d4b871b094f50_prof);

        
        $__internal_da8b795fe160929b2310ddd7f21571c511d9898bc8d771bb9379ecce4987480b->leave($__internal_da8b795fe160929b2310ddd7f21571c511d9898bc8d771bb9379ecce4987480b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
