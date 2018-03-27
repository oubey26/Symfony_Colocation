<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_eb904e6c043fb6ff9b032acd76a33c33dfb1522dc8d6410ffad4bb1ffe35188a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e6dbd97dfbb7b7e74d15bac0d399d1f5e837c40ea21c50c4e52c047612ee25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6dbd97dfbb7b7e74d15bac0d399d1f5e837c40ea21c50c4e52c047612ee25f->enter($__internal_4e6dbd97dfbb7b7e74d15bac0d399d1f5e837c40ea21c50c4e52c047612ee25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a64091ea18048e1c169b2ee253326488248e9cea24248a100efb1b6562032b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64091ea18048e1c169b2ee253326488248e9cea24248a100efb1b6562032b09->enter($__internal_a64091ea18048e1c169b2ee253326488248e9cea24248a100efb1b6562032b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e6dbd97dfbb7b7e74d15bac0d399d1f5e837c40ea21c50c4e52c047612ee25f->leave($__internal_4e6dbd97dfbb7b7e74d15bac0d399d1f5e837c40ea21c50c4e52c047612ee25f_prof);

        
        $__internal_a64091ea18048e1c169b2ee253326488248e9cea24248a100efb1b6562032b09->leave($__internal_a64091ea18048e1c169b2ee253326488248e9cea24248a100efb1b6562032b09_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d212188f6c827ab3fafaf71b5aa92a1d2a24e16f9b2eea91fd2fd9e8d9266d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d212188f6c827ab3fafaf71b5aa92a1d2a24e16f9b2eea91fd2fd9e8d9266d8->enter($__internal_9d212188f6c827ab3fafaf71b5aa92a1d2a24e16f9b2eea91fd2fd9e8d9266d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_562e3553b77a148070bbfd9e722cea5e079c3a35374b7ac50213aee2a885e2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562e3553b77a148070bbfd9e722cea5e079c3a35374b7ac50213aee2a885e2d3->enter($__internal_562e3553b77a148070bbfd9e722cea5e079c3a35374b7ac50213aee2a885e2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_562e3553b77a148070bbfd9e722cea5e079c3a35374b7ac50213aee2a885e2d3->leave($__internal_562e3553b77a148070bbfd9e722cea5e079c3a35374b7ac50213aee2a885e2d3_prof);

        
        $__internal_9d212188f6c827ab3fafaf71b5aa92a1d2a24e16f9b2eea91fd2fd9e8d9266d8->leave($__internal_9d212188f6c827ab3fafaf71b5aa92a1d2a24e16f9b2eea91fd2fd9e8d9266d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
