<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7f7145e84de78ff5b51f960387d575b43a9b675f2cbb3c766ae66efcc874a46f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_6a0a6500802e1c8406f4f027e8e1958cfde1285fb97113c5f1c8c374d889c6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0a6500802e1c8406f4f027e8e1958cfde1285fb97113c5f1c8c374d889c6b9->enter($__internal_6a0a6500802e1c8406f4f027e8e1958cfde1285fb97113c5f1c8c374d889c6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_8258e06d19027a25f5d50802f856398c955503b07d19f2b85e09a854689ad746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8258e06d19027a25f5d50802f856398c955503b07d19f2b85e09a854689ad746->enter($__internal_8258e06d19027a25f5d50802f856398c955503b07d19f2b85e09a854689ad746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a0a6500802e1c8406f4f027e8e1958cfde1285fb97113c5f1c8c374d889c6b9->leave($__internal_6a0a6500802e1c8406f4f027e8e1958cfde1285fb97113c5f1c8c374d889c6b9_prof);

        
        $__internal_8258e06d19027a25f5d50802f856398c955503b07d19f2b85e09a854689ad746->leave($__internal_8258e06d19027a25f5d50802f856398c955503b07d19f2b85e09a854689ad746_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e76d5ac58ed25f6563814c8cc901c2ff8ffe473aab56a7a470933e4bf56a4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e76d5ac58ed25f6563814c8cc901c2ff8ffe473aab56a7a470933e4bf56a4ab->enter($__internal_1e76d5ac58ed25f6563814c8cc901c2ff8ffe473aab56a7a470933e4bf56a4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1948ac70c01f06c6ef9c7f37054daecd7a3ad0f433eddbc5295a8d6703242b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1948ac70c01f06c6ef9c7f37054daecd7a3ad0f433eddbc5295a8d6703242b88->enter($__internal_1948ac70c01f06c6ef9c7f37054daecd7a3ad0f433eddbc5295a8d6703242b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_1948ac70c01f06c6ef9c7f37054daecd7a3ad0f433eddbc5295a8d6703242b88->leave($__internal_1948ac70c01f06c6ef9c7f37054daecd7a3ad0f433eddbc5295a8d6703242b88_prof);

        
        $__internal_1e76d5ac58ed25f6563814c8cc901c2ff8ffe473aab56a7a470933e4bf56a4ab->leave($__internal_1e76d5ac58ed25f6563814c8cc901c2ff8ffe473aab56a7a470933e4bf56a4ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
