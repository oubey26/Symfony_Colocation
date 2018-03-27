<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_41ad9008855e7da89744adfb5e4b24c2cd676df02c833b8ed84261dbda9a46dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bffae67dc80bc30d017bbceafe18d233f29c66c723915c293f0bfb59cc968e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bffae67dc80bc30d017bbceafe18d233f29c66c723915c293f0bfb59cc968e4e->enter($__internal_bffae67dc80bc30d017bbceafe18d233f29c66c723915c293f0bfb59cc968e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_327b14609d2fb9873c9ee5efab1de6070c2fe0e3cff16540485f630bd40aecde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327b14609d2fb9873c9ee5efab1de6070c2fe0e3cff16540485f630bd40aecde->enter($__internal_327b14609d2fb9873c9ee5efab1de6070c2fe0e3cff16540485f630bd40aecde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bffae67dc80bc30d017bbceafe18d233f29c66c723915c293f0bfb59cc968e4e->leave($__internal_bffae67dc80bc30d017bbceafe18d233f29c66c723915c293f0bfb59cc968e4e_prof);

        
        $__internal_327b14609d2fb9873c9ee5efab1de6070c2fe0e3cff16540485f630bd40aecde->leave($__internal_327b14609d2fb9873c9ee5efab1de6070c2fe0e3cff16540485f630bd40aecde_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ea05bf1ef640d6e3a3d0b24996907a1690fcb23c165cc8e4c2560f86ae4f885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea05bf1ef640d6e3a3d0b24996907a1690fcb23c165cc8e4c2560f86ae4f885->enter($__internal_2ea05bf1ef640d6e3a3d0b24996907a1690fcb23c165cc8e4c2560f86ae4f885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee6cddabb1e2e7fd1784834efa0c40a9b7ad8d74a9e4fb6e315e7f9e0106aca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6cddabb1e2e7fd1784834efa0c40a9b7ad8d74a9e4fb6e315e7f9e0106aca1->enter($__internal_ee6cddabb1e2e7fd1784834efa0c40a9b7ad8d74a9e4fb6e315e7f9e0106aca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ee6cddabb1e2e7fd1784834efa0c40a9b7ad8d74a9e4fb6e315e7f9e0106aca1->leave($__internal_ee6cddabb1e2e7fd1784834efa0c40a9b7ad8d74a9e4fb6e315e7f9e0106aca1_prof);

        
        $__internal_2ea05bf1ef640d6e3a3d0b24996907a1690fcb23c165cc8e4c2560f86ae4f885->leave($__internal_2ea05bf1ef640d6e3a3d0b24996907a1690fcb23c165cc8e4c2560f86ae4f885_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
