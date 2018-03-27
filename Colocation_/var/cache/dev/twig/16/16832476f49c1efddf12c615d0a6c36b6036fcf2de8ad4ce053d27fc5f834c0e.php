<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11e00eb5402e2d53ec30974a42f9ba569adcd1abfd5a0a4b2f3c96a0e9ebb28d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1485d234668282e222f7b6727b894cb59281984de345316e60281d6cfe6b4a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1485d234668282e222f7b6727b894cb59281984de345316e60281d6cfe6b4a8->enter($__internal_e1485d234668282e222f7b6727b894cb59281984de345316e60281d6cfe6b4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_eb78e06882d8323bfc7ec4482cb62a1eb533ee98978da2a35ab47f0078f12a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb78e06882d8323bfc7ec4482cb62a1eb533ee98978da2a35ab47f0078f12a11->enter($__internal_eb78e06882d8323bfc7ec4482cb62a1eb533ee98978da2a35ab47f0078f12a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1485d234668282e222f7b6727b894cb59281984de345316e60281d6cfe6b4a8->leave($__internal_e1485d234668282e222f7b6727b894cb59281984de345316e60281d6cfe6b4a8_prof);

        
        $__internal_eb78e06882d8323bfc7ec4482cb62a1eb533ee98978da2a35ab47f0078f12a11->leave($__internal_eb78e06882d8323bfc7ec4482cb62a1eb533ee98978da2a35ab47f0078f12a11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eea82bec19422f8e70e8b3b1b14ee4c1b82b7f1af9af289d383a0645b20c5452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea82bec19422f8e70e8b3b1b14ee4c1b82b7f1af9af289d383a0645b20c5452->enter($__internal_eea82bec19422f8e70e8b3b1b14ee4c1b82b7f1af9af289d383a0645b20c5452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_205f4a5c1dec9f050fd1724d96081a61c661b5af7ddbb010728d40dac569a775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205f4a5c1dec9f050fd1724d96081a61c661b5af7ddbb010728d40dac569a775->enter($__internal_205f4a5c1dec9f050fd1724d96081a61c661b5af7ddbb010728d40dac569a775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_205f4a5c1dec9f050fd1724d96081a61c661b5af7ddbb010728d40dac569a775->leave($__internal_205f4a5c1dec9f050fd1724d96081a61c661b5af7ddbb010728d40dac569a775_prof);

        
        $__internal_eea82bec19422f8e70e8b3b1b14ee4c1b82b7f1af9af289d383a0645b20c5452->leave($__internal_eea82bec19422f8e70e8b3b1b14ee4c1b82b7f1af9af289d383a0645b20c5452_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a0e4c78a9cc59936ae844cacd641887eb6a9ae69a5f731d0ac665f27377ef06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0e4c78a9cc59936ae844cacd641887eb6a9ae69a5f731d0ac665f27377ef06->enter($__internal_5a0e4c78a9cc59936ae844cacd641887eb6a9ae69a5f731d0ac665f27377ef06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ffc94052a1a25bc6841fc1833b5b43cf302de7a10228c8aff1028ee008ccb97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc94052a1a25bc6841fc1833b5b43cf302de7a10228c8aff1028ee008ccb97e->enter($__internal_ffc94052a1a25bc6841fc1833b5b43cf302de7a10228c8aff1028ee008ccb97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ffc94052a1a25bc6841fc1833b5b43cf302de7a10228c8aff1028ee008ccb97e->leave($__internal_ffc94052a1a25bc6841fc1833b5b43cf302de7a10228c8aff1028ee008ccb97e_prof);

        
        $__internal_5a0e4c78a9cc59936ae844cacd641887eb6a9ae69a5f731d0ac665f27377ef06->leave($__internal_5a0e4c78a9cc59936ae844cacd641887eb6a9ae69a5f731d0ac665f27377ef06_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_875067e452c225b63670964e0b8e03284556c38dcadb8ca1a5737c56c29fc02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875067e452c225b63670964e0b8e03284556c38dcadb8ca1a5737c56c29fc02a->enter($__internal_875067e452c225b63670964e0b8e03284556c38dcadb8ca1a5737c56c29fc02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55cf1b678ed9945c1f01ef09081f7d5abdf52ebfd97174b3f9e360bf9c89e76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cf1b678ed9945c1f01ef09081f7d5abdf52ebfd97174b3f9e360bf9c89e76b->enter($__internal_55cf1b678ed9945c1f01ef09081f7d5abdf52ebfd97174b3f9e360bf9c89e76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_55cf1b678ed9945c1f01ef09081f7d5abdf52ebfd97174b3f9e360bf9c89e76b->leave($__internal_55cf1b678ed9945c1f01ef09081f7d5abdf52ebfd97174b3f9e360bf9c89e76b_prof);

        
        $__internal_875067e452c225b63670964e0b8e03284556c38dcadb8ca1a5737c56c29fc02a->leave($__internal_875067e452c225b63670964e0b8e03284556c38dcadb8ca1a5737c56c29fc02a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
