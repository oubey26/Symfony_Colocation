<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f7904ff62b417d5cbcfb8419229a1b3c2a5153bedd9a61afe09f828aacd51c6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_eaa6f8f215be92bfc4b6858f4c58e184bf939bccb3e1aaa2bb4357fa2822a001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa6f8f215be92bfc4b6858f4c58e184bf939bccb3e1aaa2bb4357fa2822a001->enter($__internal_eaa6f8f215be92bfc4b6858f4c58e184bf939bccb3e1aaa2bb4357fa2822a001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_380346bb690b10d1d3da3e6e7f63572c982458d729e1f8bfb623608e15c7a910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380346bb690b10d1d3da3e6e7f63572c982458d729e1f8bfb623608e15c7a910->enter($__internal_380346bb690b10d1d3da3e6e7f63572c982458d729e1f8bfb623608e15c7a910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa6f8f215be92bfc4b6858f4c58e184bf939bccb3e1aaa2bb4357fa2822a001->leave($__internal_eaa6f8f215be92bfc4b6858f4c58e184bf939bccb3e1aaa2bb4357fa2822a001_prof);

        
        $__internal_380346bb690b10d1d3da3e6e7f63572c982458d729e1f8bfb623608e15c7a910->leave($__internal_380346bb690b10d1d3da3e6e7f63572c982458d729e1f8bfb623608e15c7a910_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef0916b6c1c8a2fd0ce7c6df672f07c692e41a3afa79ed8628bfea4fdfe3b4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0916b6c1c8a2fd0ce7c6df672f07c692e41a3afa79ed8628bfea4fdfe3b4cf->enter($__internal_ef0916b6c1c8a2fd0ce7c6df672f07c692e41a3afa79ed8628bfea4fdfe3b4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd2c7ccd767258765ca40bb4cd685255cfb33e6bfa39e0f579bb8518af7de4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2c7ccd767258765ca40bb4cd685255cfb33e6bfa39e0f579bb8518af7de4aa->enter($__internal_dd2c7ccd767258765ca40bb4cd685255cfb33e6bfa39e0f579bb8518af7de4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dd2c7ccd767258765ca40bb4cd685255cfb33e6bfa39e0f579bb8518af7de4aa->leave($__internal_dd2c7ccd767258765ca40bb4cd685255cfb33e6bfa39e0f579bb8518af7de4aa_prof);

        
        $__internal_ef0916b6c1c8a2fd0ce7c6df672f07c692e41a3afa79ed8628bfea4fdfe3b4cf->leave($__internal_ef0916b6c1c8a2fd0ce7c6df672f07c692e41a3afa79ed8628bfea4fdfe3b4cf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f56738ee0623acfc6cff86e936c5b18656480bad76c99eded61a368b06dae26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56738ee0623acfc6cff86e936c5b18656480bad76c99eded61a368b06dae26d->enter($__internal_f56738ee0623acfc6cff86e936c5b18656480bad76c99eded61a368b06dae26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c124ee61f8d4b8a5e90c653e2054e865c639f3405ec4bc7e7ec83a2a3400920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c124ee61f8d4b8a5e90c653e2054e865c639f3405ec4bc7e7ec83a2a3400920->enter($__internal_4c124ee61f8d4b8a5e90c653e2054e865c639f3405ec4bc7e7ec83a2a3400920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c124ee61f8d4b8a5e90c653e2054e865c639f3405ec4bc7e7ec83a2a3400920->leave($__internal_4c124ee61f8d4b8a5e90c653e2054e865c639f3405ec4bc7e7ec83a2a3400920_prof);

        
        $__internal_f56738ee0623acfc6cff86e936c5b18656480bad76c99eded61a368b06dae26d->leave($__internal_f56738ee0623acfc6cff86e936c5b18656480bad76c99eded61a368b06dae26d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4926701ceb14eed386d23df38b4df3dee15407981e24170ed6bac1ea9506959a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4926701ceb14eed386d23df38b4df3dee15407981e24170ed6bac1ea9506959a->enter($__internal_4926701ceb14eed386d23df38b4df3dee15407981e24170ed6bac1ea9506959a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad11150de64d3846b0f53af0f7b19ade74c0a6450cea5be97e9dbf62278f2b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad11150de64d3846b0f53af0f7b19ade74c0a6450cea5be97e9dbf62278f2b22->enter($__internal_ad11150de64d3846b0f53af0f7b19ade74c0a6450cea5be97e9dbf62278f2b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ad11150de64d3846b0f53af0f7b19ade74c0a6450cea5be97e9dbf62278f2b22->leave($__internal_ad11150de64d3846b0f53af0f7b19ade74c0a6450cea5be97e9dbf62278f2b22_prof);

        
        $__internal_4926701ceb14eed386d23df38b4df3dee15407981e24170ed6bac1ea9506959a->leave($__internal_4926701ceb14eed386d23df38b4df3dee15407981e24170ed6bac1ea9506959a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
