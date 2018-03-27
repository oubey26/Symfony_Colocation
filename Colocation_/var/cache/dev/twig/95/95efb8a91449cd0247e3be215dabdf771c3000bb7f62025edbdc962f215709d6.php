<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4f1ca0084d2da60ccdc3cb3082cee36effc51e4708754102f701a64768d3c6ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f015f996586a9abafe8f9cd259b3546e2a502569887a03667c23cd76f5b180ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f015f996586a9abafe8f9cd259b3546e2a502569887a03667c23cd76f5b180ea->enter($__internal_f015f996586a9abafe8f9cd259b3546e2a502569887a03667c23cd76f5b180ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_529f0a2a7f92b33cde85291111b6261b5feef4a2309d8e23d144126df9d47cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529f0a2a7f92b33cde85291111b6261b5feef4a2309d8e23d144126df9d47cfc->enter($__internal_529f0a2a7f92b33cde85291111b6261b5feef4a2309d8e23d144126df9d47cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f015f996586a9abafe8f9cd259b3546e2a502569887a03667c23cd76f5b180ea->leave($__internal_f015f996586a9abafe8f9cd259b3546e2a502569887a03667c23cd76f5b180ea_prof);

        
        $__internal_529f0a2a7f92b33cde85291111b6261b5feef4a2309d8e23d144126df9d47cfc->leave($__internal_529f0a2a7f92b33cde85291111b6261b5feef4a2309d8e23d144126df9d47cfc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b29f6df249e26875152a738817be3c0ed6bcb16c38daf161748a470bb77046a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b29f6df249e26875152a738817be3c0ed6bcb16c38daf161748a470bb77046a->enter($__internal_9b29f6df249e26875152a738817be3c0ed6bcb16c38daf161748a470bb77046a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9fbd2bdf5e792c3a8475fbd782486c9adfe70af78d5e4df635f3b0f822d8ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fbd2bdf5e792c3a8475fbd782486c9adfe70af78d5e4df635f3b0f822d8ea1->enter($__internal_e9fbd2bdf5e792c3a8475fbd782486c9adfe70af78d5e4df635f3b0f822d8ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e9fbd2bdf5e792c3a8475fbd782486c9adfe70af78d5e4df635f3b0f822d8ea1->leave($__internal_e9fbd2bdf5e792c3a8475fbd782486c9adfe70af78d5e4df635f3b0f822d8ea1_prof);

        
        $__internal_9b29f6df249e26875152a738817be3c0ed6bcb16c38daf161748a470bb77046a->leave($__internal_9b29f6df249e26875152a738817be3c0ed6bcb16c38daf161748a470bb77046a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
