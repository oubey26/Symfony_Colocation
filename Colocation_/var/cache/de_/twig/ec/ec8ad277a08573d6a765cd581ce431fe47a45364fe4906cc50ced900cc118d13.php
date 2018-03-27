<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_f8f3baf36c3112fc72f9061d332584af5dda1d62f9baff43fa3449b11473c732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_be2240d46e8b3edc8d1538711ae5cf0c83f849767abb62851ffb8525d62e737c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2240d46e8b3edc8d1538711ae5cf0c83f849767abb62851ffb8525d62e737c->enter($__internal_be2240d46e8b3edc8d1538711ae5cf0c83f849767abb62851ffb8525d62e737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_d51825f9f419751c4da21b0dd0f41359471c591371010a8b6bf22adea99a2791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51825f9f419751c4da21b0dd0f41359471c591371010a8b6bf22adea99a2791->enter($__internal_d51825f9f419751c4da21b0dd0f41359471c591371010a8b6bf22adea99a2791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be2240d46e8b3edc8d1538711ae5cf0c83f849767abb62851ffb8525d62e737c->leave($__internal_be2240d46e8b3edc8d1538711ae5cf0c83f849767abb62851ffb8525d62e737c_prof);

        
        $__internal_d51825f9f419751c4da21b0dd0f41359471c591371010a8b6bf22adea99a2791->leave($__internal_d51825f9f419751c4da21b0dd0f41359471c591371010a8b6bf22adea99a2791_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4248c60462fe3022fbf83ba98eeb62e6472199086b969c502ae89bf22c63adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4248c60462fe3022fbf83ba98eeb62e6472199086b969c502ae89bf22c63adb->enter($__internal_b4248c60462fe3022fbf83ba98eeb62e6472199086b969c502ae89bf22c63adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd4375d4cb78864405cf780ac0bd3b00cbd1d4fffbdf6b0cc4dce22016172385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4375d4cb78864405cf780ac0bd3b00cbd1d4fffbdf6b0cc4dce22016172385->enter($__internal_bd4375d4cb78864405cf780ac0bd3b00cbd1d4fffbdf6b0cc4dce22016172385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_bd4375d4cb78864405cf780ac0bd3b00cbd1d4fffbdf6b0cc4dce22016172385->leave($__internal_bd4375d4cb78864405cf780ac0bd3b00cbd1d4fffbdf6b0cc4dce22016172385_prof);

        
        $__internal_b4248c60462fe3022fbf83ba98eeb62e6472199086b969c502ae89bf22c63adb->leave($__internal_b4248c60462fe3022fbf83ba98eeb62e6472199086b969c502ae89bf22c63adb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
