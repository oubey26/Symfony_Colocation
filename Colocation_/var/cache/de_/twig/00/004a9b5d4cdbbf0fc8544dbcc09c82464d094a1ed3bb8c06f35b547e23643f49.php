<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_55d54f3a3f4677591bca638a0f71677bd6403b8fc8df1847f3a30e850b3405b1 extends Twig_Template
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
        $__internal_938630f56bbf94ec1ee31f844f2346d3dbc353e55c99f67c118be20360b16b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938630f56bbf94ec1ee31f844f2346d3dbc353e55c99f67c118be20360b16b65->enter($__internal_938630f56bbf94ec1ee31f844f2346d3dbc353e55c99f67c118be20360b16b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_fa7f0ba10aec00be225b8b96c910389e267f900472d54ead0f363b6d48531675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7f0ba10aec00be225b8b96c910389e267f900472d54ead0f363b6d48531675->enter($__internal_fa7f0ba10aec00be225b8b96c910389e267f900472d54ead0f363b6d48531675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_938630f56bbf94ec1ee31f844f2346d3dbc353e55c99f67c118be20360b16b65->leave($__internal_938630f56bbf94ec1ee31f844f2346d3dbc353e55c99f67c118be20360b16b65_prof);

        
        $__internal_fa7f0ba10aec00be225b8b96c910389e267f900472d54ead0f363b6d48531675->leave($__internal_fa7f0ba10aec00be225b8b96c910389e267f900472d54ead0f363b6d48531675_prof);

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
