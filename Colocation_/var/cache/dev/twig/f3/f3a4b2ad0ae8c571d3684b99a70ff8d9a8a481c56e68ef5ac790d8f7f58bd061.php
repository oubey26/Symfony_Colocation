<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_06192de97e31ea39f41e444bdb1953e4f10fd4251fc4aede283448f58fbf8390 extends Twig_Template
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
        $__internal_9303a8e93440db6f52208062ac5e47fa0fb5e520ab12dfcb8294d6af43c3b51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9303a8e93440db6f52208062ac5e47fa0fb5e520ab12dfcb8294d6af43c3b51e->enter($__internal_9303a8e93440db6f52208062ac5e47fa0fb5e520ab12dfcb8294d6af43c3b51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_6eac9a8818401a48b46ed66a68bac78700b9a8dae2438b886bde2db27f2f46ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eac9a8818401a48b46ed66a68bac78700b9a8dae2438b886bde2db27f2f46ce->enter($__internal_6eac9a8818401a48b46ed66a68bac78700b9a8dae2438b886bde2db27f2f46ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9303a8e93440db6f52208062ac5e47fa0fb5e520ab12dfcb8294d6af43c3b51e->leave($__internal_9303a8e93440db6f52208062ac5e47fa0fb5e520ab12dfcb8294d6af43c3b51e_prof);

        
        $__internal_6eac9a8818401a48b46ed66a68bac78700b9a8dae2438b886bde2db27f2f46ce->leave($__internal_6eac9a8818401a48b46ed66a68bac78700b9a8dae2438b886bde2db27f2f46ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99e844aa3392193938d45293b95ea765f6d2757a596e171744bcbd37d78c6380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e844aa3392193938d45293b95ea765f6d2757a596e171744bcbd37d78c6380->enter($__internal_99e844aa3392193938d45293b95ea765f6d2757a596e171744bcbd37d78c6380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8cb680df5b8849597cb591babee2b551ffdc14a7ef0ee25f078801e44abb6f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb680df5b8849597cb591babee2b551ffdc14a7ef0ee25f078801e44abb6f96->enter($__internal_8cb680df5b8849597cb591babee2b551ffdc14a7ef0ee25f078801e44abb6f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8cb680df5b8849597cb591babee2b551ffdc14a7ef0ee25f078801e44abb6f96->leave($__internal_8cb680df5b8849597cb591babee2b551ffdc14a7ef0ee25f078801e44abb6f96_prof);

        
        $__internal_99e844aa3392193938d45293b95ea765f6d2757a596e171744bcbd37d78c6380->leave($__internal_99e844aa3392193938d45293b95ea765f6d2757a596e171744bcbd37d78c6380_prof);

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
