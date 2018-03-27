<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_2b8c863e9de2f3decb7d77c7b923766ac3f1146b753480f6c8fe7ee78d269361 extends Twig_Template
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
        $__internal_f9fd027bd7a91407489b1c381284ca6830e13b6f950f59a57ac1ff5545116f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9fd027bd7a91407489b1c381284ca6830e13b6f950f59a57ac1ff5545116f14->enter($__internal_f9fd027bd7a91407489b1c381284ca6830e13b6f950f59a57ac1ff5545116f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_6d2b281d84f1725b68cf8239d623961bd514e768219c90595c875417d5717683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2b281d84f1725b68cf8239d623961bd514e768219c90595c875417d5717683->enter($__internal_6d2b281d84f1725b68cf8239d623961bd514e768219c90595c875417d5717683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_f9fd027bd7a91407489b1c381284ca6830e13b6f950f59a57ac1ff5545116f14->leave($__internal_f9fd027bd7a91407489b1c381284ca6830e13b6f950f59a57ac1ff5545116f14_prof);

        
        $__internal_6d2b281d84f1725b68cf8239d623961bd514e768219c90595c875417d5717683->leave($__internal_6d2b281d84f1725b68cf8239d623961bd514e768219c90595c875417d5717683_prof);

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
