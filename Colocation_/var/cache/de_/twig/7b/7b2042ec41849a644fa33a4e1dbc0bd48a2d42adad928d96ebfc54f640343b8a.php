<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_153d5e51051c231648aefd610bb6b6775f8d3b180293b1fed563bf689db0a729 extends Twig_Template
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
        $__internal_e3a13cd515b237f7e6237a719fe6717fbac5d8e0ac5c605b834a937a8f40642c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a13cd515b237f7e6237a719fe6717fbac5d8e0ac5c605b834a937a8f40642c->enter($__internal_e3a13cd515b237f7e6237a719fe6717fbac5d8e0ac5c605b834a937a8f40642c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_20b6361fb3136e3fd917277e16286620a20e7273e9454ab56421c0f85f5b454b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b6361fb3136e3fd917277e16286620a20e7273e9454ab56421c0f85f5b454b->enter($__internal_20b6361fb3136e3fd917277e16286620a20e7273e9454ab56421c0f85f5b454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e3a13cd515b237f7e6237a719fe6717fbac5d8e0ac5c605b834a937a8f40642c->leave($__internal_e3a13cd515b237f7e6237a719fe6717fbac5d8e0ac5c605b834a937a8f40642c_prof);

        
        $__internal_20b6361fb3136e3fd917277e16286620a20e7273e9454ab56421c0f85f5b454b->leave($__internal_20b6361fb3136e3fd917277e16286620a20e7273e9454ab56421c0f85f5b454b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c08b6cbaca340a90a0165e50709fdb9d2f8129c4aea6297760bd2b3fbfe2b6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08b6cbaca340a90a0165e50709fdb9d2f8129c4aea6297760bd2b3fbfe2b6af->enter($__internal_c08b6cbaca340a90a0165e50709fdb9d2f8129c4aea6297760bd2b3fbfe2b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5533b37a19feb7b995f6a817140abc3795e9bd4563542b4be41a990bd0af94a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5533b37a19feb7b995f6a817140abc3795e9bd4563542b4be41a990bd0af94a0->enter($__internal_5533b37a19feb7b995f6a817140abc3795e9bd4563542b4be41a990bd0af94a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_5533b37a19feb7b995f6a817140abc3795e9bd4563542b4be41a990bd0af94a0->leave($__internal_5533b37a19feb7b995f6a817140abc3795e9bd4563542b4be41a990bd0af94a0_prof);

        
        $__internal_c08b6cbaca340a90a0165e50709fdb9d2f8129c4aea6297760bd2b3fbfe2b6af->leave($__internal_c08b6cbaca340a90a0165e50709fdb9d2f8129c4aea6297760bd2b3fbfe2b6af_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_033162f25837e52276ae5e4fca691109a9201d89c1afb7e4aadc71b4825ca7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033162f25837e52276ae5e4fca691109a9201d89c1afb7e4aadc71b4825ca7fd->enter($__internal_033162f25837e52276ae5e4fca691109a9201d89c1afb7e4aadc71b4825ca7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8d25f28c227bf18e91d9cac30ba83c3f71f7515771c7b659eccd0092bc38c7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d25f28c227bf18e91d9cac30ba83c3f71f7515771c7b659eccd0092bc38c7dc->enter($__internal_8d25f28c227bf18e91d9cac30ba83c3f71f7515771c7b659eccd0092bc38c7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8d25f28c227bf18e91d9cac30ba83c3f71f7515771c7b659eccd0092bc38c7dc->leave($__internal_8d25f28c227bf18e91d9cac30ba83c3f71f7515771c7b659eccd0092bc38c7dc_prof);

        
        $__internal_033162f25837e52276ae5e4fca691109a9201d89c1afb7e4aadc71b4825ca7fd->leave($__internal_033162f25837e52276ae5e4fca691109a9201d89c1afb7e4aadc71b4825ca7fd_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fa6015a9e9a1e97eeda7a1a8b273190aafd0118f093e447f98870d7912474d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6015a9e9a1e97eeda7a1a8b273190aafd0118f093e447f98870d7912474d14->enter($__internal_fa6015a9e9a1e97eeda7a1a8b273190aafd0118f093e447f98870d7912474d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_027b49c4a42614766a1d0d96bc996f7debc5070404581869025440bef78c71db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027b49c4a42614766a1d0d96bc996f7debc5070404581869025440bef78c71db->enter($__internal_027b49c4a42614766a1d0d96bc996f7debc5070404581869025440bef78c71db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_027b49c4a42614766a1d0d96bc996f7debc5070404581869025440bef78c71db->leave($__internal_027b49c4a42614766a1d0d96bc996f7debc5070404581869025440bef78c71db_prof);

        
        $__internal_fa6015a9e9a1e97eeda7a1a8b273190aafd0118f093e447f98870d7912474d14->leave($__internal_fa6015a9e9a1e97eeda7a1a8b273190aafd0118f093e447f98870d7912474d14_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
