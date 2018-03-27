<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_2f04baa27400d5944d4872259e24b65d13b80e716bf178725c046f25aa805304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cb18e28e57815555440cb1043ebaf27e24d5626800ed10d8f42c14d6166da2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb18e28e57815555440cb1043ebaf27e24d5626800ed10d8f42c14d6166da2d->enter($__internal_0cb18e28e57815555440cb1043ebaf27e24d5626800ed10d8f42c14d6166da2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_deb46576f505bf1740a63936ffbe9a1098cde2531cf7ec6ab8aea5b195e1e53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb46576f505bf1740a63936ffbe9a1098cde2531cf7ec6ab8aea5b195e1e53a->enter($__internal_deb46576f505bf1740a63936ffbe9a1098cde2531cf7ec6ab8aea5b195e1e53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0cb18e28e57815555440cb1043ebaf27e24d5626800ed10d8f42c14d6166da2d->leave($__internal_0cb18e28e57815555440cb1043ebaf27e24d5626800ed10d8f42c14d6166da2d_prof);

        
        $__internal_deb46576f505bf1740a63936ffbe9a1098cde2531cf7ec6ab8aea5b195e1e53a->leave($__internal_deb46576f505bf1740a63936ffbe9a1098cde2531cf7ec6ab8aea5b195e1e53a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
