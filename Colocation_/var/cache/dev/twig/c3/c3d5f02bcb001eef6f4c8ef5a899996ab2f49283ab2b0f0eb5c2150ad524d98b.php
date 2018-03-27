<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fa3451eb5da5ef514f1df9406c2b551bb59d2c12934b5bddc2da20b43bd5eb58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_9cc50e7d88ba4137ea14fdce406c907f96cda33d7f31fea2405f914772a91a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc50e7d88ba4137ea14fdce406c907f96cda33d7f31fea2405f914772a91a10->enter($__internal_9cc50e7d88ba4137ea14fdce406c907f96cda33d7f31fea2405f914772a91a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_392e2557e193ddf7c549beb81faecfa9baaebb2af91d8fe52281d7178fb9888a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392e2557e193ddf7c549beb81faecfa9baaebb2af91d8fe52281d7178fb9888a->enter($__internal_392e2557e193ddf7c549beb81faecfa9baaebb2af91d8fe52281d7178fb9888a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc50e7d88ba4137ea14fdce406c907f96cda33d7f31fea2405f914772a91a10->leave($__internal_9cc50e7d88ba4137ea14fdce406c907f96cda33d7f31fea2405f914772a91a10_prof);

        
        $__internal_392e2557e193ddf7c549beb81faecfa9baaebb2af91d8fe52281d7178fb9888a->leave($__internal_392e2557e193ddf7c549beb81faecfa9baaebb2af91d8fe52281d7178fb9888a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_353326db33c5a46640ce5bae26d2940204ca64deded8ec717fe49b01b33a98d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353326db33c5a46640ce5bae26d2940204ca64deded8ec717fe49b01b33a98d5->enter($__internal_353326db33c5a46640ce5bae26d2940204ca64deded8ec717fe49b01b33a98d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4901e244911a38a15b72addf936699364342d44575e0a729bcae988ba34e52ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4901e244911a38a15b72addf936699364342d44575e0a729bcae988ba34e52ff->enter($__internal_4901e244911a38a15b72addf936699364342d44575e0a729bcae988ba34e52ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4901e244911a38a15b72addf936699364342d44575e0a729bcae988ba34e52ff->leave($__internal_4901e244911a38a15b72addf936699364342d44575e0a729bcae988ba34e52ff_prof);

        
        $__internal_353326db33c5a46640ce5bae26d2940204ca64deded8ec717fe49b01b33a98d5->leave($__internal_353326db33c5a46640ce5bae26d2940204ca64deded8ec717fe49b01b33a98d5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
