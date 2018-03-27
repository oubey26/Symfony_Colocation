<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d4ca1d18d5b83e01a69c1ad546ea848a5ccc3bd7b9231873aa786f8af5ecb400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_dd044361d1eab735481f61eaa65eeb59c0e103c24c687d5fcb1de232a1bf3244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd044361d1eab735481f61eaa65eeb59c0e103c24c687d5fcb1de232a1bf3244->enter($__internal_dd044361d1eab735481f61eaa65eeb59c0e103c24c687d5fcb1de232a1bf3244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_9e501d7ec51997bd1c7a167ceb8bb6c188dfcfcca5675e01c8e2d7fa4fc56981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e501d7ec51997bd1c7a167ceb8bb6c188dfcfcca5675e01c8e2d7fa4fc56981->enter($__internal_9e501d7ec51997bd1c7a167ceb8bb6c188dfcfcca5675e01c8e2d7fa4fc56981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd044361d1eab735481f61eaa65eeb59c0e103c24c687d5fcb1de232a1bf3244->leave($__internal_dd044361d1eab735481f61eaa65eeb59c0e103c24c687d5fcb1de232a1bf3244_prof);

        
        $__internal_9e501d7ec51997bd1c7a167ceb8bb6c188dfcfcca5675e01c8e2d7fa4fc56981->leave($__internal_9e501d7ec51997bd1c7a167ceb8bb6c188dfcfcca5675e01c8e2d7fa4fc56981_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef43e6ffa55f0854fb7cf97940b5b031293e8bc6c58b578d32b8c079f3c9d698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef43e6ffa55f0854fb7cf97940b5b031293e8bc6c58b578d32b8c079f3c9d698->enter($__internal_ef43e6ffa55f0854fb7cf97940b5b031293e8bc6c58b578d32b8c079f3c9d698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e019adc38c913fc6a55e152b64d138ebc47a61ecda65c076d9a55230df00ec6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e019adc38c913fc6a55e152b64d138ebc47a61ecda65c076d9a55230df00ec6a->enter($__internal_e019adc38c913fc6a55e152b64d138ebc47a61ecda65c076d9a55230df00ec6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e019adc38c913fc6a55e152b64d138ebc47a61ecda65c076d9a55230df00ec6a->leave($__internal_e019adc38c913fc6a55e152b64d138ebc47a61ecda65c076d9a55230df00ec6a_prof);

        
        $__internal_ef43e6ffa55f0854fb7cf97940b5b031293e8bc6c58b578d32b8c079f3c9d698->leave($__internal_ef43e6ffa55f0854fb7cf97940b5b031293e8bc6c58b578d32b8c079f3c9d698_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
