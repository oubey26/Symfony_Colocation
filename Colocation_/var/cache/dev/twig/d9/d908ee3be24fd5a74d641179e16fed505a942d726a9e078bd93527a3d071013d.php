<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_20dd8f026a6be872fae40cc9feeaa4a537b62b9e73f2a411eef07c23c2da3ca8 extends Twig_Template
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
        $__internal_d51c586c1f0a3d28f34855fd77d2ec76b4248c387efcfaf82261559bbbdc2bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51c586c1f0a3d28f34855fd77d2ec76b4248c387efcfaf82261559bbbdc2bfc->enter($__internal_d51c586c1f0a3d28f34855fd77d2ec76b4248c387efcfaf82261559bbbdc2bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_dde47bae19e7784621b38d5621f9936cea1d5dbaa2304f37fbaa6209bbecf721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde47bae19e7784621b38d5621f9936cea1d5dbaa2304f37fbaa6209bbecf721->enter($__internal_dde47bae19e7784621b38d5621f9936cea1d5dbaa2304f37fbaa6209bbecf721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d51c586c1f0a3d28f34855fd77d2ec76b4248c387efcfaf82261559bbbdc2bfc->leave($__internal_d51c586c1f0a3d28f34855fd77d2ec76b4248c387efcfaf82261559bbbdc2bfc_prof);

        
        $__internal_dde47bae19e7784621b38d5621f9936cea1d5dbaa2304f37fbaa6209bbecf721->leave($__internal_dde47bae19e7784621b38d5621f9936cea1d5dbaa2304f37fbaa6209bbecf721_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_566c61ff8da944d451eec4e3b563dbbe596cfc6406c558ac0c10393f6d5ff01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566c61ff8da944d451eec4e3b563dbbe596cfc6406c558ac0c10393f6d5ff01c->enter($__internal_566c61ff8da944d451eec4e3b563dbbe596cfc6406c558ac0c10393f6d5ff01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7ed7e4cb8b5dabff40c603d6e6d2ea3bd267a4376ae88d76649d6d970a237bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed7e4cb8b5dabff40c603d6e6d2ea3bd267a4376ae88d76649d6d970a237bf2->enter($__internal_7ed7e4cb8b5dabff40c603d6e6d2ea3bd267a4376ae88d76649d6d970a237bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_7ed7e4cb8b5dabff40c603d6e6d2ea3bd267a4376ae88d76649d6d970a237bf2->leave($__internal_7ed7e4cb8b5dabff40c603d6e6d2ea3bd267a4376ae88d76649d6d970a237bf2_prof);

        
        $__internal_566c61ff8da944d451eec4e3b563dbbe596cfc6406c558ac0c10393f6d5ff01c->leave($__internal_566c61ff8da944d451eec4e3b563dbbe596cfc6406c558ac0c10393f6d5ff01c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7ea7e2778a488b8cfa1bdc7d70e15a59cdd7fb4a2d3aee58947988a8452256a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ea7e2778a488b8cfa1bdc7d70e15a59cdd7fb4a2d3aee58947988a8452256a->enter($__internal_a7ea7e2778a488b8cfa1bdc7d70e15a59cdd7fb4a2d3aee58947988a8452256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae29c099053043d888180d73a5a1ed24e788814b98688a12dc8c78ca31d05f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae29c099053043d888180d73a5a1ed24e788814b98688a12dc8c78ca31d05f96->enter($__internal_ae29c099053043d888180d73a5a1ed24e788814b98688a12dc8c78ca31d05f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ae29c099053043d888180d73a5a1ed24e788814b98688a12dc8c78ca31d05f96->leave($__internal_ae29c099053043d888180d73a5a1ed24e788814b98688a12dc8c78ca31d05f96_prof);

        
        $__internal_a7ea7e2778a488b8cfa1bdc7d70e15a59cdd7fb4a2d3aee58947988a8452256a->leave($__internal_a7ea7e2778a488b8cfa1bdc7d70e15a59cdd7fb4a2d3aee58947988a8452256a_prof);

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
