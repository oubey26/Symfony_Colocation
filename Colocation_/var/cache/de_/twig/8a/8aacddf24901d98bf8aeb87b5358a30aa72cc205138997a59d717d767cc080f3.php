<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f63333b10f42f18e1834aa8a7e61f08dd7c44bfe79770172fbdf4dc63dbb3089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a282ef72cea7bb341f4f2f12223165c13dc15936cff029177ae86921736ace3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a282ef72cea7bb341f4f2f12223165c13dc15936cff029177ae86921736ace3d->enter($__internal_a282ef72cea7bb341f4f2f12223165c13dc15936cff029177ae86921736ace3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_9e35ed3a17b2c248ac5e09c82fb6cd6d63a5c216dde8379c79c6cd59e32c7528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e35ed3a17b2c248ac5e09c82fb6cd6d63a5c216dde8379c79c6cd59e32c7528->enter($__internal_9e35ed3a17b2c248ac5e09c82fb6cd6d63a5c216dde8379c79c6cd59e32c7528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a282ef72cea7bb341f4f2f12223165c13dc15936cff029177ae86921736ace3d->leave($__internal_a282ef72cea7bb341f4f2f12223165c13dc15936cff029177ae86921736ace3d_prof);

        
        $__internal_9e35ed3a17b2c248ac5e09c82fb6cd6d63a5c216dde8379c79c6cd59e32c7528->leave($__internal_9e35ed3a17b2c248ac5e09c82fb6cd6d63a5c216dde8379c79c6cd59e32c7528_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff09ca7938379c1bf07e6fd3383a2e1eaca29615401f92136f38c75735fa632a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff09ca7938379c1bf07e6fd3383a2e1eaca29615401f92136f38c75735fa632a->enter($__internal_ff09ca7938379c1bf07e6fd3383a2e1eaca29615401f92136f38c75735fa632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c195682160dfcf9b3326a0c4f8faa7bf4203fb0b922907f9cc12b96789a9601d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c195682160dfcf9b3326a0c4f8faa7bf4203fb0b922907f9cc12b96789a9601d->enter($__internal_c195682160dfcf9b3326a0c4f8faa7bf4203fb0b922907f9cc12b96789a9601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c195682160dfcf9b3326a0c4f8faa7bf4203fb0b922907f9cc12b96789a9601d->leave($__internal_c195682160dfcf9b3326a0c4f8faa7bf4203fb0b922907f9cc12b96789a9601d_prof);

        
        $__internal_ff09ca7938379c1bf07e6fd3383a2e1eaca29615401f92136f38c75735fa632a->leave($__internal_ff09ca7938379c1bf07e6fd3383a2e1eaca29615401f92136f38c75735fa632a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
