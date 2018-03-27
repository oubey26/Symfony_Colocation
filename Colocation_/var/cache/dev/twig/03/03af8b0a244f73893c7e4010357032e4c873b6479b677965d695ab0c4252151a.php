<?php

/* default/rss.html.twig */
class __TwigTemplate_61868fc8c423f6e178d63cc1fb9f89f79277f24078efdd5b2aef3f9b1691d8db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "default/rss.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_159a296f66a0e7bbd5fec11b25917befb2f85b6a8ab67fd39951a6c5ed649a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159a296f66a0e7bbd5fec11b25917befb2f85b6a8ab67fd39951a6c5ed649a17->enter($__internal_159a296f66a0e7bbd5fec11b25917befb2f85b6a8ab67fd39951a6c5ed649a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/rss.html.twig"));

        $__internal_2ac4e833efcb05d872605771877a019b75a2060884849f138097e10ea828ae4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac4e833efcb05d872605771877a019b75a2060884849f138097e10ea828ae4d->enter($__internal_2ac4e833efcb05d872605771877a019b75a2060884849f138097e10ea828ae4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/rss.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_159a296f66a0e7bbd5fec11b25917befb2f85b6a8ab67fd39951a6c5ed649a17->leave($__internal_159a296f66a0e7bbd5fec11b25917befb2f85b6a8ab67fd39951a6c5ed649a17_prof);

        
        $__internal_2ac4e833efcb05d872605771877a019b75a2060884849f138097e10ea828ae4d->leave($__internal_2ac4e833efcb05d872605771877a019b75a2060884849f138097e10ea828ae4d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7768190a2538e270fa020eecd728c8aba9d3fea44930d89704cb85e6582e14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7768190a2538e270fa020eecd728c8aba9d3fea44930d89704cb85e6582e14b->enter($__internal_e7768190a2538e270fa020eecd728c8aba9d3fea44930d89704cb85e6582e14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ffac3d87fd05c2f357797bbd6cd114209749fb48135da0d533444526ff8c40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffac3d87fd05c2f357797bbd6cd114209749fb48135da0d533444526ff8c40f->enter($__internal_0ffac3d87fd05c2f357797bbd6cd114209749fb48135da0d533444526ff8c40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 4
            echo "        <item>
            <div class=\"w3-col l3 m6 w3-margin-bottom\">
                <div class=\"w3-display-container\">
                    <title class=\"w3-display-topleft w3-black w3-padding\"> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
            echo " </title>
                    <link> <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show"), "html", null, true);
            echo " </a> </link>
                    <description>";
            // line 9
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["annonce"], "description", array()), 0, 25), "html", null, true);
            echo "</description>
                </div>
            </div>
        </item>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0ffac3d87fd05c2f357797bbd6cd114209749fb48135da0d533444526ff8c40f->leave($__internal_0ffac3d87fd05c2f357797bbd6cd114209749fb48135da0d533444526ff8c40f_prof);

        
        $__internal_e7768190a2538e270fa020eecd728c8aba9d3fea44930d89704cb85e6582e14b->leave($__internal_e7768190a2538e270fa020eecd728c8aba9d3fea44930d89704cb85e6582e14b_prof);

    }

    public function getTemplateName()
    {
        return "default/rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  63 => 8,  59 => 7,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}
{%block body %}
    {% for annonce in annonces %}
        <item>
            <div class=\"w3-col l3 m6 w3-margin-bottom\">
                <div class=\"w3-display-container\">
                    <title class=\"w3-display-topleft w3-black w3-padding\"> {{ annonce.adresse}} </title>
                    <link> <a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\" class=\"btn btn-primary btn-block\"> {{'show'|trans}} </a> </link>
                    <description>{{ annonce.description[:25]}}</description>
                </div>
            </div>
        </item>
    {% endfor %}
{% endblock %}", "default/rss.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\default\\rss.html.twig");
    }
}
