<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8f38ff2aa5d1a62de58752e7b569ebca4c87723f000fee69ffd859251eb9e017 extends Twig_Template
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
        $__internal_daad46bf55fb9146d850d7f2c889995ac2131eef42e4f21620a496309b062294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daad46bf55fb9146d850d7f2c889995ac2131eef42e4f21620a496309b062294->enter($__internal_daad46bf55fb9146d850d7f2c889995ac2131eef42e4f21620a496309b062294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_62179d3c3b31665c1d6d2b192b888292456664defd79ad8f1e87134b7dfc6b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62179d3c3b31665c1d6d2b192b888292456664defd79ad8f1e87134b7dfc6b87->enter($__internal_62179d3c3b31665c1d6d2b192b888292456664defd79ad8f1e87134b7dfc6b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daad46bf55fb9146d850d7f2c889995ac2131eef42e4f21620a496309b062294->leave($__internal_daad46bf55fb9146d850d7f2c889995ac2131eef42e4f21620a496309b062294_prof);

        
        $__internal_62179d3c3b31665c1d6d2b192b888292456664defd79ad8f1e87134b7dfc6b87->leave($__internal_62179d3c3b31665c1d6d2b192b888292456664defd79ad8f1e87134b7dfc6b87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_090edfe5ddc5ba5f9ee27998af1e2d165a2410f23a5e3f9d9daf61413e41fa58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090edfe5ddc5ba5f9ee27998af1e2d165a2410f23a5e3f9d9daf61413e41fa58->enter($__internal_090edfe5ddc5ba5f9ee27998af1e2d165a2410f23a5e3f9d9daf61413e41fa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0476aef46c3bf42d9dc78349e65672328565193334f1d84cb90336ef68a6c7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0476aef46c3bf42d9dc78349e65672328565193334f1d84cb90336ef68a6c7c4->enter($__internal_0476aef46c3bf42d9dc78349e65672328565193334f1d84cb90336ef68a6c7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0476aef46c3bf42d9dc78349e65672328565193334f1d84cb90336ef68a6c7c4->leave($__internal_0476aef46c3bf42d9dc78349e65672328565193334f1d84cb90336ef68a6c7c4_prof);

        
        $__internal_090edfe5ddc5ba5f9ee27998af1e2d165a2410f23a5e3f9d9daf61413e41fa58->leave($__internal_090edfe5ddc5ba5f9ee27998af1e2d165a2410f23a5e3f9d9daf61413e41fa58_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f93c0d5a569d9ac1fe8f50018c4c00b275c4e8ea557503d26cdb3216e0712ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93c0d5a569d9ac1fe8f50018c4c00b275c4e8ea557503d26cdb3216e0712ffa->enter($__internal_f93c0d5a569d9ac1fe8f50018c4c00b275c4e8ea557503d26cdb3216e0712ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_137363a35b4539e28a14f36269650cd707d9fa41a6ad38f64a31dd6dfd9b4368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137363a35b4539e28a14f36269650cd707d9fa41a6ad38f64a31dd6dfd9b4368->enter($__internal_137363a35b4539e28a14f36269650cd707d9fa41a6ad38f64a31dd6dfd9b4368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_137363a35b4539e28a14f36269650cd707d9fa41a6ad38f64a31dd6dfd9b4368->leave($__internal_137363a35b4539e28a14f36269650cd707d9fa41a6ad38f64a31dd6dfd9b4368_prof);

        
        $__internal_f93c0d5a569d9ac1fe8f50018c4c00b275c4e8ea557503d26cdb3216e0712ffa->leave($__internal_f93c0d5a569d9ac1fe8f50018c4c00b275c4e8ea557503d26cdb3216e0712ffa_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0623d757b47a0c407c7c0774407d81c9b394a1bff8c3c7fcbf82b8645cd29058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0623d757b47a0c407c7c0774407d81c9b394a1bff8c3c7fcbf82b8645cd29058->enter($__internal_0623d757b47a0c407c7c0774407d81c9b394a1bff8c3c7fcbf82b8645cd29058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e3f0e4c619cc6e51cc59573c4833a5d4ce712259df5327b5a274fc5b1f0fe6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3f0e4c619cc6e51cc59573c4833a5d4ce712259df5327b5a274fc5b1f0fe6b->enter($__internal_3e3f0e4c619cc6e51cc59573c4833a5d4ce712259df5327b5a274fc5b1f0fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3e3f0e4c619cc6e51cc59573c4833a5d4ce712259df5327b5a274fc5b1f0fe6b->leave($__internal_3e3f0e4c619cc6e51cc59573c4833a5d4ce712259df5327b5a274fc5b1f0fe6b_prof);

        
        $__internal_0623d757b47a0c407c7c0774407d81c9b394a1bff8c3c7fcbf82b8645cd29058->leave($__internal_0623d757b47a0c407c7c0774407d81c9b394a1bff8c3c7fcbf82b8645cd29058_prof);

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
