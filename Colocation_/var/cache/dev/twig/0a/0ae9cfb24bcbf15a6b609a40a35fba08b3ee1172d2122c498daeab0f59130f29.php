<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f0979971483bc64d1592221447fcaf17951b55fb661d3a88a4a42ac0d5362d20 extends Twig_Template
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
        $__internal_6cf1110bfa9ae043dc9d7673f8d8c522d0837386744aee4ea1459700a7de968c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf1110bfa9ae043dc9d7673f8d8c522d0837386744aee4ea1459700a7de968c->enter($__internal_6cf1110bfa9ae043dc9d7673f8d8c522d0837386744aee4ea1459700a7de968c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_3be6d157411d5ebd6aa04cfa61620d11dfad89b5940a5f0636746321aeed9315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be6d157411d5ebd6aa04cfa61620d11dfad89b5940a5f0636746321aeed9315->enter($__internal_3be6d157411d5ebd6aa04cfa61620d11dfad89b5940a5f0636746321aeed9315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6cf1110bfa9ae043dc9d7673f8d8c522d0837386744aee4ea1459700a7de968c->leave($__internal_6cf1110bfa9ae043dc9d7673f8d8c522d0837386744aee4ea1459700a7de968c_prof);

        
        $__internal_3be6d157411d5ebd6aa04cfa61620d11dfad89b5940a5f0636746321aeed9315->leave($__internal_3be6d157411d5ebd6aa04cfa61620d11dfad89b5940a5f0636746321aeed9315_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_669e125e1efb66bdd6c0113c3df0714e2748f25f95206d2a0091d719763e0d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669e125e1efb66bdd6c0113c3df0714e2748f25f95206d2a0091d719763e0d56->enter($__internal_669e125e1efb66bdd6c0113c3df0714e2748f25f95206d2a0091d719763e0d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8cc4a47613735c14e3c969280d1f1a31c5371f6f21694faa44ad3b0a7ea77560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc4a47613735c14e3c969280d1f1a31c5371f6f21694faa44ad3b0a7ea77560->enter($__internal_8cc4a47613735c14e3c969280d1f1a31c5371f6f21694faa44ad3b0a7ea77560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8cc4a47613735c14e3c969280d1f1a31c5371f6f21694faa44ad3b0a7ea77560->leave($__internal_8cc4a47613735c14e3c969280d1f1a31c5371f6f21694faa44ad3b0a7ea77560_prof);

        
        $__internal_669e125e1efb66bdd6c0113c3df0714e2748f25f95206d2a0091d719763e0d56->leave($__internal_669e125e1efb66bdd6c0113c3df0714e2748f25f95206d2a0091d719763e0d56_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_82d2fd39e1a47932e1e86b1d2b5fe60bde987124398cac3e4e26d6bf438ecac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d2fd39e1a47932e1e86b1d2b5fe60bde987124398cac3e4e26d6bf438ecac9->enter($__internal_82d2fd39e1a47932e1e86b1d2b5fe60bde987124398cac3e4e26d6bf438ecac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7c9af248b042caf4ad946e7655ddb93165f6d1c54a216b9101a88ead80f32e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9af248b042caf4ad946e7655ddb93165f6d1c54a216b9101a88ead80f32e91->enter($__internal_7c9af248b042caf4ad946e7655ddb93165f6d1c54a216b9101a88ead80f32e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7c9af248b042caf4ad946e7655ddb93165f6d1c54a216b9101a88ead80f32e91->leave($__internal_7c9af248b042caf4ad946e7655ddb93165f6d1c54a216b9101a88ead80f32e91_prof);

        
        $__internal_82d2fd39e1a47932e1e86b1d2b5fe60bde987124398cac3e4e26d6bf438ecac9->leave($__internal_82d2fd39e1a47932e1e86b1d2b5fe60bde987124398cac3e4e26d6bf438ecac9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_85015dbbf5e3ece34dcbc3d9cff106f8e4d8642361e134729a2e3ba87f7312a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85015dbbf5e3ece34dcbc3d9cff106f8e4d8642361e134729a2e3ba87f7312a5->enter($__internal_85015dbbf5e3ece34dcbc3d9cff106f8e4d8642361e134729a2e3ba87f7312a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0ea6a17106afbf608c7677b1a7b073e6950831ca4f2c08f9d9d9ba04f2e112d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea6a17106afbf608c7677b1a7b073e6950831ca4f2c08f9d9d9ba04f2e112d9->enter($__internal_0ea6a17106afbf608c7677b1a7b073e6950831ca4f2c08f9d9d9ba04f2e112d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0ea6a17106afbf608c7677b1a7b073e6950831ca4f2c08f9d9d9ba04f2e112d9->leave($__internal_0ea6a17106afbf608c7677b1a7b073e6950831ca4f2c08f9d9d9ba04f2e112d9_prof);

        
        $__internal_85015dbbf5e3ece34dcbc3d9cff106f8e4d8642361e134729a2e3ba87f7312a5->leave($__internal_85015dbbf5e3ece34dcbc3d9cff106f8e4d8642361e134729a2e3ba87f7312a5_prof);

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
