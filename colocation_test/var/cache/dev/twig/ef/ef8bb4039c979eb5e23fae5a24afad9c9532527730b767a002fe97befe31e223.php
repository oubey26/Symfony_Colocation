<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_0d3c3c330d5b3f1c98694b8737b1ae142600fa832521aa6953265dc33937df0e extends Twig_Template
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
        $__internal_b6aa067e84bfe17a0eacd326ef4c457666804feee0f2b0a972d82b20c4dfcd59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6aa067e84bfe17a0eacd326ef4c457666804feee0f2b0a972d82b20c4dfcd59->enter($__internal_b6aa067e84bfe17a0eacd326ef4c457666804feee0f2b0a972d82b20c4dfcd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_003a128c3266d79014adceb5608fb8dff8d69bba03de44c6ed4a2e6761aa8949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003a128c3266d79014adceb5608fb8dff8d69bba03de44c6ed4a2e6761aa8949->enter($__internal_003a128c3266d79014adceb5608fb8dff8d69bba03de44c6ed4a2e6761aa8949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6aa067e84bfe17a0eacd326ef4c457666804feee0f2b0a972d82b20c4dfcd59->leave($__internal_b6aa067e84bfe17a0eacd326ef4c457666804feee0f2b0a972d82b20c4dfcd59_prof);

        
        $__internal_003a128c3266d79014adceb5608fb8dff8d69bba03de44c6ed4a2e6761aa8949->leave($__internal_003a128c3266d79014adceb5608fb8dff8d69bba03de44c6ed4a2e6761aa8949_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3c6f453bdeb8cc48f229e57f35c417c107c504c76e44e4190327f73579690c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6f453bdeb8cc48f229e57f35c417c107c504c76e44e4190327f73579690c4a->enter($__internal_3c6f453bdeb8cc48f229e57f35c417c107c504c76e44e4190327f73579690c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_670c0677b51c58a8044b7b280f71ab124f6004401224a864456713ab946e194a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670c0677b51c58a8044b7b280f71ab124f6004401224a864456713ab946e194a->enter($__internal_670c0677b51c58a8044b7b280f71ab124f6004401224a864456713ab946e194a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_670c0677b51c58a8044b7b280f71ab124f6004401224a864456713ab946e194a->leave($__internal_670c0677b51c58a8044b7b280f71ab124f6004401224a864456713ab946e194a_prof);

        
        $__internal_3c6f453bdeb8cc48f229e57f35c417c107c504c76e44e4190327f73579690c4a->leave($__internal_3c6f453bdeb8cc48f229e57f35c417c107c504c76e44e4190327f73579690c4a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ca45b47c76218d04dc46c9f4531eedc8801a900a59ff74963b17f97f960e405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca45b47c76218d04dc46c9f4531eedc8801a900a59ff74963b17f97f960e405->enter($__internal_7ca45b47c76218d04dc46c9f4531eedc8801a900a59ff74963b17f97f960e405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e5fd4d1535e7524704f0cfb5135763bb141e7af518b397a5bf7c305a64a5e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5fd4d1535e7524704f0cfb5135763bb141e7af518b397a5bf7c305a64a5e87->enter($__internal_1e5fd4d1535e7524704f0cfb5135763bb141e7af518b397a5bf7c305a64a5e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1e5fd4d1535e7524704f0cfb5135763bb141e7af518b397a5bf7c305a64a5e87->leave($__internal_1e5fd4d1535e7524704f0cfb5135763bb141e7af518b397a5bf7c305a64a5e87_prof);

        
        $__internal_7ca45b47c76218d04dc46c9f4531eedc8801a900a59ff74963b17f97f960e405->leave($__internal_7ca45b47c76218d04dc46c9f4531eedc8801a900a59ff74963b17f97f960e405_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\colocation_test\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
