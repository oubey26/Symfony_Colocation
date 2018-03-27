<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_ca9b0a5ffa21b9ab021511041524b7c25a4f3f3c8b6eb98c4423393fa15435d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76720b28abe3c21f60fb22689618c28381d8459c0f169cb2083b55afbcea2c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76720b28abe3c21f60fb22689618c28381d8459c0f169cb2083b55afbcea2c77->enter($__internal_76720b28abe3c21f60fb22689618c28381d8459c0f169cb2083b55afbcea2c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_f5799938eaf984d8dae7a4f0527e571d72ce960d140b905e9d81bd20ba6b8d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5799938eaf984d8dae7a4f0527e571d72ce960d140b905e9d81bd20ba6b8d54->enter($__internal_f5799938eaf984d8dae7a4f0527e571d72ce960d140b905e9d81bd20ba6b8d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_76720b28abe3c21f60fb22689618c28381d8459c0f169cb2083b55afbcea2c77->leave($__internal_76720b28abe3c21f60fb22689618c28381d8459c0f169cb2083b55afbcea2c77_prof);

        
        $__internal_f5799938eaf984d8dae7a4f0527e571d72ce960d140b905e9d81bd20ba6b8d54->leave($__internal_f5799938eaf984d8dae7a4f0527e571d72ce960d140b905e9d81bd20ba6b8d54_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d36dc79f29b61d63dfdffc98d9364f3a0c3af129426b4139c211adc6324899e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36dc79f29b61d63dfdffc98d9364f3a0c3af129426b4139c211adc6324899e0->enter($__internal_d36dc79f29b61d63dfdffc98d9364f3a0c3af129426b4139c211adc6324899e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_19cd2a3e89f4406052988aa377feed60c4876f8f8e50e7bcce4d3181282c162b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cd2a3e89f4406052988aa377feed60c4876f8f8e50e7bcce4d3181282c162b->enter($__internal_19cd2a3e89f4406052988aa377feed60c4876f8f8e50e7bcce4d3181282c162b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_19cd2a3e89f4406052988aa377feed60c4876f8f8e50e7bcce4d3181282c162b->leave($__internal_19cd2a3e89f4406052988aa377feed60c4876f8f8e50e7bcce4d3181282c162b_prof);

        
        $__internal_d36dc79f29b61d63dfdffc98d9364f3a0c3af129426b4139c211adc6324899e0->leave($__internal_d36dc79f29b61d63dfdffc98d9364f3a0c3af129426b4139c211adc6324899e0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d83b64e8ceb7506f802d5e140949770221bf9bb02593a9d21f1656abb66fcf4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83b64e8ceb7506f802d5e140949770221bf9bb02593a9d21f1656abb66fcf4d->enter($__internal_d83b64e8ceb7506f802d5e140949770221bf9bb02593a9d21f1656abb66fcf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cdd23f2a7dfa4fb3b297767f076a3a306a402d9219e0dabf0a67d58591e6f274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd23f2a7dfa4fb3b297767f076a3a306a402d9219e0dabf0a67d58591e6f274->enter($__internal_cdd23f2a7dfa4fb3b297767f076a3a306a402d9219e0dabf0a67d58591e6f274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cdd23f2a7dfa4fb3b297767f076a3a306a402d9219e0dabf0a67d58591e6f274->leave($__internal_cdd23f2a7dfa4fb3b297767f076a3a306a402d9219e0dabf0a67d58591e6f274_prof);

        
        $__internal_d83b64e8ceb7506f802d5e140949770221bf9bb02593a9d21f1656abb66fcf4d->leave($__internal_d83b64e8ceb7506f802d5e140949770221bf9bb02593a9d21f1656abb66fcf4d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f15976271ea39548a73919c2af6fae5f3a21f02a730e7627b0f29d02887d35fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15976271ea39548a73919c2af6fae5f3a21f02a730e7627b0f29d02887d35fb->enter($__internal_f15976271ea39548a73919c2af6fae5f3a21f02a730e7627b0f29d02887d35fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1b7bcfc36a315b4d16d7b321d26af7c4c5c0a46bd7b13574762d50c642246e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7bcfc36a315b4d16d7b321d26af7c4c5c0a46bd7b13574762d50c642246e16->enter($__internal_1b7bcfc36a315b4d16d7b321d26af7c4c5c0a46bd7b13574762d50c642246e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1b7bcfc36a315b4d16d7b321d26af7c4c5c0a46bd7b13574762d50c642246e16->leave($__internal_1b7bcfc36a315b4d16d7b321d26af7c4c5c0a46bd7b13574762d50c642246e16_prof);

        
        $__internal_f15976271ea39548a73919c2af6fae5f3a21f02a730e7627b0f29d02887d35fb->leave($__internal_f15976271ea39548a73919c2af6fae5f3a21f02a730e7627b0f29d02887d35fb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
