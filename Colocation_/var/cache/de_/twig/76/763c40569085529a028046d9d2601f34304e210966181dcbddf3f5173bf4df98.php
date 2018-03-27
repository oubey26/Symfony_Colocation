<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_c4f44b64e443e1e973b3ea156f0feaf310d66138e2a9a1c8162acf7933d1bee3 extends Twig_Template
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
        $__internal_dfe10acf19d0ffe8e5099daf09ef934feeb32cd0ee3a1fe98caeca4f5661c19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe10acf19d0ffe8e5099daf09ef934feeb32cd0ee3a1fe98caeca4f5661c19b->enter($__internal_dfe10acf19d0ffe8e5099daf09ef934feeb32cd0ee3a1fe98caeca4f5661c19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_f8cb9bf18a2fd670e535e16ccf2c1ece08f312eb151da6645e757186110fd481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8cb9bf18a2fd670e535e16ccf2c1ece08f312eb151da6645e757186110fd481->enter($__internal_f8cb9bf18a2fd670e535e16ccf2c1ece08f312eb151da6645e757186110fd481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_dfe10acf19d0ffe8e5099daf09ef934feeb32cd0ee3a1fe98caeca4f5661c19b->leave($__internal_dfe10acf19d0ffe8e5099daf09ef934feeb32cd0ee3a1fe98caeca4f5661c19b_prof);

        
        $__internal_f8cb9bf18a2fd670e535e16ccf2c1ece08f312eb151da6645e757186110fd481->leave($__internal_f8cb9bf18a2fd670e535e16ccf2c1ece08f312eb151da6645e757186110fd481_prof);

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
