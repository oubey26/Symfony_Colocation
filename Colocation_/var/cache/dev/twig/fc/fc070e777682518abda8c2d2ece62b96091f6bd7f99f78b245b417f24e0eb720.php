<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_d27c56a60989638af8d4bd6e9548fd23bc9be47333e61a0af264dc84c1c05ae5 extends Twig_Template
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
        $__internal_cd3ef478b36d51b8f03ce43afe75b912cd3b666077fc47a2be4d765874a141af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3ef478b36d51b8f03ce43afe75b912cd3b666077fc47a2be4d765874a141af->enter($__internal_cd3ef478b36d51b8f03ce43afe75b912cd3b666077fc47a2be4d765874a141af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_2f64f93aacec59917a068de42cf03f7fc87972266e6966af93cd97b671830a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f64f93aacec59917a068de42cf03f7fc87972266e6966af93cd97b671830a67->enter($__internal_2f64f93aacec59917a068de42cf03f7fc87972266e6966af93cd97b671830a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd3ef478b36d51b8f03ce43afe75b912cd3b666077fc47a2be4d765874a141af->leave($__internal_cd3ef478b36d51b8f03ce43afe75b912cd3b666077fc47a2be4d765874a141af_prof);

        
        $__internal_2f64f93aacec59917a068de42cf03f7fc87972266e6966af93cd97b671830a67->leave($__internal_2f64f93aacec59917a068de42cf03f7fc87972266e6966af93cd97b671830a67_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84215bcf4b961115d97dc8c256f07ec163397d229e5432f018fa0287331eeb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84215bcf4b961115d97dc8c256f07ec163397d229e5432f018fa0287331eeb00->enter($__internal_84215bcf4b961115d97dc8c256f07ec163397d229e5432f018fa0287331eeb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_849304414578f79dd7827eab00982579ce251b67e76d8859c8e4060e1e1a926c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849304414578f79dd7827eab00982579ce251b67e76d8859c8e4060e1e1a926c->enter($__internal_849304414578f79dd7827eab00982579ce251b67e76d8859c8e4060e1e1a926c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_849304414578f79dd7827eab00982579ce251b67e76d8859c8e4060e1e1a926c->leave($__internal_849304414578f79dd7827eab00982579ce251b67e76d8859c8e4060e1e1a926c_prof);

        
        $__internal_84215bcf4b961115d97dc8c256f07ec163397d229e5432f018fa0287331eeb00->leave($__internal_84215bcf4b961115d97dc8c256f07ec163397d229e5432f018fa0287331eeb00_prof);

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
