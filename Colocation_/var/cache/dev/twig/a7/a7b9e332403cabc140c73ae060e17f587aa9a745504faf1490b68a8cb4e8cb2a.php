<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_859292035a8d56f00e6baaf450d8993a3f2e37655982138144b256c36844f819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_bbfd43f9c9f730bbe472da21296e8e8dbedaed579956a398604d0f70e3b6a89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfd43f9c9f730bbe472da21296e8e8dbedaed579956a398604d0f70e3b6a89b->enter($__internal_bbfd43f9c9f730bbe472da21296e8e8dbedaed579956a398604d0f70e3b6a89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d936f41440771220ad5efbd75ffad87c9097f5e92ab3d3e4207cc56f284d02a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d936f41440771220ad5efbd75ffad87c9097f5e92ab3d3e4207cc56f284d02a2->enter($__internal_d936f41440771220ad5efbd75ffad87c9097f5e92ab3d3e4207cc56f284d02a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbfd43f9c9f730bbe472da21296e8e8dbedaed579956a398604d0f70e3b6a89b->leave($__internal_bbfd43f9c9f730bbe472da21296e8e8dbedaed579956a398604d0f70e3b6a89b_prof);

        
        $__internal_d936f41440771220ad5efbd75ffad87c9097f5e92ab3d3e4207cc56f284d02a2->leave($__internal_d936f41440771220ad5efbd75ffad87c9097f5e92ab3d3e4207cc56f284d02a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92a5fd2cbb28842263d14282b27bfb3a69f6fb747b044f2b3d93ab7cfd3ff570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a5fd2cbb28842263d14282b27bfb3a69f6fb747b044f2b3d93ab7cfd3ff570->enter($__internal_92a5fd2cbb28842263d14282b27bfb3a69f6fb747b044f2b3d93ab7cfd3ff570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f7cd0344806561b043368cd3ee3eac31b60a0164ca59080d9e80404a0676943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7cd0344806561b043368cd3ee3eac31b60a0164ca59080d9e80404a0676943->enter($__internal_1f7cd0344806561b043368cd3ee3eac31b60a0164ca59080d9e80404a0676943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1f7cd0344806561b043368cd3ee3eac31b60a0164ca59080d9e80404a0676943->leave($__internal_1f7cd0344806561b043368cd3ee3eac31b60a0164ca59080d9e80404a0676943_prof);

        
        $__internal_92a5fd2cbb28842263d14282b27bfb3a69f6fb747b044f2b3d93ab7cfd3ff570->leave($__internal_92a5fd2cbb28842263d14282b27bfb3a69f6fb747b044f2b3d93ab7cfd3ff570_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
