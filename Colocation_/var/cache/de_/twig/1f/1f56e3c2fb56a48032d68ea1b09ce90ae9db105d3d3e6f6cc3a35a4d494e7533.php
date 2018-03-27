<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_cd3283ea1b74a2e111b5d6cecfd8c84cfbd2de1027dd9988207a58e80da56132 extends Twig_Template
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
        $__internal_530365221acdbe7b5a7fb8382b94f1ba48623f8a8d3e21655c93b2cf22563d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530365221acdbe7b5a7fb8382b94f1ba48623f8a8d3e21655c93b2cf22563d6d->enter($__internal_530365221acdbe7b5a7fb8382b94f1ba48623f8a8d3e21655c93b2cf22563d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_944daf70cbfa12c4a2b9c8b57aafebcd1d8fe5c7a384e8d6e4e8bee8fa8488bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944daf70cbfa12c4a2b9c8b57aafebcd1d8fe5c7a384e8d6e4e8bee8fa8488bf->enter($__internal_944daf70cbfa12c4a2b9c8b57aafebcd1d8fe5c7a384e8d6e4e8bee8fa8488bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_530365221acdbe7b5a7fb8382b94f1ba48623f8a8d3e21655c93b2cf22563d6d->leave($__internal_530365221acdbe7b5a7fb8382b94f1ba48623f8a8d3e21655c93b2cf22563d6d_prof);

        
        $__internal_944daf70cbfa12c4a2b9c8b57aafebcd1d8fe5c7a384e8d6e4e8bee8fa8488bf->leave($__internal_944daf70cbfa12c4a2b9c8b57aafebcd1d8fe5c7a384e8d6e4e8bee8fa8488bf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_051955f07cf47ce36e91e2ac9165e37725227ab599ee9f216a8bf89058fed316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051955f07cf47ce36e91e2ac9165e37725227ab599ee9f216a8bf89058fed316->enter($__internal_051955f07cf47ce36e91e2ac9165e37725227ab599ee9f216a8bf89058fed316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2f8af2893ee387b58cc0c0074b5dd2018f36f60b1e3335b4f87f3b4915b17976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8af2893ee387b58cc0c0074b5dd2018f36f60b1e3335b4f87f3b4915b17976->enter($__internal_2f8af2893ee387b58cc0c0074b5dd2018f36f60b1e3335b4f87f3b4915b17976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_2f8af2893ee387b58cc0c0074b5dd2018f36f60b1e3335b4f87f3b4915b17976->leave($__internal_2f8af2893ee387b58cc0c0074b5dd2018f36f60b1e3335b4f87f3b4915b17976_prof);

        
        $__internal_051955f07cf47ce36e91e2ac9165e37725227ab599ee9f216a8bf89058fed316->leave($__internal_051955f07cf47ce36e91e2ac9165e37725227ab599ee9f216a8bf89058fed316_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cfe27b599b347d119b449d9533d58f551cc14daff77189dfb4ef917552ae79d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe27b599b347d119b449d9533d58f551cc14daff77189dfb4ef917552ae79d1->enter($__internal_cfe27b599b347d119b449d9533d58f551cc14daff77189dfb4ef917552ae79d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_002f4ffe309fe28efab89a9a7cde267a769616f0241fa41217385de5fd418b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002f4ffe309fe28efab89a9a7cde267a769616f0241fa41217385de5fd418b57->enter($__internal_002f4ffe309fe28efab89a9a7cde267a769616f0241fa41217385de5fd418b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_002f4ffe309fe28efab89a9a7cde267a769616f0241fa41217385de5fd418b57->leave($__internal_002f4ffe309fe28efab89a9a7cde267a769616f0241fa41217385de5fd418b57_prof);

        
        $__internal_cfe27b599b347d119b449d9533d58f551cc14daff77189dfb4ef917552ae79d1->leave($__internal_cfe27b599b347d119b449d9533d58f551cc14daff77189dfb4ef917552ae79d1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e197bef015e5d3f669b25c5bb4220df1d2436b640dd419277831806a080471a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e197bef015e5d3f669b25c5bb4220df1d2436b640dd419277831806a080471a2->enter($__internal_e197bef015e5d3f669b25c5bb4220df1d2436b640dd419277831806a080471a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_98b7dc5788816da1d3e238a5c9375ef46f0a33baab18abbb1a140bbef8a7a352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b7dc5788816da1d3e238a5c9375ef46f0a33baab18abbb1a140bbef8a7a352->enter($__internal_98b7dc5788816da1d3e238a5c9375ef46f0a33baab18abbb1a140bbef8a7a352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_98b7dc5788816da1d3e238a5c9375ef46f0a33baab18abbb1a140bbef8a7a352->leave($__internal_98b7dc5788816da1d3e238a5c9375ef46f0a33baab18abbb1a140bbef8a7a352_prof);

        
        $__internal_e197bef015e5d3f669b25c5bb4220df1d2436b640dd419277831806a080471a2->leave($__internal_e197bef015e5d3f669b25c5bb4220df1d2436b640dd419277831806a080471a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
