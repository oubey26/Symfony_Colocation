<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_6a8dd6eb0d538a8ed6ced235f88e6748cb555a257b68644fd3808601307f11d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d735e0a148bf27284956e43fae77cc996697e271c22f592c5c0d41f48dd0b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d735e0a148bf27284956e43fae77cc996697e271c22f592c5c0d41f48dd0b78->enter($__internal_8d735e0a148bf27284956e43fae77cc996697e271c22f592c5c0d41f48dd0b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_6a2fd72adc0a6cecdd75aabcb2a51186c1a9d8c922c4e3c76b89b0fe11cc22dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2fd72adc0a6cecdd75aabcb2a51186c1a9d8c922c4e3c76b89b0fe11cc22dd->enter($__internal_6a2fd72adc0a6cecdd75aabcb2a51186c1a9d8c922c4e3c76b89b0fe11cc22dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d735e0a148bf27284956e43fae77cc996697e271c22f592c5c0d41f48dd0b78->leave($__internal_8d735e0a148bf27284956e43fae77cc996697e271c22f592c5c0d41f48dd0b78_prof);

        
        $__internal_6a2fd72adc0a6cecdd75aabcb2a51186c1a9d8c922c4e3c76b89b0fe11cc22dd->leave($__internal_6a2fd72adc0a6cecdd75aabcb2a51186c1a9d8c922c4e3c76b89b0fe11cc22dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0fc29f4b90b1f76184d46d573ffd5e0e05bf9ea2afcf85f7687ad7d9415f709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fc29f4b90b1f76184d46d573ffd5e0e05bf9ea2afcf85f7687ad7d9415f709->enter($__internal_c0fc29f4b90b1f76184d46d573ffd5e0e05bf9ea2afcf85f7687ad7d9415f709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4209df6652f055edc9e35455378c4ad5e3540047120b6b347c90a8f24dd88aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4209df6652f055edc9e35455378c4ad5e3540047120b6b347c90a8f24dd88aa4->enter($__internal_4209df6652f055edc9e35455378c4ad5e3540047120b6b347c90a8f24dd88aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_4209df6652f055edc9e35455378c4ad5e3540047120b6b347c90a8f24dd88aa4->leave($__internal_4209df6652f055edc9e35455378c4ad5e3540047120b6b347c90a8f24dd88aa4_prof);

        
        $__internal_c0fc29f4b90b1f76184d46d573ffd5e0e05bf9ea2afcf85f7687ad7d9415f709->leave($__internal_c0fc29f4b90b1f76184d46d573ffd5e0e05bf9ea2afcf85f7687ad7d9415f709_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
