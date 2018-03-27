<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_660942b128d9e03dfd18048c7d7c5964530b0790ed521244a87fd89c379ace93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_d7d43e8d5c1b00a8af831c24ecf979ba7a1aacac0135db3163234d0d70fd9066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d43e8d5c1b00a8af831c24ecf979ba7a1aacac0135db3163234d0d70fd9066->enter($__internal_d7d43e8d5c1b00a8af831c24ecf979ba7a1aacac0135db3163234d0d70fd9066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a11761311a661ceffc6efb211f4477be4d07b5290b23267da5ee80755840553b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11761311a661ceffc6efb211f4477be4d07b5290b23267da5ee80755840553b->enter($__internal_a11761311a661ceffc6efb211f4477be4d07b5290b23267da5ee80755840553b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d43e8d5c1b00a8af831c24ecf979ba7a1aacac0135db3163234d0d70fd9066->leave($__internal_d7d43e8d5c1b00a8af831c24ecf979ba7a1aacac0135db3163234d0d70fd9066_prof);

        
        $__internal_a11761311a661ceffc6efb211f4477be4d07b5290b23267da5ee80755840553b->leave($__internal_a11761311a661ceffc6efb211f4477be4d07b5290b23267da5ee80755840553b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee54590ca890b120b1c932074ed574a175ff72d95e8a824b65a831099700f94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee54590ca890b120b1c932074ed574a175ff72d95e8a824b65a831099700f94c->enter($__internal_ee54590ca890b120b1c932074ed574a175ff72d95e8a824b65a831099700f94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_067fa793beee3aa510f3513af52e9da4b77d314e7f3692b65f791bdbab85e2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067fa793beee3aa510f3513af52e9da4b77d314e7f3692b65f791bdbab85e2eb->enter($__internal_067fa793beee3aa510f3513af52e9da4b77d314e7f3692b65f791bdbab85e2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_067fa793beee3aa510f3513af52e9da4b77d314e7f3692b65f791bdbab85e2eb->leave($__internal_067fa793beee3aa510f3513af52e9da4b77d314e7f3692b65f791bdbab85e2eb_prof);

        
        $__internal_ee54590ca890b120b1c932074ed574a175ff72d95e8a824b65a831099700f94c->leave($__internal_ee54590ca890b120b1c932074ed574a175ff72d95e8a824b65a831099700f94c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
