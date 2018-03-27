<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_651e76f90b37734305d2b147912446b5679c564acf39ca0d43a48cc6e67ce420 extends Twig_Template
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
        $__internal_1106ffdea2160aaa7981000fa7e85214253e54ed3d8ccbd1a82985577c135776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1106ffdea2160aaa7981000fa7e85214253e54ed3d8ccbd1a82985577c135776->enter($__internal_1106ffdea2160aaa7981000fa7e85214253e54ed3d8ccbd1a82985577c135776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_47a7276488fdd7831fdc687afd5aaaa676e693b77a3797c88d50df5737fc583a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a7276488fdd7831fdc687afd5aaaa676e693b77a3797c88d50df5737fc583a->enter($__internal_47a7276488fdd7831fdc687afd5aaaa676e693b77a3797c88d50df5737fc583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1106ffdea2160aaa7981000fa7e85214253e54ed3d8ccbd1a82985577c135776->leave($__internal_1106ffdea2160aaa7981000fa7e85214253e54ed3d8ccbd1a82985577c135776_prof);

        
        $__internal_47a7276488fdd7831fdc687afd5aaaa676e693b77a3797c88d50df5737fc583a->leave($__internal_47a7276488fdd7831fdc687afd5aaaa676e693b77a3797c88d50df5737fc583a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_45437438411ed25f95f201e6b6d5c8fd325a0eed9b5756b55f9517e93c2bd6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45437438411ed25f95f201e6b6d5c8fd325a0eed9b5756b55f9517e93c2bd6f5->enter($__internal_45437438411ed25f95f201e6b6d5c8fd325a0eed9b5756b55f9517e93c2bd6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d76ca953fcc59c377a5d4aebf9ab72cef13e37fc981b1548ebe2749e900c76db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76ca953fcc59c377a5d4aebf9ab72cef13e37fc981b1548ebe2749e900c76db->enter($__internal_d76ca953fcc59c377a5d4aebf9ab72cef13e37fc981b1548ebe2749e900c76db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d76ca953fcc59c377a5d4aebf9ab72cef13e37fc981b1548ebe2749e900c76db->leave($__internal_d76ca953fcc59c377a5d4aebf9ab72cef13e37fc981b1548ebe2749e900c76db_prof);

        
        $__internal_45437438411ed25f95f201e6b6d5c8fd325a0eed9b5756b55f9517e93c2bd6f5->leave($__internal_45437438411ed25f95f201e6b6d5c8fd325a0eed9b5756b55f9517e93c2bd6f5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94b53c37dee7ccd4a91f3788c25892bd98e5d6842060cce959e17bd750ef97ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b53c37dee7ccd4a91f3788c25892bd98e5d6842060cce959e17bd750ef97ba->enter($__internal_94b53c37dee7ccd4a91f3788c25892bd98e5d6842060cce959e17bd750ef97ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a4024c9012d193f44e204f276e0c020668346a0ce7153223fdb873673f317bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4024c9012d193f44e204f276e0c020668346a0ce7153223fdb873673f317bbf->enter($__internal_a4024c9012d193f44e204f276e0c020668346a0ce7153223fdb873673f317bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a4024c9012d193f44e204f276e0c020668346a0ce7153223fdb873673f317bbf->leave($__internal_a4024c9012d193f44e204f276e0c020668346a0ce7153223fdb873673f317bbf_prof);

        
        $__internal_94b53c37dee7ccd4a91f3788c25892bd98e5d6842060cce959e17bd750ef97ba->leave($__internal_94b53c37dee7ccd4a91f3788c25892bd98e5d6842060cce959e17bd750ef97ba_prof);

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
