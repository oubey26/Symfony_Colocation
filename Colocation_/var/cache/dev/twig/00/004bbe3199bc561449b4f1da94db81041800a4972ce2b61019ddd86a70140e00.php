<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_cd4e5b655b48b68b308f9c655d0f56b524a5b94f97e9e649a1c2f3f870011eb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_4823912ffa52d58f9297610e8dba9d3c37c7ccedbc530db7cda30aa8e1184fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4823912ffa52d58f9297610e8dba9d3c37c7ccedbc530db7cda30aa8e1184fc0->enter($__internal_4823912ffa52d58f9297610e8dba9d3c37c7ccedbc530db7cda30aa8e1184fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_0174232bf3ef90857cba5f6245ba31a00e700063d9189b7b411a0db8366f30ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0174232bf3ef90857cba5f6245ba31a00e700063d9189b7b411a0db8366f30ab->enter($__internal_0174232bf3ef90857cba5f6245ba31a00e700063d9189b7b411a0db8366f30ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4823912ffa52d58f9297610e8dba9d3c37c7ccedbc530db7cda30aa8e1184fc0->leave($__internal_4823912ffa52d58f9297610e8dba9d3c37c7ccedbc530db7cda30aa8e1184fc0_prof);

        
        $__internal_0174232bf3ef90857cba5f6245ba31a00e700063d9189b7b411a0db8366f30ab->leave($__internal_0174232bf3ef90857cba5f6245ba31a00e700063d9189b7b411a0db8366f30ab_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf25c57d3f04e441b46597af9b98a1730ed25b3e5a017d6337c2ba77372274b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf25c57d3f04e441b46597af9b98a1730ed25b3e5a017d6337c2ba77372274b5->enter($__internal_bf25c57d3f04e441b46597af9b98a1730ed25b3e5a017d6337c2ba77372274b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50d4977abdcda5a4427e544d1a50ed3227e456f84b87403d28a54af5e0c4ccab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d4977abdcda5a4427e544d1a50ed3227e456f84b87403d28a54af5e0c4ccab->enter($__internal_50d4977abdcda5a4427e544d1a50ed3227e456f84b87403d28a54af5e0c4ccab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_50d4977abdcda5a4427e544d1a50ed3227e456f84b87403d28a54af5e0c4ccab->leave($__internal_50d4977abdcda5a4427e544d1a50ed3227e456f84b87403d28a54af5e0c4ccab_prof);

        
        $__internal_bf25c57d3f04e441b46597af9b98a1730ed25b3e5a017d6337c2ba77372274b5->leave($__internal_bf25c57d3f04e441b46597af9b98a1730ed25b3e5a017d6337c2ba77372274b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
