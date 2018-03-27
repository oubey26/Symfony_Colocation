<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_2f12ec9153b7d8376e0a283cab80457b84c92e99dd0366901048e6466e258f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_735205789eadc0864b389fdb0c74869d25d3e63063e737916d5b4052fdd69a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735205789eadc0864b389fdb0c74869d25d3e63063e737916d5b4052fdd69a50->enter($__internal_735205789eadc0864b389fdb0c74869d25d3e63063e737916d5b4052fdd69a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_54400f4a361040431297f4e60601559e6466598a781a70ce10bb3a79704144d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54400f4a361040431297f4e60601559e6466598a781a70ce10bb3a79704144d7->enter($__internal_54400f4a361040431297f4e60601559e6466598a781a70ce10bb3a79704144d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_735205789eadc0864b389fdb0c74869d25d3e63063e737916d5b4052fdd69a50->leave($__internal_735205789eadc0864b389fdb0c74869d25d3e63063e737916d5b4052fdd69a50_prof);

        
        $__internal_54400f4a361040431297f4e60601559e6466598a781a70ce10bb3a79704144d7->leave($__internal_54400f4a361040431297f4e60601559e6466598a781a70ce10bb3a79704144d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0be0cd8745f7bce46f2d644950e7bfb2602d0be4e61d29614ebc002a1553738e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be0cd8745f7bce46f2d644950e7bfb2602d0be4e61d29614ebc002a1553738e->enter($__internal_0be0cd8745f7bce46f2d644950e7bfb2602d0be4e61d29614ebc002a1553738e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8665b4d7944815fdb22858a75128d1eb592572553c9a2b00aa889a22055000aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8665b4d7944815fdb22858a75128d1eb592572553c9a2b00aa889a22055000aa->enter($__internal_8665b4d7944815fdb22858a75128d1eb592572553c9a2b00aa889a22055000aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_8665b4d7944815fdb22858a75128d1eb592572553c9a2b00aa889a22055000aa->leave($__internal_8665b4d7944815fdb22858a75128d1eb592572553c9a2b00aa889a22055000aa_prof);

        
        $__internal_0be0cd8745f7bce46f2d644950e7bfb2602d0be4e61d29614ebc002a1553738e->leave($__internal_0be0cd8745f7bce46f2d644950e7bfb2602d0be4e61d29614ebc002a1553738e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
