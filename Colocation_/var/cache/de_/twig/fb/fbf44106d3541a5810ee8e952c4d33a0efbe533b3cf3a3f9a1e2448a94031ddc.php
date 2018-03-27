<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_28d2db05bb659e1f56e4e64414a7a1c9b01efd15635e7c6bfa699d55156805b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5185ef5261f6998d73dc20dc3c9fd559df0987978a7b0af2f831623cb653d35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5185ef5261f6998d73dc20dc3c9fd559df0987978a7b0af2f831623cb653d35f->enter($__internal_5185ef5261f6998d73dc20dc3c9fd559df0987978a7b0af2f831623cb653d35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_45d89bac831104a41565987596bef084b6424c6452adc45dbc1dbef50fd32438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d89bac831104a41565987596bef084b6424c6452adc45dbc1dbef50fd32438->enter($__internal_45d89bac831104a41565987596bef084b6424c6452adc45dbc1dbef50fd32438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5185ef5261f6998d73dc20dc3c9fd559df0987978a7b0af2f831623cb653d35f->leave($__internal_5185ef5261f6998d73dc20dc3c9fd559df0987978a7b0af2f831623cb653d35f_prof);

        
        $__internal_45d89bac831104a41565987596bef084b6424c6452adc45dbc1dbef50fd32438->leave($__internal_45d89bac831104a41565987596bef084b6424c6452adc45dbc1dbef50fd32438_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34c0fbd3b1230c56fb923c91c75d6a822d8e8930bf7d8265b792e152138340ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c0fbd3b1230c56fb923c91c75d6a822d8e8930bf7d8265b792e152138340ab->enter($__internal_34c0fbd3b1230c56fb923c91c75d6a822d8e8930bf7d8265b792e152138340ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2cace759e7e784c3a4ad972dd6407a61eb9f89357a7af6c26be54230a37fbcad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cace759e7e784c3a4ad972dd6407a61eb9f89357a7af6c26be54230a37fbcad->enter($__internal_2cace759e7e784c3a4ad972dd6407a61eb9f89357a7af6c26be54230a37fbcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_2cace759e7e784c3a4ad972dd6407a61eb9f89357a7af6c26be54230a37fbcad->leave($__internal_2cace759e7e784c3a4ad972dd6407a61eb9f89357a7af6c26be54230a37fbcad_prof);

        
        $__internal_34c0fbd3b1230c56fb923c91c75d6a822d8e8930bf7d8265b792e152138340ab->leave($__internal_34c0fbd3b1230c56fb923c91c75d6a822d8e8930bf7d8265b792e152138340ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
