<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_6d1a76c75c18f003fb07e4704d107f87ff3de6d56d3795f3ae5582b76310882f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_7a6a1320305a7afc889ab663c4e158aa1988e42cda547fa64a3ae07ca54af626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6a1320305a7afc889ab663c4e158aa1988e42cda547fa64a3ae07ca54af626->enter($__internal_7a6a1320305a7afc889ab663c4e158aa1988e42cda547fa64a3ae07ca54af626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_61a0a6b820764247afa4189ce027aec8bb25c4fa61a38b1fc2c49e000318c03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a0a6b820764247afa4189ce027aec8bb25c4fa61a38b1fc2c49e000318c03a->enter($__internal_61a0a6b820764247afa4189ce027aec8bb25c4fa61a38b1fc2c49e000318c03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6a1320305a7afc889ab663c4e158aa1988e42cda547fa64a3ae07ca54af626->leave($__internal_7a6a1320305a7afc889ab663c4e158aa1988e42cda547fa64a3ae07ca54af626_prof);

        
        $__internal_61a0a6b820764247afa4189ce027aec8bb25c4fa61a38b1fc2c49e000318c03a->leave($__internal_61a0a6b820764247afa4189ce027aec8bb25c4fa61a38b1fc2c49e000318c03a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9c3836b170a48d09f199360f732330443e62d1ef40753986563225630d917d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c3836b170a48d09f199360f732330443e62d1ef40753986563225630d917d2->enter($__internal_b9c3836b170a48d09f199360f732330443e62d1ef40753986563225630d917d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1528c85c7cc58424e75269a65e8cd38a0451578818b81a07c71d6dd2506631b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1528c85c7cc58424e75269a65e8cd38a0451578818b81a07c71d6dd2506631b5->enter($__internal_1528c85c7cc58424e75269a65e8cd38a0451578818b81a07c71d6dd2506631b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_1528c85c7cc58424e75269a65e8cd38a0451578818b81a07c71d6dd2506631b5->leave($__internal_1528c85c7cc58424e75269a65e8cd38a0451578818b81a07c71d6dd2506631b5_prof);

        
        $__internal_b9c3836b170a48d09f199360f732330443e62d1ef40753986563225630d917d2->leave($__internal_b9c3836b170a48d09f199360f732330443e62d1ef40753986563225630d917d2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
