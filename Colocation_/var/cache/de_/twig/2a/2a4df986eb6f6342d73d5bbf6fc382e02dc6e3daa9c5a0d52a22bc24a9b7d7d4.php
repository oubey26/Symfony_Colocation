<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c05a3f621f38dc73c062a4d726c8b6977f29b31542579d10c276100e85baa230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_e85fecd493fe09020608b46b8f5c0cd9734eeb326ee521e7b5056a7a13a1e563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85fecd493fe09020608b46b8f5c0cd9734eeb326ee521e7b5056a7a13a1e563->enter($__internal_e85fecd493fe09020608b46b8f5c0cd9734eeb326ee521e7b5056a7a13a1e563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_662e87de1d91217470d9378566c7918b04285dccd687e768dcab24c510db1842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662e87de1d91217470d9378566c7918b04285dccd687e768dcab24c510db1842->enter($__internal_662e87de1d91217470d9378566c7918b04285dccd687e768dcab24c510db1842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e85fecd493fe09020608b46b8f5c0cd9734eeb326ee521e7b5056a7a13a1e563->leave($__internal_e85fecd493fe09020608b46b8f5c0cd9734eeb326ee521e7b5056a7a13a1e563_prof);

        
        $__internal_662e87de1d91217470d9378566c7918b04285dccd687e768dcab24c510db1842->leave($__internal_662e87de1d91217470d9378566c7918b04285dccd687e768dcab24c510db1842_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca088635445b678e75f5523df917f38f9efe4df39039454f0e244b867f4a91ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca088635445b678e75f5523df917f38f9efe4df39039454f0e244b867f4a91ee->enter($__internal_ca088635445b678e75f5523df917f38f9efe4df39039454f0e244b867f4a91ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6be6bd3e78c1bebc77ace756545542e46495c261e0eca56ec89622d27d6cc746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be6bd3e78c1bebc77ace756545542e46495c261e0eca56ec89622d27d6cc746->enter($__internal_6be6bd3e78c1bebc77ace756545542e46495c261e0eca56ec89622d27d6cc746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6be6bd3e78c1bebc77ace756545542e46495c261e0eca56ec89622d27d6cc746->leave($__internal_6be6bd3e78c1bebc77ace756545542e46495c261e0eca56ec89622d27d6cc746_prof);

        
        $__internal_ca088635445b678e75f5523df917f38f9efe4df39039454f0e244b867f4a91ee->leave($__internal_ca088635445b678e75f5523df917f38f9efe4df39039454f0e244b867f4a91ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_841c931b21a85f01c81f18b280b7576b80e077c73b2eff8e06d58e197725e8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841c931b21a85f01c81f18b280b7576b80e077c73b2eff8e06d58e197725e8da->enter($__internal_841c931b21a85f01c81f18b280b7576b80e077c73b2eff8e06d58e197725e8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4126ca795aed5d750d1c8ba3b2b8fb6b4e502155db68813df6eab3dac94879ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4126ca795aed5d750d1c8ba3b2b8fb6b4e502155db68813df6eab3dac94879ae->enter($__internal_4126ca795aed5d750d1c8ba3b2b8fb6b4e502155db68813df6eab3dac94879ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4126ca795aed5d750d1c8ba3b2b8fb6b4e502155db68813df6eab3dac94879ae->leave($__internal_4126ca795aed5d750d1c8ba3b2b8fb6b4e502155db68813df6eab3dac94879ae_prof);

        
        $__internal_841c931b21a85f01c81f18b280b7576b80e077c73b2eff8e06d58e197725e8da->leave($__internal_841c931b21a85f01c81f18b280b7576b80e077c73b2eff8e06d58e197725e8da_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
