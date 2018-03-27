<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_162504fa74e5224dd3ebab281aef7d2b90e9875df6250b7d8e0baaf663941456 extends Twig_Template
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
        $__internal_e22cf6b502e86d0f14b466514d3218321ec12522b83a6185933c7d57943df59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22cf6b502e86d0f14b466514d3218321ec12522b83a6185933c7d57943df59e->enter($__internal_e22cf6b502e86d0f14b466514d3218321ec12522b83a6185933c7d57943df59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_2db935c9169954696337d348d00617c544cc5b8445bed61955282f6ce84b8175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db935c9169954696337d348d00617c544cc5b8445bed61955282f6ce84b8175->enter($__internal_2db935c9169954696337d348d00617c544cc5b8445bed61955282f6ce84b8175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e22cf6b502e86d0f14b466514d3218321ec12522b83a6185933c7d57943df59e->leave($__internal_e22cf6b502e86d0f14b466514d3218321ec12522b83a6185933c7d57943df59e_prof);

        
        $__internal_2db935c9169954696337d348d00617c544cc5b8445bed61955282f6ce84b8175->leave($__internal_2db935c9169954696337d348d00617c544cc5b8445bed61955282f6ce84b8175_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8a8c88ba5c00a9cd6f8fb3ca594ea313ebff279ee114252b216b44320a807c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8c88ba5c00a9cd6f8fb3ca594ea313ebff279ee114252b216b44320a807c39->enter($__internal_8a8c88ba5c00a9cd6f8fb3ca594ea313ebff279ee114252b216b44320a807c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a7a8432e92604286d401a0d35a9ed4c0020d963f57c5a07f8cce08db8fb284b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a8432e92604286d401a0d35a9ed4c0020d963f57c5a07f8cce08db8fb284b8->enter($__internal_a7a8432e92604286d401a0d35a9ed4c0020d963f57c5a07f8cce08db8fb284b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a7a8432e92604286d401a0d35a9ed4c0020d963f57c5a07f8cce08db8fb284b8->leave($__internal_a7a8432e92604286d401a0d35a9ed4c0020d963f57c5a07f8cce08db8fb284b8_prof);

        
        $__internal_8a8c88ba5c00a9cd6f8fb3ca594ea313ebff279ee114252b216b44320a807c39->leave($__internal_8a8c88ba5c00a9cd6f8fb3ca594ea313ebff279ee114252b216b44320a807c39_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3042a2437966103801b7cdfe2310298708c75498d44730c04fb5ccbed0b58382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3042a2437966103801b7cdfe2310298708c75498d44730c04fb5ccbed0b58382->enter($__internal_3042a2437966103801b7cdfe2310298708c75498d44730c04fb5ccbed0b58382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b454fd1b67e7ebf5fc2576c64956d595739f66464b7801e1d40a5c0191b9ab72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b454fd1b67e7ebf5fc2576c64956d595739f66464b7801e1d40a5c0191b9ab72->enter($__internal_b454fd1b67e7ebf5fc2576c64956d595739f66464b7801e1d40a5c0191b9ab72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b454fd1b67e7ebf5fc2576c64956d595739f66464b7801e1d40a5c0191b9ab72->leave($__internal_b454fd1b67e7ebf5fc2576c64956d595739f66464b7801e1d40a5c0191b9ab72_prof);

        
        $__internal_3042a2437966103801b7cdfe2310298708c75498d44730c04fb5ccbed0b58382->leave($__internal_3042a2437966103801b7cdfe2310298708c75498d44730c04fb5ccbed0b58382_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7a08c57e8f42f26bf73078cfff3014fafa0cbe6f0637df764ba1cea6f39accbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a08c57e8f42f26bf73078cfff3014fafa0cbe6f0637df764ba1cea6f39accbd->enter($__internal_7a08c57e8f42f26bf73078cfff3014fafa0cbe6f0637df764ba1cea6f39accbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0e76f68c96ebcb57a4bd6426ffb6510cac259487fe54ac0b46fc0b36b2298d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e76f68c96ebcb57a4bd6426ffb6510cac259487fe54ac0b46fc0b36b2298d1c->enter($__internal_0e76f68c96ebcb57a4bd6426ffb6510cac259487fe54ac0b46fc0b36b2298d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0e76f68c96ebcb57a4bd6426ffb6510cac259487fe54ac0b46fc0b36b2298d1c->leave($__internal_0e76f68c96ebcb57a4bd6426ffb6510cac259487fe54ac0b46fc0b36b2298d1c_prof);

        
        $__internal_7a08c57e8f42f26bf73078cfff3014fafa0cbe6f0637df764ba1cea6f39accbd->leave($__internal_7a08c57e8f42f26bf73078cfff3014fafa0cbe6f0637df764ba1cea6f39accbd_prof);

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
