<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_197ba9ac9ce5678ebddec5ffc085bfca366fdc226e130229e11d3a815a2b9cb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_6b5c92f3396814cb7e145c1f86c9d61d9ca8e9a26f24319e2319044838e7b111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5c92f3396814cb7e145c1f86c9d61d9ca8e9a26f24319e2319044838e7b111->enter($__internal_6b5c92f3396814cb7e145c1f86c9d61d9ca8e9a26f24319e2319044838e7b111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_614ee4ece64544df2bc5e093877aa5be536d28d128ee4c56b15551b2d71fa1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614ee4ece64544df2bc5e093877aa5be536d28d128ee4c56b15551b2d71fa1e5->enter($__internal_614ee4ece64544df2bc5e093877aa5be536d28d128ee4c56b15551b2d71fa1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b5c92f3396814cb7e145c1f86c9d61d9ca8e9a26f24319e2319044838e7b111->leave($__internal_6b5c92f3396814cb7e145c1f86c9d61d9ca8e9a26f24319e2319044838e7b111_prof);

        
        $__internal_614ee4ece64544df2bc5e093877aa5be536d28d128ee4c56b15551b2d71fa1e5->leave($__internal_614ee4ece64544df2bc5e093877aa5be536d28d128ee4c56b15551b2d71fa1e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ef8472cd2c1ce65e43a009a3159a6bd6d89031791c0208aa93561406a429caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef8472cd2c1ce65e43a009a3159a6bd6d89031791c0208aa93561406a429caf->enter($__internal_8ef8472cd2c1ce65e43a009a3159a6bd6d89031791c0208aa93561406a429caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ec23849cb46d5e0668d80ab358d9a8761ee98899cabf9b75b2e2c99b1530522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec23849cb46d5e0668d80ab358d9a8761ee98899cabf9b75b2e2c99b1530522->enter($__internal_6ec23849cb46d5e0668d80ab358d9a8761ee98899cabf9b75b2e2c99b1530522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_6ec23849cb46d5e0668d80ab358d9a8761ee98899cabf9b75b2e2c99b1530522->leave($__internal_6ec23849cb46d5e0668d80ab358d9a8761ee98899cabf9b75b2e2c99b1530522_prof);

        
        $__internal_8ef8472cd2c1ce65e43a009a3159a6bd6d89031791c0208aa93561406a429caf->leave($__internal_8ef8472cd2c1ce65e43a009a3159a6bd6d89031791c0208aa93561406a429caf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
