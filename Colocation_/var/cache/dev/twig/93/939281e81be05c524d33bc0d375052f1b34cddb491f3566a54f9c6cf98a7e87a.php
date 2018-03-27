<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_75c61086b356f5f34707c66c5979f8df358eded09e9b665830cad7f9fbf8a365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_382b4b3b69f2b1fd004ae500dccfa576b6121eee657d751d1871621f17e32f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382b4b3b69f2b1fd004ae500dccfa576b6121eee657d751d1871621f17e32f26->enter($__internal_382b4b3b69f2b1fd004ae500dccfa576b6121eee657d751d1871621f17e32f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_454df453a26d228bd636714268ccc30a89c441136bbda1ba02f54fb674aec123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454df453a26d228bd636714268ccc30a89c441136bbda1ba02f54fb674aec123->enter($__internal_454df453a26d228bd636714268ccc30a89c441136bbda1ba02f54fb674aec123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382b4b3b69f2b1fd004ae500dccfa576b6121eee657d751d1871621f17e32f26->leave($__internal_382b4b3b69f2b1fd004ae500dccfa576b6121eee657d751d1871621f17e32f26_prof);

        
        $__internal_454df453a26d228bd636714268ccc30a89c441136bbda1ba02f54fb674aec123->leave($__internal_454df453a26d228bd636714268ccc30a89c441136bbda1ba02f54fb674aec123_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85df59fff0f9984e780d208caeeed7cfd2be9ba28aa1c70ca23e4d339772ab4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85df59fff0f9984e780d208caeeed7cfd2be9ba28aa1c70ca23e4d339772ab4e->enter($__internal_85df59fff0f9984e780d208caeeed7cfd2be9ba28aa1c70ca23e4d339772ab4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_be8b09bf792015ec24d8a0717d12ec5466e7d45516b84f4644cb6c0e71c35830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8b09bf792015ec24d8a0717d12ec5466e7d45516b84f4644cb6c0e71c35830->enter($__internal_be8b09bf792015ec24d8a0717d12ec5466e7d45516b84f4644cb6c0e71c35830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_be8b09bf792015ec24d8a0717d12ec5466e7d45516b84f4644cb6c0e71c35830->leave($__internal_be8b09bf792015ec24d8a0717d12ec5466e7d45516b84f4644cb6c0e71c35830_prof);

        
        $__internal_85df59fff0f9984e780d208caeeed7cfd2be9ba28aa1c70ca23e4d339772ab4e->leave($__internal_85df59fff0f9984e780d208caeeed7cfd2be9ba28aa1c70ca23e4d339772ab4e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
