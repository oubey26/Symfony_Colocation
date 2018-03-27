<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e9a2d017466dcf846230e28c18c36c65491d777f1c708b99f8b1fa191e4a61e7 extends Twig_Template
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
        $__internal_98daa25e4f660dfaadf374500b67d4bb9e07b66df01c618ce174d15470350b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98daa25e4f660dfaadf374500b67d4bb9e07b66df01c618ce174d15470350b17->enter($__internal_98daa25e4f660dfaadf374500b67d4bb9e07b66df01c618ce174d15470350b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_f840fafa6da02987cef0c742ff798c9adb15689b60770e93eab218b0510a0f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f840fafa6da02987cef0c742ff798c9adb15689b60770e93eab218b0510a0f40->enter($__internal_f840fafa6da02987cef0c742ff798c9adb15689b60770e93eab218b0510a0f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_98daa25e4f660dfaadf374500b67d4bb9e07b66df01c618ce174d15470350b17->leave($__internal_98daa25e4f660dfaadf374500b67d4bb9e07b66df01c618ce174d15470350b17_prof);

        
        $__internal_f840fafa6da02987cef0c742ff798c9adb15689b60770e93eab218b0510a0f40->leave($__internal_f840fafa6da02987cef0c742ff798c9adb15689b60770e93eab218b0510a0f40_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_126716b2f508d9231051322c0035f1fbcddde0021758b4e42bcd399416646ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126716b2f508d9231051322c0035f1fbcddde0021758b4e42bcd399416646ff9->enter($__internal_126716b2f508d9231051322c0035f1fbcddde0021758b4e42bcd399416646ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c38a1cc7c7b63a3930c405cf9269b2e27d993c02017c010259a36b9452d6cc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38a1cc7c7b63a3930c405cf9269b2e27d993c02017c010259a36b9452d6cc62->enter($__internal_c38a1cc7c7b63a3930c405cf9269b2e27d993c02017c010259a36b9452d6cc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c38a1cc7c7b63a3930c405cf9269b2e27d993c02017c010259a36b9452d6cc62->leave($__internal_c38a1cc7c7b63a3930c405cf9269b2e27d993c02017c010259a36b9452d6cc62_prof);

        
        $__internal_126716b2f508d9231051322c0035f1fbcddde0021758b4e42bcd399416646ff9->leave($__internal_126716b2f508d9231051322c0035f1fbcddde0021758b4e42bcd399416646ff9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_98a4d785c21b34566312e683d071f7dd7b9a785d7295eff9abffd57871ebdaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a4d785c21b34566312e683d071f7dd7b9a785d7295eff9abffd57871ebdaa8->enter($__internal_98a4d785c21b34566312e683d071f7dd7b9a785d7295eff9abffd57871ebdaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b7cdacf08f5357f5012c889121c19fbb8cb180ee49a24a1fac74974611aa8772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cdacf08f5357f5012c889121c19fbb8cb180ee49a24a1fac74974611aa8772->enter($__internal_b7cdacf08f5357f5012c889121c19fbb8cb180ee49a24a1fac74974611aa8772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b7cdacf08f5357f5012c889121c19fbb8cb180ee49a24a1fac74974611aa8772->leave($__internal_b7cdacf08f5357f5012c889121c19fbb8cb180ee49a24a1fac74974611aa8772_prof);

        
        $__internal_98a4d785c21b34566312e683d071f7dd7b9a785d7295eff9abffd57871ebdaa8->leave($__internal_98a4d785c21b34566312e683d071f7dd7b9a785d7295eff9abffd57871ebdaa8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b985437006bd72463e378042ab0106b3ff855f7d1aa7879483df7ec0638f6687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b985437006bd72463e378042ab0106b3ff855f7d1aa7879483df7ec0638f6687->enter($__internal_b985437006bd72463e378042ab0106b3ff855f7d1aa7879483df7ec0638f6687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ef02ac8ab4782046a55361cd8a6a6460c2ce9b39b488fea3a99ec8e7770fe9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef02ac8ab4782046a55361cd8a6a6460c2ce9b39b488fea3a99ec8e7770fe9a9->enter($__internal_ef02ac8ab4782046a55361cd8a6a6460c2ce9b39b488fea3a99ec8e7770fe9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ef02ac8ab4782046a55361cd8a6a6460c2ce9b39b488fea3a99ec8e7770fe9a9->leave($__internal_ef02ac8ab4782046a55361cd8a6a6460c2ce9b39b488fea3a99ec8e7770fe9a9_prof);

        
        $__internal_b985437006bd72463e378042ab0106b3ff855f7d1aa7879483df7ec0638f6687->leave($__internal_b985437006bd72463e378042ab0106b3ff855f7d1aa7879483df7ec0638f6687_prof);

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
