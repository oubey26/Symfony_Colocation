<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_b5935eeb9d68edc7f86c30ccb98edf5f82ddd11f05e57144ff774d5394f10820 extends Twig_Template
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
        $__internal_fb25121a08cf003b5c05bda3d6de2946c1d95a3d25d6662dea4334888cde4463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb25121a08cf003b5c05bda3d6de2946c1d95a3d25d6662dea4334888cde4463->enter($__internal_fb25121a08cf003b5c05bda3d6de2946c1d95a3d25d6662dea4334888cde4463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_b9ddc2dcdd0db19a98e6054ea8546c15a0e29258d33d7f40fd471b150661d943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ddc2dcdd0db19a98e6054ea8546c15a0e29258d33d7f40fd471b150661d943->enter($__internal_b9ddc2dcdd0db19a98e6054ea8546c15a0e29258d33d7f40fd471b150661d943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb25121a08cf003b5c05bda3d6de2946c1d95a3d25d6662dea4334888cde4463->leave($__internal_fb25121a08cf003b5c05bda3d6de2946c1d95a3d25d6662dea4334888cde4463_prof);

        
        $__internal_b9ddc2dcdd0db19a98e6054ea8546c15a0e29258d33d7f40fd471b150661d943->leave($__internal_b9ddc2dcdd0db19a98e6054ea8546c15a0e29258d33d7f40fd471b150661d943_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43cef7ae84737714ff8d46467fc7f7ba1eb9efd112a51dca4a4aad265871a594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cef7ae84737714ff8d46467fc7f7ba1eb9efd112a51dca4a4aad265871a594->enter($__internal_43cef7ae84737714ff8d46467fc7f7ba1eb9efd112a51dca4a4aad265871a594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4fb715cb9990431cf091c5a99c1ad70e5535f7a0ba52a32f14eec6c9c0264e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb715cb9990431cf091c5a99c1ad70e5535f7a0ba52a32f14eec6c9c0264e7a->enter($__internal_4fb715cb9990431cf091c5a99c1ad70e5535f7a0ba52a32f14eec6c9c0264e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_4fb715cb9990431cf091c5a99c1ad70e5535f7a0ba52a32f14eec6c9c0264e7a->leave($__internal_4fb715cb9990431cf091c5a99c1ad70e5535f7a0ba52a32f14eec6c9c0264e7a_prof);

        
        $__internal_43cef7ae84737714ff8d46467fc7f7ba1eb9efd112a51dca4a4aad265871a594->leave($__internal_43cef7ae84737714ff8d46467fc7f7ba1eb9efd112a51dca4a4aad265871a594_prof);

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
