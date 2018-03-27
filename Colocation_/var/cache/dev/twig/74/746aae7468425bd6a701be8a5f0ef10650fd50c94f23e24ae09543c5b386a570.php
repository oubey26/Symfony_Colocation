<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0dbed6ff943dcfd81e09aa89b00eab7fa630a724d3533ec9638162aca9dd2904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_f3d32d452f73807bd20ea85e90b9f5a9b24eaa81d1a205aab3334cbf626daf50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d32d452f73807bd20ea85e90b9f5a9b24eaa81d1a205aab3334cbf626daf50->enter($__internal_f3d32d452f73807bd20ea85e90b9f5a9b24eaa81d1a205aab3334cbf626daf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_ec01a1b496519d70a0d280b8adc26742bc6db4fbba22aff5ac575e991fe1230a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec01a1b496519d70a0d280b8adc26742bc6db4fbba22aff5ac575e991fe1230a->enter($__internal_ec01a1b496519d70a0d280b8adc26742bc6db4fbba22aff5ac575e991fe1230a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d32d452f73807bd20ea85e90b9f5a9b24eaa81d1a205aab3334cbf626daf50->leave($__internal_f3d32d452f73807bd20ea85e90b9f5a9b24eaa81d1a205aab3334cbf626daf50_prof);

        
        $__internal_ec01a1b496519d70a0d280b8adc26742bc6db4fbba22aff5ac575e991fe1230a->leave($__internal_ec01a1b496519d70a0d280b8adc26742bc6db4fbba22aff5ac575e991fe1230a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59fb110ae2893f877429e069ad37795181f1c16bc9a76ae5327b5722b4a66b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fb110ae2893f877429e069ad37795181f1c16bc9a76ae5327b5722b4a66b5c->enter($__internal_59fb110ae2893f877429e069ad37795181f1c16bc9a76ae5327b5722b4a66b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99045043f99130bb67a3a2763660b47a8d4b7ac1e19ef16028909f519d841890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99045043f99130bb67a3a2763660b47a8d4b7ac1e19ef16028909f519d841890->enter($__internal_99045043f99130bb67a3a2763660b47a8d4b7ac1e19ef16028909f519d841890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_99045043f99130bb67a3a2763660b47a8d4b7ac1e19ef16028909f519d841890->leave($__internal_99045043f99130bb67a3a2763660b47a8d4b7ac1e19ef16028909f519d841890_prof);

        
        $__internal_59fb110ae2893f877429e069ad37795181f1c16bc9a76ae5327b5722b4a66b5c->leave($__internal_59fb110ae2893f877429e069ad37795181f1c16bc9a76ae5327b5722b4a66b5c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
