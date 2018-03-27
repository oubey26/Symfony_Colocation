<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_e0aeb47ba4c4939f1de2f59bb562bdd3a3476cd05d9c0b649c3560ea7e086235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_bfc54228a68bf6e2230e693d11ba6b558d19708aeb6426e988e4a739c645d775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc54228a68bf6e2230e693d11ba6b558d19708aeb6426e988e4a739c645d775->enter($__internal_bfc54228a68bf6e2230e693d11ba6b558d19708aeb6426e988e4a739c645d775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_7004b70247324a57e108eb8ae0f147c983fc494c14303a7f7f31244a2541b649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7004b70247324a57e108eb8ae0f147c983fc494c14303a7f7f31244a2541b649->enter($__internal_7004b70247324a57e108eb8ae0f147c983fc494c14303a7f7f31244a2541b649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc54228a68bf6e2230e693d11ba6b558d19708aeb6426e988e4a739c645d775->leave($__internal_bfc54228a68bf6e2230e693d11ba6b558d19708aeb6426e988e4a739c645d775_prof);

        
        $__internal_7004b70247324a57e108eb8ae0f147c983fc494c14303a7f7f31244a2541b649->leave($__internal_7004b70247324a57e108eb8ae0f147c983fc494c14303a7f7f31244a2541b649_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b407e3502991476b5630ac9ebfd26a4748d73417f8ebee040c7e7c0d0f58968f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b407e3502991476b5630ac9ebfd26a4748d73417f8ebee040c7e7c0d0f58968f->enter($__internal_b407e3502991476b5630ac9ebfd26a4748d73417f8ebee040c7e7c0d0f58968f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4b341f42897c1b81e8f638e4c4f1dbd3ac203cf8bec22fc91e9213472388262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b341f42897c1b81e8f638e4c4f1dbd3ac203cf8bec22fc91e9213472388262->enter($__internal_a4b341f42897c1b81e8f638e4c4f1dbd3ac203cf8bec22fc91e9213472388262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_a4b341f42897c1b81e8f638e4c4f1dbd3ac203cf8bec22fc91e9213472388262->leave($__internal_a4b341f42897c1b81e8f638e4c4f1dbd3ac203cf8bec22fc91e9213472388262_prof);

        
        $__internal_b407e3502991476b5630ac9ebfd26a4748d73417f8ebee040c7e7c0d0f58968f->leave($__internal_b407e3502991476b5630ac9ebfd26a4748d73417f8ebee040c7e7c0d0f58968f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
