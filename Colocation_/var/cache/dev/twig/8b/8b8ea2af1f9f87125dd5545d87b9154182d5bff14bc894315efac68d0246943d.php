<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_bca63a76e7aa7562d1ab31ddb5f77dfeee2430bb8f4ce46a6ee80acf9893e88a extends Twig_Template
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
        $__internal_4c9f3ebd0d032d7e3af0bbfb0fdbcf19db13510c1dea2860923c84107cb0733f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9f3ebd0d032d7e3af0bbfb0fdbcf19db13510c1dea2860923c84107cb0733f->enter($__internal_4c9f3ebd0d032d7e3af0bbfb0fdbcf19db13510c1dea2860923c84107cb0733f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_6585eb2153b71fb6431fda36f1aafc04cd7b7b4ba396daf2455674e4944e45aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6585eb2153b71fb6431fda36f1aafc04cd7b7b4ba396daf2455674e4944e45aa->enter($__internal_6585eb2153b71fb6431fda36f1aafc04cd7b7b4ba396daf2455674e4944e45aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4c9f3ebd0d032d7e3af0bbfb0fdbcf19db13510c1dea2860923c84107cb0733f->leave($__internal_4c9f3ebd0d032d7e3af0bbfb0fdbcf19db13510c1dea2860923c84107cb0733f_prof);

        
        $__internal_6585eb2153b71fb6431fda36f1aafc04cd7b7b4ba396daf2455674e4944e45aa->leave($__internal_6585eb2153b71fb6431fda36f1aafc04cd7b7b4ba396daf2455674e4944e45aa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dd58ef52e7ae21c684105fc538cd7478e4a80bc0613cc9c4681d4ab1d7ba863f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd58ef52e7ae21c684105fc538cd7478e4a80bc0613cc9c4681d4ab1d7ba863f->enter($__internal_dd58ef52e7ae21c684105fc538cd7478e4a80bc0613cc9c4681d4ab1d7ba863f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ffd40030750393fb5efc897fe9446c1b04fedeff2ddf2b248f0a0ec58d62b6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd40030750393fb5efc897fe9446c1b04fedeff2ddf2b248f0a0ec58d62b6f9->enter($__internal_ffd40030750393fb5efc897fe9446c1b04fedeff2ddf2b248f0a0ec58d62b6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ffd40030750393fb5efc897fe9446c1b04fedeff2ddf2b248f0a0ec58d62b6f9->leave($__internal_ffd40030750393fb5efc897fe9446c1b04fedeff2ddf2b248f0a0ec58d62b6f9_prof);

        
        $__internal_dd58ef52e7ae21c684105fc538cd7478e4a80bc0613cc9c4681d4ab1d7ba863f->leave($__internal_dd58ef52e7ae21c684105fc538cd7478e4a80bc0613cc9c4681d4ab1d7ba863f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0155de278f4d82f2be6167751a4fb0c2bca2af4471bd3445c3fcdb8bab245c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0155de278f4d82f2be6167751a4fb0c2bca2af4471bd3445c3fcdb8bab245c70->enter($__internal_0155de278f4d82f2be6167751a4fb0c2bca2af4471bd3445c3fcdb8bab245c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e604766da07748203436e5734e97cabcfa186ade7d4411bb459de4a031d5b471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e604766da07748203436e5734e97cabcfa186ade7d4411bb459de4a031d5b471->enter($__internal_e604766da07748203436e5734e97cabcfa186ade7d4411bb459de4a031d5b471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e604766da07748203436e5734e97cabcfa186ade7d4411bb459de4a031d5b471->leave($__internal_e604766da07748203436e5734e97cabcfa186ade7d4411bb459de4a031d5b471_prof);

        
        $__internal_0155de278f4d82f2be6167751a4fb0c2bca2af4471bd3445c3fcdb8bab245c70->leave($__internal_0155de278f4d82f2be6167751a4fb0c2bca2af4471bd3445c3fcdb8bab245c70_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1b0d835ed236b6d229fa71b9e86a06b0d5b2bac7e9e08fb6128077eba358b272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0d835ed236b6d229fa71b9e86a06b0d5b2bac7e9e08fb6128077eba358b272->enter($__internal_1b0d835ed236b6d229fa71b9e86a06b0d5b2bac7e9e08fb6128077eba358b272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_47e2985e7062e7ebe429a9daa6ac810933c02a1de229fe88c60a3b000ab89dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e2985e7062e7ebe429a9daa6ac810933c02a1de229fe88c60a3b000ab89dea->enter($__internal_47e2985e7062e7ebe429a9daa6ac810933c02a1de229fe88c60a3b000ab89dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_47e2985e7062e7ebe429a9daa6ac810933c02a1de229fe88c60a3b000ab89dea->leave($__internal_47e2985e7062e7ebe429a9daa6ac810933c02a1de229fe88c60a3b000ab89dea_prof);

        
        $__internal_1b0d835ed236b6d229fa71b9e86a06b0d5b2bac7e9e08fb6128077eba358b272->leave($__internal_1b0d835ed236b6d229fa71b9e86a06b0d5b2bac7e9e08fb6128077eba358b272_prof);

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
