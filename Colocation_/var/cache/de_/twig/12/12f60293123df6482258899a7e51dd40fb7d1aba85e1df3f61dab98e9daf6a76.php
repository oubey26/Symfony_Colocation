<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_17917e76094abbf6c0cea6b81a482b75d679ef4da9700fd60ed343f0f91a9064 extends Twig_Template
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
        $__internal_ec5fe74f35c111169b065c4550fcbd3a2abff6b310360656f17c89283c9ed85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5fe74f35c111169b065c4550fcbd3a2abff6b310360656f17c89283c9ed85d->enter($__internal_ec5fe74f35c111169b065c4550fcbd3a2abff6b310360656f17c89283c9ed85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1e596386b09fe8906f1a1f4a7c205666cee11b162d880576d3abc4cf83c1f125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e596386b09fe8906f1a1f4a7c205666cee11b162d880576d3abc4cf83c1f125->enter($__internal_1e596386b09fe8906f1a1f4a7c205666cee11b162d880576d3abc4cf83c1f125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec5fe74f35c111169b065c4550fcbd3a2abff6b310360656f17c89283c9ed85d->leave($__internal_ec5fe74f35c111169b065c4550fcbd3a2abff6b310360656f17c89283c9ed85d_prof);

        
        $__internal_1e596386b09fe8906f1a1f4a7c205666cee11b162d880576d3abc4cf83c1f125->leave($__internal_1e596386b09fe8906f1a1f4a7c205666cee11b162d880576d3abc4cf83c1f125_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b3d80fc5a4b7b439079c0b5ff3026404ff5f6b2e88353c6c654fa5e04e349c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3d80fc5a4b7b439079c0b5ff3026404ff5f6b2e88353c6c654fa5e04e349c5->enter($__internal_6b3d80fc5a4b7b439079c0b5ff3026404ff5f6b2e88353c6c654fa5e04e349c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_47477c2b199af6da0d0efa874e595c9fafe93065e16098d51a5cd20ce086ba69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47477c2b199af6da0d0efa874e595c9fafe93065e16098d51a5cd20ce086ba69->enter($__internal_47477c2b199af6da0d0efa874e595c9fafe93065e16098d51a5cd20ce086ba69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_47477c2b199af6da0d0efa874e595c9fafe93065e16098d51a5cd20ce086ba69->leave($__internal_47477c2b199af6da0d0efa874e595c9fafe93065e16098d51a5cd20ce086ba69_prof);

        
        $__internal_6b3d80fc5a4b7b439079c0b5ff3026404ff5f6b2e88353c6c654fa5e04e349c5->leave($__internal_6b3d80fc5a4b7b439079c0b5ff3026404ff5f6b2e88353c6c654fa5e04e349c5_prof);

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
