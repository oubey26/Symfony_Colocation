<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f0207f7459cd72197ea5f8eafcca73722b910e18ef1a3690466f1dd04d63a690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_470552df176ae7954ec951ef3f025b1caf6bcf0eec3274745ef6a0f370c08973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470552df176ae7954ec951ef3f025b1caf6bcf0eec3274745ef6a0f370c08973->enter($__internal_470552df176ae7954ec951ef3f025b1caf6bcf0eec3274745ef6a0f370c08973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_fd3314fbd87193f7bce01be86119c8750ca0515ab3244fa0d5449195d4a01c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3314fbd87193f7bce01be86119c8750ca0515ab3244fa0d5449195d4a01c31->enter($__internal_fd3314fbd87193f7bce01be86119c8750ca0515ab3244fa0d5449195d4a01c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_470552df176ae7954ec951ef3f025b1caf6bcf0eec3274745ef6a0f370c08973->leave($__internal_470552df176ae7954ec951ef3f025b1caf6bcf0eec3274745ef6a0f370c08973_prof);

        
        $__internal_fd3314fbd87193f7bce01be86119c8750ca0515ab3244fa0d5449195d4a01c31->leave($__internal_fd3314fbd87193f7bce01be86119c8750ca0515ab3244fa0d5449195d4a01c31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebbbdca84086b796a0c163a38c5cfde7c7feaa2438b11cd19a01f7c825d6dd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbbdca84086b796a0c163a38c5cfde7c7feaa2438b11cd19a01f7c825d6dd4e->enter($__internal_ebbbdca84086b796a0c163a38c5cfde7c7feaa2438b11cd19a01f7c825d6dd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_df32f39db6688371b36d152a3d65c55c65559cb15f1c3b01f8c6b68ec03f86f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df32f39db6688371b36d152a3d65c55c65559cb15f1c3b01f8c6b68ec03f86f2->enter($__internal_df32f39db6688371b36d152a3d65c55c65559cb15f1c3b01f8c6b68ec03f86f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_df32f39db6688371b36d152a3d65c55c65559cb15f1c3b01f8c6b68ec03f86f2->leave($__internal_df32f39db6688371b36d152a3d65c55c65559cb15f1c3b01f8c6b68ec03f86f2_prof);

        
        $__internal_ebbbdca84086b796a0c163a38c5cfde7c7feaa2438b11cd19a01f7c825d6dd4e->leave($__internal_ebbbdca84086b796a0c163a38c5cfde7c7feaa2438b11cd19a01f7c825d6dd4e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
