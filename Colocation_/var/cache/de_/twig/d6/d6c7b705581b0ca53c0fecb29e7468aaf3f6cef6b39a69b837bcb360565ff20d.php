<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5b80e206dff835c565806f9a01591a1be3cd2713ed060a079f6e8ff0398b8311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_440724f19d5bf4d597950e558c3f51afc83adbccc79b3ee47ac8f7fb5c443f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440724f19d5bf4d597950e558c3f51afc83adbccc79b3ee47ac8f7fb5c443f63->enter($__internal_440724f19d5bf4d597950e558c3f51afc83adbccc79b3ee47ac8f7fb5c443f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_4f392cbcf569d48f1b42334c5cfcf06ff35146a3094781cc6f6ae1b0cacee42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f392cbcf569d48f1b42334c5cfcf06ff35146a3094781cc6f6ae1b0cacee42b->enter($__internal_4f392cbcf569d48f1b42334c5cfcf06ff35146a3094781cc6f6ae1b0cacee42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_440724f19d5bf4d597950e558c3f51afc83adbccc79b3ee47ac8f7fb5c443f63->leave($__internal_440724f19d5bf4d597950e558c3f51afc83adbccc79b3ee47ac8f7fb5c443f63_prof);

        
        $__internal_4f392cbcf569d48f1b42334c5cfcf06ff35146a3094781cc6f6ae1b0cacee42b->leave($__internal_4f392cbcf569d48f1b42334c5cfcf06ff35146a3094781cc6f6ae1b0cacee42b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_924ab82ee5ec807dcc9bbe3549444e7103507533b30690a8f042ae21b0402506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924ab82ee5ec807dcc9bbe3549444e7103507533b30690a8f042ae21b0402506->enter($__internal_924ab82ee5ec807dcc9bbe3549444e7103507533b30690a8f042ae21b0402506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ea95c3d8d03a22a87b11153b0193d42dc27c8b54e3fa8aafc54f7c7287e91d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea95c3d8d03a22a87b11153b0193d42dc27c8b54e3fa8aafc54f7c7287e91d3e->enter($__internal_ea95c3d8d03a22a87b11153b0193d42dc27c8b54e3fa8aafc54f7c7287e91d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ea95c3d8d03a22a87b11153b0193d42dc27c8b54e3fa8aafc54f7c7287e91d3e->leave($__internal_ea95c3d8d03a22a87b11153b0193d42dc27c8b54e3fa8aafc54f7c7287e91d3e_prof);

        
        $__internal_924ab82ee5ec807dcc9bbe3549444e7103507533b30690a8f042ae21b0402506->leave($__internal_924ab82ee5ec807dcc9bbe3549444e7103507533b30690a8f042ae21b0402506_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
