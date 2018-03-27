<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_1e6f14df70cfe98711e5ce207576d099bafb02951945dd594203fb7b0a811e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_70159c917f51ac9b1f861b47f93042a227a7c4b5b6a1f3305b98bbe371110d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70159c917f51ac9b1f861b47f93042a227a7c4b5b6a1f3305b98bbe371110d23->enter($__internal_70159c917f51ac9b1f861b47f93042a227a7c4b5b6a1f3305b98bbe371110d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_65ef0e046218193cc74b7ece949eb29d453de8151390507b31291d00d61ce191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ef0e046218193cc74b7ece949eb29d453de8151390507b31291d00d61ce191->enter($__internal_65ef0e046218193cc74b7ece949eb29d453de8151390507b31291d00d61ce191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70159c917f51ac9b1f861b47f93042a227a7c4b5b6a1f3305b98bbe371110d23->leave($__internal_70159c917f51ac9b1f861b47f93042a227a7c4b5b6a1f3305b98bbe371110d23_prof);

        
        $__internal_65ef0e046218193cc74b7ece949eb29d453de8151390507b31291d00d61ce191->leave($__internal_65ef0e046218193cc74b7ece949eb29d453de8151390507b31291d00d61ce191_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d373caef65602b0b4b7bb4c57f589cf9d101a32d6471bbfe8438bf44d45f6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d373caef65602b0b4b7bb4c57f589cf9d101a32d6471bbfe8438bf44d45f6c6->enter($__internal_5d373caef65602b0b4b7bb4c57f589cf9d101a32d6471bbfe8438bf44d45f6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_53aabef7a544ad6a8ecad9c343478b30112ba505410e873b14d78a38c3137857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53aabef7a544ad6a8ecad9c343478b30112ba505410e873b14d78a38c3137857->enter($__internal_53aabef7a544ad6a8ecad9c343478b30112ba505410e873b14d78a38c3137857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_53aabef7a544ad6a8ecad9c343478b30112ba505410e873b14d78a38c3137857->leave($__internal_53aabef7a544ad6a8ecad9c343478b30112ba505410e873b14d78a38c3137857_prof);

        
        $__internal_5d373caef65602b0b4b7bb4c57f589cf9d101a32d6471bbfe8438bf44d45f6c6->leave($__internal_5d373caef65602b0b4b7bb4c57f589cf9d101a32d6471bbfe8438bf44d45f6c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
