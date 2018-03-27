<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_583d16bb767c506853a0b7f8d0ce6e25f25de9ff02ae7f1ee57158430e92ee2c extends Twig_Template
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
        $__internal_1262c4457171db884324667ca3e54de3818c89a39203c4e5fbdc96de1fb193f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1262c4457171db884324667ca3e54de3818c89a39203c4e5fbdc96de1fb193f2->enter($__internal_1262c4457171db884324667ca3e54de3818c89a39203c4e5fbdc96de1fb193f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_24a5f136c98bb6e1a33ce328b82c45b86dbf16c3c2a1b061f8cc807b0c3efa95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a5f136c98bb6e1a33ce328b82c45b86dbf16c3c2a1b061f8cc807b0c3efa95->enter($__internal_24a5f136c98bb6e1a33ce328b82c45b86dbf16c3c2a1b061f8cc807b0c3efa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1262c4457171db884324667ca3e54de3818c89a39203c4e5fbdc96de1fb193f2->leave($__internal_1262c4457171db884324667ca3e54de3818c89a39203c4e5fbdc96de1fb193f2_prof);

        
        $__internal_24a5f136c98bb6e1a33ce328b82c45b86dbf16c3c2a1b061f8cc807b0c3efa95->leave($__internal_24a5f136c98bb6e1a33ce328b82c45b86dbf16c3c2a1b061f8cc807b0c3efa95_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4689572e8147de29610abbc8a17c8358749e0d1b0940b056daa08a642af6fd8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4689572e8147de29610abbc8a17c8358749e0d1b0940b056daa08a642af6fd8c->enter($__internal_4689572e8147de29610abbc8a17c8358749e0d1b0940b056daa08a642af6fd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e357531ae1e8ea047d9583ed8b4b3d1a9696695fe1cae02666b3cf6389665839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e357531ae1e8ea047d9583ed8b4b3d1a9696695fe1cae02666b3cf6389665839->enter($__internal_e357531ae1e8ea047d9583ed8b4b3d1a9696695fe1cae02666b3cf6389665839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e357531ae1e8ea047d9583ed8b4b3d1a9696695fe1cae02666b3cf6389665839->leave($__internal_e357531ae1e8ea047d9583ed8b4b3d1a9696695fe1cae02666b3cf6389665839_prof);

        
        $__internal_4689572e8147de29610abbc8a17c8358749e0d1b0940b056daa08a642af6fd8c->leave($__internal_4689572e8147de29610abbc8a17c8358749e0d1b0940b056daa08a642af6fd8c_prof);

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
