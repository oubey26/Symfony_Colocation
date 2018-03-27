<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_b13f207e8cc4ff3c838dff1ebdc5985369439791d1c09385611ea312b0605336 extends Twig_Template
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
        $__internal_77672aba5c14a198b59ffb309070b2433764f9ad5647533cdf7b8eb10958695a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77672aba5c14a198b59ffb309070b2433764f9ad5647533cdf7b8eb10958695a->enter($__internal_77672aba5c14a198b59ffb309070b2433764f9ad5647533cdf7b8eb10958695a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_efce339d4e0c86f95fd27d73a6e33f974f6b41ccec2d1a0d0b7082798f85eae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efce339d4e0c86f95fd27d73a6e33f974f6b41ccec2d1a0d0b7082798f85eae0->enter($__internal_efce339d4e0c86f95fd27d73a6e33f974f6b41ccec2d1a0d0b7082798f85eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_77672aba5c14a198b59ffb309070b2433764f9ad5647533cdf7b8eb10958695a->leave($__internal_77672aba5c14a198b59ffb309070b2433764f9ad5647533cdf7b8eb10958695a_prof);

        
        $__internal_efce339d4e0c86f95fd27d73a6e33f974f6b41ccec2d1a0d0b7082798f85eae0->leave($__internal_efce339d4e0c86f95fd27d73a6e33f974f6b41ccec2d1a0d0b7082798f85eae0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
