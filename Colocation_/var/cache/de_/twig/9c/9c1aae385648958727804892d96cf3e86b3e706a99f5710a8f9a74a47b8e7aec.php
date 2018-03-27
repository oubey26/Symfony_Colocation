<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_34ef9dbdf6fd53ffd32e1e0bf998f4704a96e22d0859115f655a1e7d5f0f0fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_c80bd663a451c9e02ce79ff9af844b51f61a042e752bb0043cf59739088ced64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80bd663a451c9e02ce79ff9af844b51f61a042e752bb0043cf59739088ced64->enter($__internal_c80bd663a451c9e02ce79ff9af844b51f61a042e752bb0043cf59739088ced64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_9000efd2b887a16d990cf1a18d09fa9b517d2b66498f617b06b43dbb8e0c418b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9000efd2b887a16d990cf1a18d09fa9b517d2b66498f617b06b43dbb8e0c418b->enter($__internal_9000efd2b887a16d990cf1a18d09fa9b517d2b66498f617b06b43dbb8e0c418b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80bd663a451c9e02ce79ff9af844b51f61a042e752bb0043cf59739088ced64->leave($__internal_c80bd663a451c9e02ce79ff9af844b51f61a042e752bb0043cf59739088ced64_prof);

        
        $__internal_9000efd2b887a16d990cf1a18d09fa9b517d2b66498f617b06b43dbb8e0c418b->leave($__internal_9000efd2b887a16d990cf1a18d09fa9b517d2b66498f617b06b43dbb8e0c418b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76557ebcc220a17772fd9afe83193cd874de3e61109b874e2799dae9e433ba40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76557ebcc220a17772fd9afe83193cd874de3e61109b874e2799dae9e433ba40->enter($__internal_76557ebcc220a17772fd9afe83193cd874de3e61109b874e2799dae9e433ba40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bac196461267555dc25c4eeac273cc2d169f9f73ff57c5f2b900c3399a19617f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac196461267555dc25c4eeac273cc2d169f9f73ff57c5f2b900c3399a19617f->enter($__internal_bac196461267555dc25c4eeac273cc2d169f9f73ff57c5f2b900c3399a19617f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_bac196461267555dc25c4eeac273cc2d169f9f73ff57c5f2b900c3399a19617f->leave($__internal_bac196461267555dc25c4eeac273cc2d169f9f73ff57c5f2b900c3399a19617f_prof);

        
        $__internal_76557ebcc220a17772fd9afe83193cd874de3e61109b874e2799dae9e433ba40->leave($__internal_76557ebcc220a17772fd9afe83193cd874de3e61109b874e2799dae9e433ba40_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
