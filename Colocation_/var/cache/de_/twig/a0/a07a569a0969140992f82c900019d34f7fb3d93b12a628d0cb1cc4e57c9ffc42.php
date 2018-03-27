<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_9a471b96e312a635ca0f6506b08b0434b0788edd3a95c491779c9b4178567217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_3abeaee4d361db302595d6bc4489c7aa0fb2a572bcc911078217195a4745d538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abeaee4d361db302595d6bc4489c7aa0fb2a572bcc911078217195a4745d538->enter($__internal_3abeaee4d361db302595d6bc4489c7aa0fb2a572bcc911078217195a4745d538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_298138c9b6d78dbb07e91b66098b5051bfb8e8cfc9898bf0fd2d297566f23923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298138c9b6d78dbb07e91b66098b5051bfb8e8cfc9898bf0fd2d297566f23923->enter($__internal_298138c9b6d78dbb07e91b66098b5051bfb8e8cfc9898bf0fd2d297566f23923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3abeaee4d361db302595d6bc4489c7aa0fb2a572bcc911078217195a4745d538->leave($__internal_3abeaee4d361db302595d6bc4489c7aa0fb2a572bcc911078217195a4745d538_prof);

        
        $__internal_298138c9b6d78dbb07e91b66098b5051bfb8e8cfc9898bf0fd2d297566f23923->leave($__internal_298138c9b6d78dbb07e91b66098b5051bfb8e8cfc9898bf0fd2d297566f23923_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26c9e678b3dafe73dd81c3a6928b81f7004ec1a502001b2cfe1ba4aa4eaaa951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c9e678b3dafe73dd81c3a6928b81f7004ec1a502001b2cfe1ba4aa4eaaa951->enter($__internal_26c9e678b3dafe73dd81c3a6928b81f7004ec1a502001b2cfe1ba4aa4eaaa951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dc941eb59ed4958d1786c43162b66d6dc7794da4b999a286a4d33183535cac95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc941eb59ed4958d1786c43162b66d6dc7794da4b999a286a4d33183535cac95->enter($__internal_dc941eb59ed4958d1786c43162b66d6dc7794da4b999a286a4d33183535cac95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dc941eb59ed4958d1786c43162b66d6dc7794da4b999a286a4d33183535cac95->leave($__internal_dc941eb59ed4958d1786c43162b66d6dc7794da4b999a286a4d33183535cac95_prof);

        
        $__internal_26c9e678b3dafe73dd81c3a6928b81f7004ec1a502001b2cfe1ba4aa4eaaa951->leave($__internal_26c9e678b3dafe73dd81c3a6928b81f7004ec1a502001b2cfe1ba4aa4eaaa951_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
