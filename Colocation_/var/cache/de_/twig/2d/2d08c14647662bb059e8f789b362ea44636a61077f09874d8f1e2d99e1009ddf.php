<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2d9bd5bfec2bdaf28f3d3a0f7587060765c23e434aa3819339dc146d079008c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_7d56773f70974bf4654f17714c282a4d70eea0b2483aa7881cb0c71391e2253a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d56773f70974bf4654f17714c282a4d70eea0b2483aa7881cb0c71391e2253a->enter($__internal_7d56773f70974bf4654f17714c282a4d70eea0b2483aa7881cb0c71391e2253a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_b7f96c210b635b9fc5910b0f0d1cb8c3ebd5b2fec4c0bfb972f527e7406f4d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f96c210b635b9fc5910b0f0d1cb8c3ebd5b2fec4c0bfb972f527e7406f4d5e->enter($__internal_b7f96c210b635b9fc5910b0f0d1cb8c3ebd5b2fec4c0bfb972f527e7406f4d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d56773f70974bf4654f17714c282a4d70eea0b2483aa7881cb0c71391e2253a->leave($__internal_7d56773f70974bf4654f17714c282a4d70eea0b2483aa7881cb0c71391e2253a_prof);

        
        $__internal_b7f96c210b635b9fc5910b0f0d1cb8c3ebd5b2fec4c0bfb972f527e7406f4d5e->leave($__internal_b7f96c210b635b9fc5910b0f0d1cb8c3ebd5b2fec4c0bfb972f527e7406f4d5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22d2c508e538d618222a813afe6e06a45f63d4e73db7c4a3dde98993f1c84189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d2c508e538d618222a813afe6e06a45f63d4e73db7c4a3dde98993f1c84189->enter($__internal_22d2c508e538d618222a813afe6e06a45f63d4e73db7c4a3dde98993f1c84189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_164c65fe211353569f8ee8b3c3ba84510af7e5de42c2da20435e199e7069e9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164c65fe211353569f8ee8b3c3ba84510af7e5de42c2da20435e199e7069e9df->enter($__internal_164c65fe211353569f8ee8b3c3ba84510af7e5de42c2da20435e199e7069e9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_164c65fe211353569f8ee8b3c3ba84510af7e5de42c2da20435e199e7069e9df->leave($__internal_164c65fe211353569f8ee8b3c3ba84510af7e5de42c2da20435e199e7069e9df_prof);

        
        $__internal_22d2c508e538d618222a813afe6e06a45f63d4e73db7c4a3dde98993f1c84189->leave($__internal_22d2c508e538d618222a813afe6e06a45f63d4e73db7c4a3dde98993f1c84189_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
