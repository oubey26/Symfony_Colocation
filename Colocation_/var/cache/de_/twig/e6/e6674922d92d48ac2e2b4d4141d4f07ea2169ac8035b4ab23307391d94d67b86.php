<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_551d6cb1e7f6dea1dec3204a02fe2c6e8f0042e9020ba76b77bfcb59f22ee25d extends Twig_Template
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
        $__internal_d8c79cfdd8239f269ae3702c7c52dfcbb1ddaa6feff8dcff7a32a3baa8f761f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c79cfdd8239f269ae3702c7c52dfcbb1ddaa6feff8dcff7a32a3baa8f761f2->enter($__internal_d8c79cfdd8239f269ae3702c7c52dfcbb1ddaa6feff8dcff7a32a3baa8f761f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_b0a45da40c374b09df738aeaa865258ef889446f19cf515f6c2477eaff198888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a45da40c374b09df738aeaa865258ef889446f19cf515f6c2477eaff198888->enter($__internal_b0a45da40c374b09df738aeaa865258ef889446f19cf515f6c2477eaff198888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_d8c79cfdd8239f269ae3702c7c52dfcbb1ddaa6feff8dcff7a32a3baa8f761f2->leave($__internal_d8c79cfdd8239f269ae3702c7c52dfcbb1ddaa6feff8dcff7a32a3baa8f761f2_prof);

        
        $__internal_b0a45da40c374b09df738aeaa865258ef889446f19cf515f6c2477eaff198888->leave($__internal_b0a45da40c374b09df738aeaa865258ef889446f19cf515f6c2477eaff198888_prof);

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
