<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f729202c5d2991cfcd1208b19a4f478d2e4941d001027370a6874962617170d8 extends Twig_Template
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
        $__internal_11ca9f2dbc0325c021ae22e2b3c6472b097f179d1e7bf22e3341adfdb21cd7b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ca9f2dbc0325c021ae22e2b3c6472b097f179d1e7bf22e3341adfdb21cd7b6->enter($__internal_11ca9f2dbc0325c021ae22e2b3c6472b097f179d1e7bf22e3341adfdb21cd7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_923e1e9c30cebfac90b893c504e7024aa89a7ac59a7e2881a0dfd390348bbb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923e1e9c30cebfac90b893c504e7024aa89a7ac59a7e2881a0dfd390348bbb03->enter($__internal_923e1e9c30cebfac90b893c504e7024aa89a7ac59a7e2881a0dfd390348bbb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11ca9f2dbc0325c021ae22e2b3c6472b097f179d1e7bf22e3341adfdb21cd7b6->leave($__internal_11ca9f2dbc0325c021ae22e2b3c6472b097f179d1e7bf22e3341adfdb21cd7b6_prof);

        
        $__internal_923e1e9c30cebfac90b893c504e7024aa89a7ac59a7e2881a0dfd390348bbb03->leave($__internal_923e1e9c30cebfac90b893c504e7024aa89a7ac59a7e2881a0dfd390348bbb03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_356255a584227b60c2f09ef9d016963080ee31be22140f63c2fed01a42ebcbb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356255a584227b60c2f09ef9d016963080ee31be22140f63c2fed01a42ebcbb3->enter($__internal_356255a584227b60c2f09ef9d016963080ee31be22140f63c2fed01a42ebcbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9f12ce96c01d31d20de155e31083cf7b5533686a01b0ba9da5b45e77a546050b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f12ce96c01d31d20de155e31083cf7b5533686a01b0ba9da5b45e77a546050b->enter($__internal_9f12ce96c01d31d20de155e31083cf7b5533686a01b0ba9da5b45e77a546050b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_9f12ce96c01d31d20de155e31083cf7b5533686a01b0ba9da5b45e77a546050b->leave($__internal_9f12ce96c01d31d20de155e31083cf7b5533686a01b0ba9da5b45e77a546050b_prof);

        
        $__internal_356255a584227b60c2f09ef9d016963080ee31be22140f63c2fed01a42ebcbb3->leave($__internal_356255a584227b60c2f09ef9d016963080ee31be22140f63c2fed01a42ebcbb3_prof);

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
