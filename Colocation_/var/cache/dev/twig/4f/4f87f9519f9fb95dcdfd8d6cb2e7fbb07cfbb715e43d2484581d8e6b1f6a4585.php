<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_2c74b5e57288537501a425b68bfe77287a3906c04210f6ba2e449ba010160efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_20d6e1326c3af1bbb87ed682074d7ec659c4cfde8fd1b648f3a6aaa83378f629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d6e1326c3af1bbb87ed682074d7ec659c4cfde8fd1b648f3a6aaa83378f629->enter($__internal_20d6e1326c3af1bbb87ed682074d7ec659c4cfde8fd1b648f3a6aaa83378f629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_0ffd4e6be32eee4532b4307d7eaff44dd6354ff7362ef7a084e888851ab15cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffd4e6be32eee4532b4307d7eaff44dd6354ff7362ef7a084e888851ab15cc2->enter($__internal_0ffd4e6be32eee4532b4307d7eaff44dd6354ff7362ef7a084e888851ab15cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20d6e1326c3af1bbb87ed682074d7ec659c4cfde8fd1b648f3a6aaa83378f629->leave($__internal_20d6e1326c3af1bbb87ed682074d7ec659c4cfde8fd1b648f3a6aaa83378f629_prof);

        
        $__internal_0ffd4e6be32eee4532b4307d7eaff44dd6354ff7362ef7a084e888851ab15cc2->leave($__internal_0ffd4e6be32eee4532b4307d7eaff44dd6354ff7362ef7a084e888851ab15cc2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e69c9125817eb3b4c344db4a1473a57709439f426bccc61efa11a27d2eaa7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e69c9125817eb3b4c344db4a1473a57709439f426bccc61efa11a27d2eaa7f9->enter($__internal_4e69c9125817eb3b4c344db4a1473a57709439f426bccc61efa11a27d2eaa7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7dd6b0e949cbeb1301c7f1624efdf56bb161065e4701375195380220d4ecaf11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd6b0e949cbeb1301c7f1624efdf56bb161065e4701375195380220d4ecaf11->enter($__internal_7dd6b0e949cbeb1301c7f1624efdf56bb161065e4701375195380220d4ecaf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7dd6b0e949cbeb1301c7f1624efdf56bb161065e4701375195380220d4ecaf11->leave($__internal_7dd6b0e949cbeb1301c7f1624efdf56bb161065e4701375195380220d4ecaf11_prof);

        
        $__internal_4e69c9125817eb3b4c344db4a1473a57709439f426bccc61efa11a27d2eaa7f9->leave($__internal_4e69c9125817eb3b4c344db4a1473a57709439f426bccc61efa11a27d2eaa7f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
