<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_359c7f16cf685ac554e92fb4393104e5dc6f8f5c450c80a88461faac97249b6d extends Twig_Template
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
        $__internal_56705bdef819b6f4d48cac5337c2c790e165fbc1e5fea40b873e92923aaebf68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56705bdef819b6f4d48cac5337c2c790e165fbc1e5fea40b873e92923aaebf68->enter($__internal_56705bdef819b6f4d48cac5337c2c790e165fbc1e5fea40b873e92923aaebf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_da0070d8e960e3cc6182a391242bd916b0b89697337f8b76eed80f8d52613a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0070d8e960e3cc6182a391242bd916b0b89697337f8b76eed80f8d52613a16->enter($__internal_da0070d8e960e3cc6182a391242bd916b0b89697337f8b76eed80f8d52613a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56705bdef819b6f4d48cac5337c2c790e165fbc1e5fea40b873e92923aaebf68->leave($__internal_56705bdef819b6f4d48cac5337c2c790e165fbc1e5fea40b873e92923aaebf68_prof);

        
        $__internal_da0070d8e960e3cc6182a391242bd916b0b89697337f8b76eed80f8d52613a16->leave($__internal_da0070d8e960e3cc6182a391242bd916b0b89697337f8b76eed80f8d52613a16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2898fec1ff7a9a4692e19752e3a723be1c3947f49fb391bfbf6bf903c6af245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2898fec1ff7a9a4692e19752e3a723be1c3947f49fb391bfbf6bf903c6af245->enter($__internal_c2898fec1ff7a9a4692e19752e3a723be1c3947f49fb391bfbf6bf903c6af245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_506c8c630c7aa077f7cbb00411b626915093436ea7d65576487e1784abe8782c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506c8c630c7aa077f7cbb00411b626915093436ea7d65576487e1784abe8782c->enter($__internal_506c8c630c7aa077f7cbb00411b626915093436ea7d65576487e1784abe8782c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_506c8c630c7aa077f7cbb00411b626915093436ea7d65576487e1784abe8782c->leave($__internal_506c8c630c7aa077f7cbb00411b626915093436ea7d65576487e1784abe8782c_prof);

        
        $__internal_c2898fec1ff7a9a4692e19752e3a723be1c3947f49fb391bfbf6bf903c6af245->leave($__internal_c2898fec1ff7a9a4692e19752e3a723be1c3947f49fb391bfbf6bf903c6af245_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d024421e96dbb50a5cdc8f9c3b3295b6c99e43c9d83b001c7fe4b655cae8c724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d024421e96dbb50a5cdc8f9c3b3295b6c99e43c9d83b001c7fe4b655cae8c724->enter($__internal_d024421e96dbb50a5cdc8f9c3b3295b6c99e43c9d83b001c7fe4b655cae8c724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_203f9ac4f7d2ea2fba619ac6ed21421b43512ace7da2887139c949c4070d7720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203f9ac4f7d2ea2fba619ac6ed21421b43512ace7da2887139c949c4070d7720->enter($__internal_203f9ac4f7d2ea2fba619ac6ed21421b43512ace7da2887139c949c4070d7720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_203f9ac4f7d2ea2fba619ac6ed21421b43512ace7da2887139c949c4070d7720->leave($__internal_203f9ac4f7d2ea2fba619ac6ed21421b43512ace7da2887139c949c4070d7720_prof);

        
        $__internal_d024421e96dbb50a5cdc8f9c3b3295b6c99e43c9d83b001c7fe4b655cae8c724->leave($__internal_d024421e96dbb50a5cdc8f9c3b3295b6c99e43c9d83b001c7fe4b655cae8c724_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3e85b4397f5d90ac26df75c4fa30f094220a890ec16a7c794cc23bb9a1e8482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e85b4397f5d90ac26df75c4fa30f094220a890ec16a7c794cc23bb9a1e8482->enter($__internal_b3e85b4397f5d90ac26df75c4fa30f094220a890ec16a7c794cc23bb9a1e8482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a139b96c2f71a5d00359d7cba8cd37a131f2d91bc0256b62f77ec0433ca3025f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a139b96c2f71a5d00359d7cba8cd37a131f2d91bc0256b62f77ec0433ca3025f->enter($__internal_a139b96c2f71a5d00359d7cba8cd37a131f2d91bc0256b62f77ec0433ca3025f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a139b96c2f71a5d00359d7cba8cd37a131f2d91bc0256b62f77ec0433ca3025f->leave($__internal_a139b96c2f71a5d00359d7cba8cd37a131f2d91bc0256b62f77ec0433ca3025f_prof);

        
        $__internal_b3e85b4397f5d90ac26df75c4fa30f094220a890ec16a7c794cc23bb9a1e8482->leave($__internal_b3e85b4397f5d90ac26df75c4fa30f094220a890ec16a7c794cc23bb9a1e8482_prof);

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
