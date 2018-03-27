<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_1d5896036a2792f926c1604dbe0704ee69360ff38148c31630d62f6a653cb8b2 extends Twig_Template
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
        $__internal_362adb03976fac9147263a6c0f842f701ea7cc1565dc9bb61f7cee0e5a4c7666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362adb03976fac9147263a6c0f842f701ea7cc1565dc9bb61f7cee0e5a4c7666->enter($__internal_362adb03976fac9147263a6c0f842f701ea7cc1565dc9bb61f7cee0e5a4c7666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_1ebe1d1c5f041de7e2f8f7e39a99b81cd7cc435f3e9332a6e2db7ac57e8dcfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebe1d1c5f041de7e2f8f7e39a99b81cd7cc435f3e9332a6e2db7ac57e8dcfa4->enter($__internal_1ebe1d1c5f041de7e2f8f7e39a99b81cd7cc435f3e9332a6e2db7ac57e8dcfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_362adb03976fac9147263a6c0f842f701ea7cc1565dc9bb61f7cee0e5a4c7666->leave($__internal_362adb03976fac9147263a6c0f842f701ea7cc1565dc9bb61f7cee0e5a4c7666_prof);

        
        $__internal_1ebe1d1c5f041de7e2f8f7e39a99b81cd7cc435f3e9332a6e2db7ac57e8dcfa4->leave($__internal_1ebe1d1c5f041de7e2f8f7e39a99b81cd7cc435f3e9332a6e2db7ac57e8dcfa4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e81d47a04153b0a15a42914088f448a9fcc6d5ccb8ebd145dfea3baa105c5610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81d47a04153b0a15a42914088f448a9fcc6d5ccb8ebd145dfea3baa105c5610->enter($__internal_e81d47a04153b0a15a42914088f448a9fcc6d5ccb8ebd145dfea3baa105c5610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b35b20c83c53fb756172bd4b28fb30841adaefe63548a0f296c821344ba363c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b35b20c83c53fb756172bd4b28fb30841adaefe63548a0f296c821344ba363c->enter($__internal_6b35b20c83c53fb756172bd4b28fb30841adaefe63548a0f296c821344ba363c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6b35b20c83c53fb756172bd4b28fb30841adaefe63548a0f296c821344ba363c->leave($__internal_6b35b20c83c53fb756172bd4b28fb30841adaefe63548a0f296c821344ba363c_prof);

        
        $__internal_e81d47a04153b0a15a42914088f448a9fcc6d5ccb8ebd145dfea3baa105c5610->leave($__internal_e81d47a04153b0a15a42914088f448a9fcc6d5ccb8ebd145dfea3baa105c5610_prof);

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
