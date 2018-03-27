<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_57ac587a9bf9fd50afed7095f9a166ad71935755dcc30f0f2d905cc2b801221e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_e970ba18d99d8ac8779669229b9eaef9e90de98f21becd3e42a5df74dff64a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e970ba18d99d8ac8779669229b9eaef9e90de98f21becd3e42a5df74dff64a0d->enter($__internal_e970ba18d99d8ac8779669229b9eaef9e90de98f21becd3e42a5df74dff64a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_f529cc627850e7390b26680cefbc1691f3c6667ea078c645d0735f7653a39ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f529cc627850e7390b26680cefbc1691f3c6667ea078c645d0735f7653a39ac4->enter($__internal_f529cc627850e7390b26680cefbc1691f3c6667ea078c645d0735f7653a39ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e970ba18d99d8ac8779669229b9eaef9e90de98f21becd3e42a5df74dff64a0d->leave($__internal_e970ba18d99d8ac8779669229b9eaef9e90de98f21becd3e42a5df74dff64a0d_prof);

        
        $__internal_f529cc627850e7390b26680cefbc1691f3c6667ea078c645d0735f7653a39ac4->leave($__internal_f529cc627850e7390b26680cefbc1691f3c6667ea078c645d0735f7653a39ac4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58963baac0d9ef9c787b55608c014cc9f3e7b904973ed39792fcd91b0795a374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58963baac0d9ef9c787b55608c014cc9f3e7b904973ed39792fcd91b0795a374->enter($__internal_58963baac0d9ef9c787b55608c014cc9f3e7b904973ed39792fcd91b0795a374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0474fba9fe5525eb979591fbe2e39a98a80f35cccd2a5b4f8c346a5a12f2e62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0474fba9fe5525eb979591fbe2e39a98a80f35cccd2a5b4f8c346a5a12f2e62e->enter($__internal_0474fba9fe5525eb979591fbe2e39a98a80f35cccd2a5b4f8c346a5a12f2e62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0474fba9fe5525eb979591fbe2e39a98a80f35cccd2a5b4f8c346a5a12f2e62e->leave($__internal_0474fba9fe5525eb979591fbe2e39a98a80f35cccd2a5b4f8c346a5a12f2e62e_prof);

        
        $__internal_58963baac0d9ef9c787b55608c014cc9f3e7b904973ed39792fcd91b0795a374->leave($__internal_58963baac0d9ef9c787b55608c014cc9f3e7b904973ed39792fcd91b0795a374_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
