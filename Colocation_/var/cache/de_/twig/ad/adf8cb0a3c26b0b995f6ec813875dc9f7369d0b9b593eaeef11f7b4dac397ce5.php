<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ce61eecfe64c3074cad1a66e89ef58301d07ccc576f2a4e0f43d5d728ae85cbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_36df89fd7fa2eba1727560ab59d269f92a9a53a619ba776957bc153f5e624a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36df89fd7fa2eba1727560ab59d269f92a9a53a619ba776957bc153f5e624a94->enter($__internal_36df89fd7fa2eba1727560ab59d269f92a9a53a619ba776957bc153f5e624a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e10b687771601373aa39ec5ba4eb74800fd3e68edc6687a3cbbca1a2654409b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10b687771601373aa39ec5ba4eb74800fd3e68edc6687a3cbbca1a2654409b2->enter($__internal_e10b687771601373aa39ec5ba4eb74800fd3e68edc6687a3cbbca1a2654409b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36df89fd7fa2eba1727560ab59d269f92a9a53a619ba776957bc153f5e624a94->leave($__internal_36df89fd7fa2eba1727560ab59d269f92a9a53a619ba776957bc153f5e624a94_prof);

        
        $__internal_e10b687771601373aa39ec5ba4eb74800fd3e68edc6687a3cbbca1a2654409b2->leave($__internal_e10b687771601373aa39ec5ba4eb74800fd3e68edc6687a3cbbca1a2654409b2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5ea6e62fe652bee1884e1eda5c28709a154dd6e0e928906c45cf8346a575ff51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea6e62fe652bee1884e1eda5c28709a154dd6e0e928906c45cf8346a575ff51->enter($__internal_5ea6e62fe652bee1884e1eda5c28709a154dd6e0e928906c45cf8346a575ff51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4f52de92585fbb0ab3f105cc16557518981031f1eab5466e1192f8ad778dff5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f52de92585fbb0ab3f105cc16557518981031f1eab5466e1192f8ad778dff5c->enter($__internal_4f52de92585fbb0ab3f105cc16557518981031f1eab5466e1192f8ad778dff5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4f52de92585fbb0ab3f105cc16557518981031f1eab5466e1192f8ad778dff5c->leave($__internal_4f52de92585fbb0ab3f105cc16557518981031f1eab5466e1192f8ad778dff5c_prof);

        
        $__internal_5ea6e62fe652bee1884e1eda5c28709a154dd6e0e928906c45cf8346a575ff51->leave($__internal_5ea6e62fe652bee1884e1eda5c28709a154dd6e0e928906c45cf8346a575ff51_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c25eeece6773982c0661f8b21251dcfb5e9c7371d8ce6ec5e399048d4dc89791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25eeece6773982c0661f8b21251dcfb5e9c7371d8ce6ec5e399048d4dc89791->enter($__internal_c25eeece6773982c0661f8b21251dcfb5e9c7371d8ce6ec5e399048d4dc89791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b9ca31fb2e359a2b1b472cb0f75c5571fe40ece40fe562887a9174a4b032ddde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ca31fb2e359a2b1b472cb0f75c5571fe40ece40fe562887a9174a4b032ddde->enter($__internal_b9ca31fb2e359a2b1b472cb0f75c5571fe40ece40fe562887a9174a4b032ddde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b9ca31fb2e359a2b1b472cb0f75c5571fe40ece40fe562887a9174a4b032ddde->leave($__internal_b9ca31fb2e359a2b1b472cb0f75c5571fe40ece40fe562887a9174a4b032ddde_prof);

        
        $__internal_c25eeece6773982c0661f8b21251dcfb5e9c7371d8ce6ec5e399048d4dc89791->leave($__internal_c25eeece6773982c0661f8b21251dcfb5e9c7371d8ce6ec5e399048d4dc89791_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
