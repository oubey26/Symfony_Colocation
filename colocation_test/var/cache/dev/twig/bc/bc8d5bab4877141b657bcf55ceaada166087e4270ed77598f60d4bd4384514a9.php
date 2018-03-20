<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f62c71e87c55f41fe3c6ec4959c528b58e4b2f56a3b90d256ff412af821b4d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_fb16a8181b2efe3b93e59d2a5807cfce7581387565946b387572182e622e5cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb16a8181b2efe3b93e59d2a5807cfce7581387565946b387572182e622e5cc8->enter($__internal_fb16a8181b2efe3b93e59d2a5807cfce7581387565946b387572182e622e5cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_de363325085b794f036a328a84bf40c890f685e363df7aa97bb9e38eb4a54bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de363325085b794f036a328a84bf40c890f685e363df7aa97bb9e38eb4a54bbc->enter($__internal_de363325085b794f036a328a84bf40c890f685e363df7aa97bb9e38eb4a54bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb16a8181b2efe3b93e59d2a5807cfce7581387565946b387572182e622e5cc8->leave($__internal_fb16a8181b2efe3b93e59d2a5807cfce7581387565946b387572182e622e5cc8_prof);

        
        $__internal_de363325085b794f036a328a84bf40c890f685e363df7aa97bb9e38eb4a54bbc->leave($__internal_de363325085b794f036a328a84bf40c890f685e363df7aa97bb9e38eb4a54bbc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99dd4395bf89749d0446ea311acd9c87c916d7417327d2771a0c8ffae618633b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99dd4395bf89749d0446ea311acd9c87c916d7417327d2771a0c8ffae618633b->enter($__internal_99dd4395bf89749d0446ea311acd9c87c916d7417327d2771a0c8ffae618633b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_67624f6526c67f3b56dc7fd1f5c4adbd1567ff9f953df36187f24785680f47ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67624f6526c67f3b56dc7fd1f5c4adbd1567ff9f953df36187f24785680f47ac->enter($__internal_67624f6526c67f3b56dc7fd1f5c4adbd1567ff9f953df36187f24785680f47ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_67624f6526c67f3b56dc7fd1f5c4adbd1567ff9f953df36187f24785680f47ac->leave($__internal_67624f6526c67f3b56dc7fd1f5c4adbd1567ff9f953df36187f24785680f47ac_prof);

        
        $__internal_99dd4395bf89749d0446ea311acd9c87c916d7417327d2771a0c8ffae618633b->leave($__internal_99dd4395bf89749d0446ea311acd9c87c916d7417327d2771a0c8ffae618633b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\colocation_test\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
