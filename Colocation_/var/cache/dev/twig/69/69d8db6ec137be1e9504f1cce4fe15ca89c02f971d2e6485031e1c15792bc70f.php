<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_757644093230d043b8ce76684247caef73e2e22cd96aba115f6f97752a2c2f1f extends Twig_Template
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
        $__internal_33e1c2843d98385d71501374fa1aa7252573c19d578782f8ff61da74de0c9227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e1c2843d98385d71501374fa1aa7252573c19d578782f8ff61da74de0c9227->enter($__internal_33e1c2843d98385d71501374fa1aa7252573c19d578782f8ff61da74de0c9227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c4ec2d0c2b326d198f8febdb4b5b1015c50e19b3ebbef093d60e19e446742b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ec2d0c2b326d198f8febdb4b5b1015c50e19b3ebbef093d60e19e446742b13->enter($__internal_c4ec2d0c2b326d198f8febdb4b5b1015c50e19b3ebbef093d60e19e446742b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_33e1c2843d98385d71501374fa1aa7252573c19d578782f8ff61da74de0c9227->leave($__internal_33e1c2843d98385d71501374fa1aa7252573c19d578782f8ff61da74de0c9227_prof);

        
        $__internal_c4ec2d0c2b326d198f8febdb4b5b1015c50e19b3ebbef093d60e19e446742b13->leave($__internal_c4ec2d0c2b326d198f8febdb4b5b1015c50e19b3ebbef093d60e19e446742b13_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_735a351c2053f9a4527e3d574b0bcc553428a41bc9b01d56733ea5c009e45866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735a351c2053f9a4527e3d574b0bcc553428a41bc9b01d56733ea5c009e45866->enter($__internal_735a351c2053f9a4527e3d574b0bcc553428a41bc9b01d56733ea5c009e45866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_34a142d0c0681ed0a6c6299b8f9ca326717e543bdc1b454f2e803c0906c62838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a142d0c0681ed0a6c6299b8f9ca326717e543bdc1b454f2e803c0906c62838->enter($__internal_34a142d0c0681ed0a6c6299b8f9ca326717e543bdc1b454f2e803c0906c62838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_34a142d0c0681ed0a6c6299b8f9ca326717e543bdc1b454f2e803c0906c62838->leave($__internal_34a142d0c0681ed0a6c6299b8f9ca326717e543bdc1b454f2e803c0906c62838_prof);

        
        $__internal_735a351c2053f9a4527e3d574b0bcc553428a41bc9b01d56733ea5c009e45866->leave($__internal_735a351c2053f9a4527e3d574b0bcc553428a41bc9b01d56733ea5c009e45866_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_00f5fb373771684b99ef06bc1c1b2c908ddb835a08a9edcf1e4cdcedf948d8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f5fb373771684b99ef06bc1c1b2c908ddb835a08a9edcf1e4cdcedf948d8af->enter($__internal_00f5fb373771684b99ef06bc1c1b2c908ddb835a08a9edcf1e4cdcedf948d8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ea69a8e705c6fa1f9144eb031286188134faaa80b89b8c68780ead4d5ebddb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea69a8e705c6fa1f9144eb031286188134faaa80b89b8c68780ead4d5ebddb0a->enter($__internal_ea69a8e705c6fa1f9144eb031286188134faaa80b89b8c68780ead4d5ebddb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ea69a8e705c6fa1f9144eb031286188134faaa80b89b8c68780ead4d5ebddb0a->leave($__internal_ea69a8e705c6fa1f9144eb031286188134faaa80b89b8c68780ead4d5ebddb0a_prof);

        
        $__internal_00f5fb373771684b99ef06bc1c1b2c908ddb835a08a9edcf1e4cdcedf948d8af->leave($__internal_00f5fb373771684b99ef06bc1c1b2c908ddb835a08a9edcf1e4cdcedf948d8af_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2396284ac4596a102ee845365a9baf7354261e0733bac1fff6820cdca682cde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2396284ac4596a102ee845365a9baf7354261e0733bac1fff6820cdca682cde5->enter($__internal_2396284ac4596a102ee845365a9baf7354261e0733bac1fff6820cdca682cde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_24f1462ddaae66d9621ce99cd0690176a3b7c7957b476878c2514abc8e498316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f1462ddaae66d9621ce99cd0690176a3b7c7957b476878c2514abc8e498316->enter($__internal_24f1462ddaae66d9621ce99cd0690176a3b7c7957b476878c2514abc8e498316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_24f1462ddaae66d9621ce99cd0690176a3b7c7957b476878c2514abc8e498316->leave($__internal_24f1462ddaae66d9621ce99cd0690176a3b7c7957b476878c2514abc8e498316_prof);

        
        $__internal_2396284ac4596a102ee845365a9baf7354261e0733bac1fff6820cdca682cde5->leave($__internal_2396284ac4596a102ee845365a9baf7354261e0733bac1fff6820cdca682cde5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
