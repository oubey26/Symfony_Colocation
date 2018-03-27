<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_09d02e83ccd9d351f9d1310d6f30cc6c03cb899ce3414dd00c8b2d25d9e472ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_74bd08d9d5a410f3abb8828c2a0daeb5aa017b058cc33a2b2f2ff0aa14960e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74bd08d9d5a410f3abb8828c2a0daeb5aa017b058cc33a2b2f2ff0aa14960e4f->enter($__internal_74bd08d9d5a410f3abb8828c2a0daeb5aa017b058cc33a2b2f2ff0aa14960e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_3b0a760a0eab38b8132b39b645cd8fa0fb3731405c32ccc824d7eb9707e29e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0a760a0eab38b8132b39b645cd8fa0fb3731405c32ccc824d7eb9707e29e06->enter($__internal_3b0a760a0eab38b8132b39b645cd8fa0fb3731405c32ccc824d7eb9707e29e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74bd08d9d5a410f3abb8828c2a0daeb5aa017b058cc33a2b2f2ff0aa14960e4f->leave($__internal_74bd08d9d5a410f3abb8828c2a0daeb5aa017b058cc33a2b2f2ff0aa14960e4f_prof);

        
        $__internal_3b0a760a0eab38b8132b39b645cd8fa0fb3731405c32ccc824d7eb9707e29e06->leave($__internal_3b0a760a0eab38b8132b39b645cd8fa0fb3731405c32ccc824d7eb9707e29e06_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c43fd80d6dcc2c58e71b8f74f8ab9959bb7c08db8a13d29f6e8c777f93f55ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c43fd80d6dcc2c58e71b8f74f8ab9959bb7c08db8a13d29f6e8c777f93f55ff->enter($__internal_8c43fd80d6dcc2c58e71b8f74f8ab9959bb7c08db8a13d29f6e8c777f93f55ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ecbf81801d6bb4d3b70ddaeb51b41a141a32966d4aca8ae04696c2c4524b63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecbf81801d6bb4d3b70ddaeb51b41a141a32966d4aca8ae04696c2c4524b63b->enter($__internal_0ecbf81801d6bb4d3b70ddaeb51b41a141a32966d4aca8ae04696c2c4524b63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_0ecbf81801d6bb4d3b70ddaeb51b41a141a32966d4aca8ae04696c2c4524b63b->leave($__internal_0ecbf81801d6bb4d3b70ddaeb51b41a141a32966d4aca8ae04696c2c4524b63b_prof);

        
        $__internal_8c43fd80d6dcc2c58e71b8f74f8ab9959bb7c08db8a13d29f6e8c777f93f55ff->leave($__internal_8c43fd80d6dcc2c58e71b8f74f8ab9959bb7c08db8a13d29f6e8c777f93f55ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
