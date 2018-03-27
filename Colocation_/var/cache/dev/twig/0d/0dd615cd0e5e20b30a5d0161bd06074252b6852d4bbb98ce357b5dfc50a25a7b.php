<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_fd7e1869e39a82730c38b1df87786acb7a658c7651567ee5187ef7cc7ab9d8ec extends Twig_Template
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
        $__internal_e389ca5435a8c6414b64f0c1728237339b405526221855cc27086e4d27aeb98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e389ca5435a8c6414b64f0c1728237339b405526221855cc27086e4d27aeb98f->enter($__internal_e389ca5435a8c6414b64f0c1728237339b405526221855cc27086e4d27aeb98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_7a5c925d74d82e542fbcbd6bc391e791525be5d632b436add7df455f80e3a0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5c925d74d82e542fbcbd6bc391e791525be5d632b436add7df455f80e3a0ba->enter($__internal_7a5c925d74d82e542fbcbd6bc391e791525be5d632b436add7df455f80e3a0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_e389ca5435a8c6414b64f0c1728237339b405526221855cc27086e4d27aeb98f->leave($__internal_e389ca5435a8c6414b64f0c1728237339b405526221855cc27086e4d27aeb98f_prof);

        
        $__internal_7a5c925d74d82e542fbcbd6bc391e791525be5d632b436add7df455f80e3a0ba->leave($__internal_7a5c925d74d82e542fbcbd6bc391e791525be5d632b436add7df455f80e3a0ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
