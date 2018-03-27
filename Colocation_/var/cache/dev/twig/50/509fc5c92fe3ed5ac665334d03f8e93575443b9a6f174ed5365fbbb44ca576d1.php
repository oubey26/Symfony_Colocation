<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_a4b5c56684d563d00c76f5a33ad06aa0e596fcbab93f1c6705e47522e45c42e4 extends Twig_Template
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
        $__internal_1a772120b17518bf14a3516e908c4200a09c430e78c5bf50579c63ce54cd771d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a772120b17518bf14a3516e908c4200a09c430e78c5bf50579c63ce54cd771d->enter($__internal_1a772120b17518bf14a3516e908c4200a09c430e78c5bf50579c63ce54cd771d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_fc398051d67412ff812d3f5d7b97d670ec44f43ca927e5970d104f6e3cd37b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc398051d67412ff812d3f5d7b97d670ec44f43ca927e5970d104f6e3cd37b90->enter($__internal_fc398051d67412ff812d3f5d7b97d670ec44f43ca927e5970d104f6e3cd37b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_1a772120b17518bf14a3516e908c4200a09c430e78c5bf50579c63ce54cd771d->leave($__internal_1a772120b17518bf14a3516e908c4200a09c430e78c5bf50579c63ce54cd771d_prof);

        
        $__internal_fc398051d67412ff812d3f5d7b97d670ec44f43ca927e5970d104f6e3cd37b90->leave($__internal_fc398051d67412ff812d3f5d7b97d670ec44f43ca927e5970d104f6e3cd37b90_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
