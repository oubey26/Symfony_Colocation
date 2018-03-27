<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_31dbb08c8ab108f94956a028ea537a9d8af84bc3c27a37e0df900dd3c855528e extends Twig_Template
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
        $__internal_b782d4564452a18dcf3957404e518b320b1b85617ffd5747f38dd1662f45b0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b782d4564452a18dcf3957404e518b320b1b85617ffd5747f38dd1662f45b0ff->enter($__internal_b782d4564452a18dcf3957404e518b320b1b85617ffd5747f38dd1662f45b0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8d5ef07183da3f0bfb0fe55b61718a6a66f0640b21960220a8be91ce287b04c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5ef07183da3f0bfb0fe55b61718a6a66f0640b21960220a8be91ce287b04c4->enter($__internal_8d5ef07183da3f0bfb0fe55b61718a6a66f0640b21960220a8be91ce287b04c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b782d4564452a18dcf3957404e518b320b1b85617ffd5747f38dd1662f45b0ff->leave($__internal_b782d4564452a18dcf3957404e518b320b1b85617ffd5747f38dd1662f45b0ff_prof);

        
        $__internal_8d5ef07183da3f0bfb0fe55b61718a6a66f0640b21960220a8be91ce287b04c4->leave($__internal_8d5ef07183da3f0bfb0fe55b61718a6a66f0640b21960220a8be91ce287b04c4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d854ae43b81660bb98f1d74049b2f4af893172292ad0e9d862cf2b5dc2836e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d854ae43b81660bb98f1d74049b2f4af893172292ad0e9d862cf2b5dc2836e82->enter($__internal_d854ae43b81660bb98f1d74049b2f4af893172292ad0e9d862cf2b5dc2836e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d1e6aa58d30da623d47312b0ea2733579b736fac1da5d69a311daf61a11828c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1e6aa58d30da623d47312b0ea2733579b736fac1da5d69a311daf61a11828c->enter($__internal_4d1e6aa58d30da623d47312b0ea2733579b736fac1da5d69a311daf61a11828c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4d1e6aa58d30da623d47312b0ea2733579b736fac1da5d69a311daf61a11828c->leave($__internal_4d1e6aa58d30da623d47312b0ea2733579b736fac1da5d69a311daf61a11828c_prof);

        
        $__internal_d854ae43b81660bb98f1d74049b2f4af893172292ad0e9d862cf2b5dc2836e82->leave($__internal_d854ae43b81660bb98f1d74049b2f4af893172292ad0e9d862cf2b5dc2836e82_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
