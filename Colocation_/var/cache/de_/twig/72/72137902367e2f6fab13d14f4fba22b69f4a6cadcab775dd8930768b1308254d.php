<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_57b92c03290840a904e5ebdaf1e85e141c4e072b9df2b236fe8d7a1621553c0f extends Twig_Template
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
        $__internal_fb04236485899c133cf9d3bd836ec4d473716f5f9a10b8e5d04f3cb75406878b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb04236485899c133cf9d3bd836ec4d473716f5f9a10b8e5d04f3cb75406878b->enter($__internal_fb04236485899c133cf9d3bd836ec4d473716f5f9a10b8e5d04f3cb75406878b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_fe48490857d94b5ed758da79249bfba91a2448e69c2e021e5ea26f06593f6c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe48490857d94b5ed758da79249bfba91a2448e69c2e021e5ea26f06593f6c40->enter($__internal_fe48490857d94b5ed758da79249bfba91a2448e69c2e021e5ea26f06593f6c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb04236485899c133cf9d3bd836ec4d473716f5f9a10b8e5d04f3cb75406878b->leave($__internal_fb04236485899c133cf9d3bd836ec4d473716f5f9a10b8e5d04f3cb75406878b_prof);

        
        $__internal_fe48490857d94b5ed758da79249bfba91a2448e69c2e021e5ea26f06593f6c40->leave($__internal_fe48490857d94b5ed758da79249bfba91a2448e69c2e021e5ea26f06593f6c40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f8f5d1c0308c44f847e1899599f24463bc6a1d18b15ac82c1d7c39ddc838f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8f5d1c0308c44f847e1899599f24463bc6a1d18b15ac82c1d7c39ddc838f9b->enter($__internal_6f8f5d1c0308c44f847e1899599f24463bc6a1d18b15ac82c1d7c39ddc838f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e71e3ed1a004c60a7584ccddae60c3387fe32b6573b6d578f18ae3c4b990e4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71e3ed1a004c60a7584ccddae60c3387fe32b6573b6d578f18ae3c4b990e4ff->enter($__internal_e71e3ed1a004c60a7584ccddae60c3387fe32b6573b6d578f18ae3c4b990e4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e71e3ed1a004c60a7584ccddae60c3387fe32b6573b6d578f18ae3c4b990e4ff->leave($__internal_e71e3ed1a004c60a7584ccddae60c3387fe32b6573b6d578f18ae3c4b990e4ff_prof);

        
        $__internal_6f8f5d1c0308c44f847e1899599f24463bc6a1d18b15ac82c1d7c39ddc838f9b->leave($__internal_6f8f5d1c0308c44f847e1899599f24463bc6a1d18b15ac82c1d7c39ddc838f9b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c98aebae92282e23b62f197efc846beacd1d6c8eb3d1b17e022f49792e0fbd00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98aebae92282e23b62f197efc846beacd1d6c8eb3d1b17e022f49792e0fbd00->enter($__internal_c98aebae92282e23b62f197efc846beacd1d6c8eb3d1b17e022f49792e0fbd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb302a426d9787535fefc3bbf5550155a520377ca8f5bc641ef6d6585325aac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb302a426d9787535fefc3bbf5550155a520377ca8f5bc641ef6d6585325aac7->enter($__internal_cb302a426d9787535fefc3bbf5550155a520377ca8f5bc641ef6d6585325aac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb302a426d9787535fefc3bbf5550155a520377ca8f5bc641ef6d6585325aac7->leave($__internal_cb302a426d9787535fefc3bbf5550155a520377ca8f5bc641ef6d6585325aac7_prof);

        
        $__internal_c98aebae92282e23b62f197efc846beacd1d6c8eb3d1b17e022f49792e0fbd00->leave($__internal_c98aebae92282e23b62f197efc846beacd1d6c8eb3d1b17e022f49792e0fbd00_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8515afd51e076290ab89e38bcb73ddfb76c769795758a7b0603764c7bbefe6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8515afd51e076290ab89e38bcb73ddfb76c769795758a7b0603764c7bbefe6c->enter($__internal_f8515afd51e076290ab89e38bcb73ddfb76c769795758a7b0603764c7bbefe6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdd60a91389257f0c936a4bbc58fe445e5e18a705dcdadb8795d82008187b9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd60a91389257f0c936a4bbc58fe445e5e18a705dcdadb8795d82008187b9d1->enter($__internal_cdd60a91389257f0c936a4bbc58fe445e5e18a705dcdadb8795d82008187b9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_cdd60a91389257f0c936a4bbc58fe445e5e18a705dcdadb8795d82008187b9d1->leave($__internal_cdd60a91389257f0c936a4bbc58fe445e5e18a705dcdadb8795d82008187b9d1_prof);

        
        $__internal_f8515afd51e076290ab89e38bcb73ddfb76c769795758a7b0603764c7bbefe6c->leave($__internal_f8515afd51e076290ab89e38bcb73ddfb76c769795758a7b0603764c7bbefe6c_prof);

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
