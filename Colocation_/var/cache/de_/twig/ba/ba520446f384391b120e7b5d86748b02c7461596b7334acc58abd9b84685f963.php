<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_3132fcedad70e91f7e053b8891be6632b3ba53207f9b657bb08fd56f84c63e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_81371d61d3898cedd8f95022e50502e538183ce245e7e095c2fdf796caacde46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81371d61d3898cedd8f95022e50502e538183ce245e7e095c2fdf796caacde46->enter($__internal_81371d61d3898cedd8f95022e50502e538183ce245e7e095c2fdf796caacde46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_848cec84e71607a4a51449d47e9de701f557463656eaf53e3f26c661bcedcbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848cec84e71607a4a51449d47e9de701f557463656eaf53e3f26c661bcedcbef->enter($__internal_848cec84e71607a4a51449d47e9de701f557463656eaf53e3f26c661bcedcbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81371d61d3898cedd8f95022e50502e538183ce245e7e095c2fdf796caacde46->leave($__internal_81371d61d3898cedd8f95022e50502e538183ce245e7e095c2fdf796caacde46_prof);

        
        $__internal_848cec84e71607a4a51449d47e9de701f557463656eaf53e3f26c661bcedcbef->leave($__internal_848cec84e71607a4a51449d47e9de701f557463656eaf53e3f26c661bcedcbef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_acc31a7ae756912959bc777b040e3b5ec4d5c41e42f0a7f8c8f269637449dac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc31a7ae756912959bc777b040e3b5ec4d5c41e42f0a7f8c8f269637449dac5->enter($__internal_acc31a7ae756912959bc777b040e3b5ec4d5c41e42f0a7f8c8f269637449dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_23124bd75c911b98f9ace730180a9e11b01a290fefc0beb175afbb5a69627497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23124bd75c911b98f9ace730180a9e11b01a290fefc0beb175afbb5a69627497->enter($__internal_23124bd75c911b98f9ace730180a9e11b01a290fefc0beb175afbb5a69627497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_23124bd75c911b98f9ace730180a9e11b01a290fefc0beb175afbb5a69627497->leave($__internal_23124bd75c911b98f9ace730180a9e11b01a290fefc0beb175afbb5a69627497_prof);

        
        $__internal_acc31a7ae756912959bc777b040e3b5ec4d5c41e42f0a7f8c8f269637449dac5->leave($__internal_acc31a7ae756912959bc777b040e3b5ec4d5c41e42f0a7f8c8f269637449dac5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
