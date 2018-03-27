<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_79be44d1e379f39c3d2c96dad383b8bbc5d5013fb73e00803a986a8ad7137d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1c7e5499e49939211e50ec96096b1480fd71f1d9861eb1d96ef536775885cf88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7e5499e49939211e50ec96096b1480fd71f1d9861eb1d96ef536775885cf88->enter($__internal_1c7e5499e49939211e50ec96096b1480fd71f1d9861eb1d96ef536775885cf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_58dede0c9aea79c19fe4ce354d15b6d3d9105c9a1dcbdf8900404fa003056cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58dede0c9aea79c19fe4ce354d15b6d3d9105c9a1dcbdf8900404fa003056cba->enter($__internal_58dede0c9aea79c19fe4ce354d15b6d3d9105c9a1dcbdf8900404fa003056cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c7e5499e49939211e50ec96096b1480fd71f1d9861eb1d96ef536775885cf88->leave($__internal_1c7e5499e49939211e50ec96096b1480fd71f1d9861eb1d96ef536775885cf88_prof);

        
        $__internal_58dede0c9aea79c19fe4ce354d15b6d3d9105c9a1dcbdf8900404fa003056cba->leave($__internal_58dede0c9aea79c19fe4ce354d15b6d3d9105c9a1dcbdf8900404fa003056cba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_490a86f0806f5e962c42f9b16bba9da4cfabc1b86e45f8bb76f888826f0662c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490a86f0806f5e962c42f9b16bba9da4cfabc1b86e45f8bb76f888826f0662c0->enter($__internal_490a86f0806f5e962c42f9b16bba9da4cfabc1b86e45f8bb76f888826f0662c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_10dcb4aebdf296a706d87fca0a198236317b0e7b104d33492678aea7167093d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10dcb4aebdf296a706d87fca0a198236317b0e7b104d33492678aea7167093d6->enter($__internal_10dcb4aebdf296a706d87fca0a198236317b0e7b104d33492678aea7167093d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_10dcb4aebdf296a706d87fca0a198236317b0e7b104d33492678aea7167093d6->leave($__internal_10dcb4aebdf296a706d87fca0a198236317b0e7b104d33492678aea7167093d6_prof);

        
        $__internal_490a86f0806f5e962c42f9b16bba9da4cfabc1b86e45f8bb76f888826f0662c0->leave($__internal_490a86f0806f5e962c42f9b16bba9da4cfabc1b86e45f8bb76f888826f0662c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
