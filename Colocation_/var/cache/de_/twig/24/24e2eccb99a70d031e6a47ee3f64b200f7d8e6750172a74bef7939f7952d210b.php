<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_81dd3d6e7c50f26a1e2ab6528ef3df47cb6575914ba3b06f70800bc8adc12109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_70d873a1f7b8c2fad7ff2ca40f13288349b48e0b5662e223f1711ac29b7d262c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d873a1f7b8c2fad7ff2ca40f13288349b48e0b5662e223f1711ac29b7d262c->enter($__internal_70d873a1f7b8c2fad7ff2ca40f13288349b48e0b5662e223f1711ac29b7d262c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_0feb8f9ab8fdb4a86ec7d06f571da273d3e1d6ee4bcc361968136cf9b32f430f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0feb8f9ab8fdb4a86ec7d06f571da273d3e1d6ee4bcc361968136cf9b32f430f->enter($__internal_0feb8f9ab8fdb4a86ec7d06f571da273d3e1d6ee4bcc361968136cf9b32f430f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d873a1f7b8c2fad7ff2ca40f13288349b48e0b5662e223f1711ac29b7d262c->leave($__internal_70d873a1f7b8c2fad7ff2ca40f13288349b48e0b5662e223f1711ac29b7d262c_prof);

        
        $__internal_0feb8f9ab8fdb4a86ec7d06f571da273d3e1d6ee4bcc361968136cf9b32f430f->leave($__internal_0feb8f9ab8fdb4a86ec7d06f571da273d3e1d6ee4bcc361968136cf9b32f430f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7650954cb2c2a6194fea498ff307459262284a7976f3173d4a84fbd7e2b77dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7650954cb2c2a6194fea498ff307459262284a7976f3173d4a84fbd7e2b77dfe->enter($__internal_7650954cb2c2a6194fea498ff307459262284a7976f3173d4a84fbd7e2b77dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_027885663bbfa5ac293ef2fc3330517fbd19efd0ce33bcca3b442b4e44ce0bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027885663bbfa5ac293ef2fc3330517fbd19efd0ce33bcca3b442b4e44ce0bdd->enter($__internal_027885663bbfa5ac293ef2fc3330517fbd19efd0ce33bcca3b442b4e44ce0bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_027885663bbfa5ac293ef2fc3330517fbd19efd0ce33bcca3b442b4e44ce0bdd->leave($__internal_027885663bbfa5ac293ef2fc3330517fbd19efd0ce33bcca3b442b4e44ce0bdd_prof);

        
        $__internal_7650954cb2c2a6194fea498ff307459262284a7976f3173d4a84fbd7e2b77dfe->leave($__internal_7650954cb2c2a6194fea498ff307459262284a7976f3173d4a84fbd7e2b77dfe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
