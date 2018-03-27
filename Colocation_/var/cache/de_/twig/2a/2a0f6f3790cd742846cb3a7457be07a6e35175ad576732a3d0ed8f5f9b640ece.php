<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_bcc85cddc98287c25911b36a22595ed542dcd55a495ecceeeb7a30e68e23a853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a5e58f15c7083893b1924d531da7044455000a9988445ac869e06e466f6c3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5e58f15c7083893b1924d531da7044455000a9988445ac869e06e466f6c3bb->enter($__internal_6a5e58f15c7083893b1924d531da7044455000a9988445ac869e06e466f6c3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_4b726b50eb87b468e0dac750682253f2c27f808c6ac4005144531f85a5e00432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b726b50eb87b468e0dac750682253f2c27f808c6ac4005144531f85a5e00432->enter($__internal_4b726b50eb87b468e0dac750682253f2c27f808c6ac4005144531f85a5e00432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a5e58f15c7083893b1924d531da7044455000a9988445ac869e06e466f6c3bb->leave($__internal_6a5e58f15c7083893b1924d531da7044455000a9988445ac869e06e466f6c3bb_prof);

        
        $__internal_4b726b50eb87b468e0dac750682253f2c27f808c6ac4005144531f85a5e00432->leave($__internal_4b726b50eb87b468e0dac750682253f2c27f808c6ac4005144531f85a5e00432_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d3f9efbe7a3b9bf95f837aa178cdc72f295f71c2ac7c5a6c41eb001fe0a5909c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f9efbe7a3b9bf95f837aa178cdc72f295f71c2ac7c5a6c41eb001fe0a5909c->enter($__internal_d3f9efbe7a3b9bf95f837aa178cdc72f295f71c2ac7c5a6c41eb001fe0a5909c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e0e8fdfda5ec19cf6103ea11def0939f95b3f91c13101f7b06d01f50cb00b1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e8fdfda5ec19cf6103ea11def0939f95b3f91c13101f7b06d01f50cb00b1fc->enter($__internal_e0e8fdfda5ec19cf6103ea11def0939f95b3f91c13101f7b06d01f50cb00b1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e0e8fdfda5ec19cf6103ea11def0939f95b3f91c13101f7b06d01f50cb00b1fc->leave($__internal_e0e8fdfda5ec19cf6103ea11def0939f95b3f91c13101f7b06d01f50cb00b1fc_prof);

        
        $__internal_d3f9efbe7a3b9bf95f837aa178cdc72f295f71c2ac7c5a6c41eb001fe0a5909c->leave($__internal_d3f9efbe7a3b9bf95f837aa178cdc72f295f71c2ac7c5a6c41eb001fe0a5909c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dab41d1ca47a96eafeffd187a82fa6de7bb0530dcdaf9fcc3eba5b9587f1935f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab41d1ca47a96eafeffd187a82fa6de7bb0530dcdaf9fcc3eba5b9587f1935f->enter($__internal_dab41d1ca47a96eafeffd187a82fa6de7bb0530dcdaf9fcc3eba5b9587f1935f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b461ebeab924129a7f108d639e76c8a6f0dad1030db48f301a3a681cf0b2022e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b461ebeab924129a7f108d639e76c8a6f0dad1030db48f301a3a681cf0b2022e->enter($__internal_b461ebeab924129a7f108d639e76c8a6f0dad1030db48f301a3a681cf0b2022e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b461ebeab924129a7f108d639e76c8a6f0dad1030db48f301a3a681cf0b2022e->leave($__internal_b461ebeab924129a7f108d639e76c8a6f0dad1030db48f301a3a681cf0b2022e_prof);

        
        $__internal_dab41d1ca47a96eafeffd187a82fa6de7bb0530dcdaf9fcc3eba5b9587f1935f->leave($__internal_dab41d1ca47a96eafeffd187a82fa6de7bb0530dcdaf9fcc3eba5b9587f1935f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
