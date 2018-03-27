<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_607f8f74676f2ffc4d7bb0b31d2b20e792842b4f8ea6f486b6522573aec48e14 extends Twig_Template
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
        $__internal_756050eaf1b989bfc58589a1bd33089af27e2396b13c9932d7b3d740397810cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756050eaf1b989bfc58589a1bd33089af27e2396b13c9932d7b3d740397810cf->enter($__internal_756050eaf1b989bfc58589a1bd33089af27e2396b13c9932d7b3d740397810cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_67b9763a1a3cd989a081b6ce28e0163fc69409cda9abe756b3d9f05f5adcb3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b9763a1a3cd989a081b6ce28e0163fc69409cda9abe756b3d9f05f5adcb3a8->enter($__internal_67b9763a1a3cd989a081b6ce28e0163fc69409cda9abe756b3d9f05f5adcb3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_756050eaf1b989bfc58589a1bd33089af27e2396b13c9932d7b3d740397810cf->leave($__internal_756050eaf1b989bfc58589a1bd33089af27e2396b13c9932d7b3d740397810cf_prof);

        
        $__internal_67b9763a1a3cd989a081b6ce28e0163fc69409cda9abe756b3d9f05f5adcb3a8->leave($__internal_67b9763a1a3cd989a081b6ce28e0163fc69409cda9abe756b3d9f05f5adcb3a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
