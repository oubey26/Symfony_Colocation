<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_8717ed9fe311afe138cccfc4c2e56ddaac4ca1a4c045e98fd178401a1bbf04be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_01cc59bd33219a14c0ced94c247b3c6f9c4527f310f10666ef189ce30cbcfd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cc59bd33219a14c0ced94c247b3c6f9c4527f310f10666ef189ce30cbcfd69->enter($__internal_01cc59bd33219a14c0ced94c247b3c6f9c4527f310f10666ef189ce30cbcfd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_64fb491ef6363c3154e621b4989f39e0b032f745a51591ec9e23932c4cfaabf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fb491ef6363c3154e621b4989f39e0b032f745a51591ec9e23932c4cfaabf5->enter($__internal_64fb491ef6363c3154e621b4989f39e0b032f745a51591ec9e23932c4cfaabf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01cc59bd33219a14c0ced94c247b3c6f9c4527f310f10666ef189ce30cbcfd69->leave($__internal_01cc59bd33219a14c0ced94c247b3c6f9c4527f310f10666ef189ce30cbcfd69_prof);

        
        $__internal_64fb491ef6363c3154e621b4989f39e0b032f745a51591ec9e23932c4cfaabf5->leave($__internal_64fb491ef6363c3154e621b4989f39e0b032f745a51591ec9e23932c4cfaabf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c9dd42c1abb62acf611ebf29dee35dd84f4fe58ae7c63874e7e20077949b4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9dd42c1abb62acf611ebf29dee35dd84f4fe58ae7c63874e7e20077949b4c2->enter($__internal_0c9dd42c1abb62acf611ebf29dee35dd84f4fe58ae7c63874e7e20077949b4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d76d5d93983dd762cba3931758a875dd31e6d6c69f1f49931325e2c10ca67fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d76d5d93983dd762cba3931758a875dd31e6d6c69f1f49931325e2c10ca67fa->enter($__internal_6d76d5d93983dd762cba3931758a875dd31e6d6c69f1f49931325e2c10ca67fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6d76d5d93983dd762cba3931758a875dd31e6d6c69f1f49931325e2c10ca67fa->leave($__internal_6d76d5d93983dd762cba3931758a875dd31e6d6c69f1f49931325e2c10ca67fa_prof);

        
        $__internal_0c9dd42c1abb62acf611ebf29dee35dd84f4fe58ae7c63874e7e20077949b4c2->leave($__internal_0c9dd42c1abb62acf611ebf29dee35dd84f4fe58ae7c63874e7e20077949b4c2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
