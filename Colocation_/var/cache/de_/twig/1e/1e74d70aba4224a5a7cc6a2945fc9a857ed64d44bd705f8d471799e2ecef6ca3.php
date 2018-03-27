<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_a938b8432a6b874219b3b7dd9415adf600d03f95923f4b68f03c014c1b4319ef extends Twig_Template
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
        $__internal_74d1ffc6b60f9f0e156e7b9c926a3c526815ccc56ffcc118446a3096177b668a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d1ffc6b60f9f0e156e7b9c926a3c526815ccc56ffcc118446a3096177b668a->enter($__internal_74d1ffc6b60f9f0e156e7b9c926a3c526815ccc56ffcc118446a3096177b668a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_b9a939918b7a75db95d16e386d622953535be659cca7043944a843f52ec296aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a939918b7a75db95d16e386d622953535be659cca7043944a843f52ec296aa->enter($__internal_b9a939918b7a75db95d16e386d622953535be659cca7043944a843f52ec296aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74d1ffc6b60f9f0e156e7b9c926a3c526815ccc56ffcc118446a3096177b668a->leave($__internal_74d1ffc6b60f9f0e156e7b9c926a3c526815ccc56ffcc118446a3096177b668a_prof);

        
        $__internal_b9a939918b7a75db95d16e386d622953535be659cca7043944a843f52ec296aa->leave($__internal_b9a939918b7a75db95d16e386d622953535be659cca7043944a843f52ec296aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdd4384e7123aaae7c96fad095c5355c7a1a06b92b951c1a4886c53d3af39856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd4384e7123aaae7c96fad095c5355c7a1a06b92b951c1a4886c53d3af39856->enter($__internal_fdd4384e7123aaae7c96fad095c5355c7a1a06b92b951c1a4886c53d3af39856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab0af252502d70dce50957ca8c8d986226c05dfd574ca3714d6e18f5604e552a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0af252502d70dce50957ca8c8d986226c05dfd574ca3714d6e18f5604e552a->enter($__internal_ab0af252502d70dce50957ca8c8d986226c05dfd574ca3714d6e18f5604e552a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ab0af252502d70dce50957ca8c8d986226c05dfd574ca3714d6e18f5604e552a->leave($__internal_ab0af252502d70dce50957ca8c8d986226c05dfd574ca3714d6e18f5604e552a_prof);

        
        $__internal_fdd4384e7123aaae7c96fad095c5355c7a1a06b92b951c1a4886c53d3af39856->leave($__internal_fdd4384e7123aaae7c96fad095c5355c7a1a06b92b951c1a4886c53d3af39856_prof);

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
