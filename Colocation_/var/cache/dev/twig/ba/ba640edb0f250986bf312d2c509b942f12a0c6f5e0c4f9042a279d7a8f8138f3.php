<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_ddbed2ddf787c7c486f1800f6563eb1ce5014bcd53c22fea215388dccf7d88af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4c348576bcf56dab79cc207c2b3aed981b9a66ae6ecc80fc9bd3aef14790f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c348576bcf56dab79cc207c2b3aed981b9a66ae6ecc80fc9bd3aef14790f74->enter($__internal_c4c348576bcf56dab79cc207c2b3aed981b9a66ae6ecc80fc9bd3aef14790f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_1fd121fcb3b8919598dda042482b2a2b9b4f6c4383f1b277057ace15e009fefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd121fcb3b8919598dda042482b2a2b9b4f6c4383f1b277057ace15e009fefc->enter($__internal_1fd121fcb3b8919598dda042482b2a2b9b4f6c4383f1b277057ace15e009fefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_c4c348576bcf56dab79cc207c2b3aed981b9a66ae6ecc80fc9bd3aef14790f74->leave($__internal_c4c348576bcf56dab79cc207c2b3aed981b9a66ae6ecc80fc9bd3aef14790f74_prof);

        
        $__internal_1fd121fcb3b8919598dda042482b2a2b9b4f6c4383f1b277057ace15e009fefc->leave($__internal_1fd121fcb3b8919598dda042482b2a2b9b4f6c4383f1b277057ace15e009fefc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
