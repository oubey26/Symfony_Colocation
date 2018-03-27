<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_bfb410e3ab9be20f749353037f1d31001e3dac0cc611c935c7fcb4f5ab1e296f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_0845f86af91526206202aefb903b092196e5a8cb3bd4bee3e7bfe68ae0ed00ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0845f86af91526206202aefb903b092196e5a8cb3bd4bee3e7bfe68ae0ed00ab->enter($__internal_0845f86af91526206202aefb903b092196e5a8cb3bd4bee3e7bfe68ae0ed00ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_17dfa0b3f7530f5e40351db6c6b11dffce24c59dac943fa98e915ad9b5927d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17dfa0b3f7530f5e40351db6c6b11dffce24c59dac943fa98e915ad9b5927d38->enter($__internal_17dfa0b3f7530f5e40351db6c6b11dffce24c59dac943fa98e915ad9b5927d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0845f86af91526206202aefb903b092196e5a8cb3bd4bee3e7bfe68ae0ed00ab->leave($__internal_0845f86af91526206202aefb903b092196e5a8cb3bd4bee3e7bfe68ae0ed00ab_prof);

        
        $__internal_17dfa0b3f7530f5e40351db6c6b11dffce24c59dac943fa98e915ad9b5927d38->leave($__internal_17dfa0b3f7530f5e40351db6c6b11dffce24c59dac943fa98e915ad9b5927d38_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_301c6c2929a16c2fc3f295405f53b784c48220fcd671b55e750287815b778725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301c6c2929a16c2fc3f295405f53b784c48220fcd671b55e750287815b778725->enter($__internal_301c6c2929a16c2fc3f295405f53b784c48220fcd671b55e750287815b778725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4e4ebd510a4d73a75bce312ec1bc5b9e584d80db56c1ae5c986ba597fee17b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4ebd510a4d73a75bce312ec1bc5b9e584d80db56c1ae5c986ba597fee17b7a->enter($__internal_4e4ebd510a4d73a75bce312ec1bc5b9e584d80db56c1ae5c986ba597fee17b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4e4ebd510a4d73a75bce312ec1bc5b9e584d80db56c1ae5c986ba597fee17b7a->leave($__internal_4e4ebd510a4d73a75bce312ec1bc5b9e584d80db56c1ae5c986ba597fee17b7a_prof);

        
        $__internal_301c6c2929a16c2fc3f295405f53b784c48220fcd671b55e750287815b778725->leave($__internal_301c6c2929a16c2fc3f295405f53b784c48220fcd671b55e750287815b778725_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
