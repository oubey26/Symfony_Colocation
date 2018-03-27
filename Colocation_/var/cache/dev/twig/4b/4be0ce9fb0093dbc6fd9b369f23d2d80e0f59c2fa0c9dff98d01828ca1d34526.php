<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_cf68317afe2e8b1474283c8e1b7e6a38a28f932863e3de2a716243c37c39bcde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_08d50088edefc010dfec780945c50bd32dff6cc9fac1c0d12d6bdb4eb085010d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d50088edefc010dfec780945c50bd32dff6cc9fac1c0d12d6bdb4eb085010d->enter($__internal_08d50088edefc010dfec780945c50bd32dff6cc9fac1c0d12d6bdb4eb085010d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_a55187effcc5e18d4362793d49c6a3286261623834f013742728f1d7d15536a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55187effcc5e18d4362793d49c6a3286261623834f013742728f1d7d15536a7->enter($__internal_a55187effcc5e18d4362793d49c6a3286261623834f013742728f1d7d15536a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08d50088edefc010dfec780945c50bd32dff6cc9fac1c0d12d6bdb4eb085010d->leave($__internal_08d50088edefc010dfec780945c50bd32dff6cc9fac1c0d12d6bdb4eb085010d_prof);

        
        $__internal_a55187effcc5e18d4362793d49c6a3286261623834f013742728f1d7d15536a7->leave($__internal_a55187effcc5e18d4362793d49c6a3286261623834f013742728f1d7d15536a7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c185f831f66a9af5343c48caa20fbdfe5133ed4ffb88c84f69ef0fef1ef31d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c185f831f66a9af5343c48caa20fbdfe5133ed4ffb88c84f69ef0fef1ef31d90->enter($__internal_c185f831f66a9af5343c48caa20fbdfe5133ed4ffb88c84f69ef0fef1ef31d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_273cb78f4ab1d17bd7d099bbd4aca96093b637f053113f98e78b2c9d76ff3d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273cb78f4ab1d17bd7d099bbd4aca96093b637f053113f98e78b2c9d76ff3d40->enter($__internal_273cb78f4ab1d17bd7d099bbd4aca96093b637f053113f98e78b2c9d76ff3d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_273cb78f4ab1d17bd7d099bbd4aca96093b637f053113f98e78b2c9d76ff3d40->leave($__internal_273cb78f4ab1d17bd7d099bbd4aca96093b637f053113f98e78b2c9d76ff3d40_prof);

        
        $__internal_c185f831f66a9af5343c48caa20fbdfe5133ed4ffb88c84f69ef0fef1ef31d90->leave($__internal_c185f831f66a9af5343c48caa20fbdfe5133ed4ffb88c84f69ef0fef1ef31d90_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
