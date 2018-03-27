<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_3237da14cd2a51401a186b1db59f11926150a5fe6f8197a7a43984269f58bc05 extends Twig_Template
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
        $__internal_bf97285705ea47cf799f6e2cf935fdb05a7d2c26263e2354cf17f4913728fe5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf97285705ea47cf799f6e2cf935fdb05a7d2c26263e2354cf17f4913728fe5b->enter($__internal_bf97285705ea47cf799f6e2cf935fdb05a7d2c26263e2354cf17f4913728fe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_e3a8a73f7117fadcdb35a6e5e6328cc9524bf3ceac0be01783d7d14e6b2773b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a8a73f7117fadcdb35a6e5e6328cc9524bf3ceac0be01783d7d14e6b2773b7->enter($__internal_e3a8a73f7117fadcdb35a6e5e6328cc9524bf3ceac0be01783d7d14e6b2773b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf97285705ea47cf799f6e2cf935fdb05a7d2c26263e2354cf17f4913728fe5b->leave($__internal_bf97285705ea47cf799f6e2cf935fdb05a7d2c26263e2354cf17f4913728fe5b_prof);

        
        $__internal_e3a8a73f7117fadcdb35a6e5e6328cc9524bf3ceac0be01783d7d14e6b2773b7->leave($__internal_e3a8a73f7117fadcdb35a6e5e6328cc9524bf3ceac0be01783d7d14e6b2773b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fb9a6d6755c22cd229343f4b38f2177ac3692606c7117a1bb178443bd586dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb9a6d6755c22cd229343f4b38f2177ac3692606c7117a1bb178443bd586dc4->enter($__internal_6fb9a6d6755c22cd229343f4b38f2177ac3692606c7117a1bb178443bd586dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1857de6038d59008653bc14108eb0dfe720e68762f39a1243418df1f98e29bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1857de6038d59008653bc14108eb0dfe720e68762f39a1243418df1f98e29bb4->enter($__internal_1857de6038d59008653bc14108eb0dfe720e68762f39a1243418df1f98e29bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1857de6038d59008653bc14108eb0dfe720e68762f39a1243418df1f98e29bb4->leave($__internal_1857de6038d59008653bc14108eb0dfe720e68762f39a1243418df1f98e29bb4_prof);

        
        $__internal_6fb9a6d6755c22cd229343f4b38f2177ac3692606c7117a1bb178443bd586dc4->leave($__internal_6fb9a6d6755c22cd229343f4b38f2177ac3692606c7117a1bb178443bd586dc4_prof);

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
