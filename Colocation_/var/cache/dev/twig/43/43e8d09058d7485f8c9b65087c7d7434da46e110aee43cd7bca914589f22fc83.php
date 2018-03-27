<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_d5c1ee7b229163876506e8a7961dd1823e245236603d09c294f780b66dce404c extends Twig_Template
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
        $__internal_a267629de35f2b0915ac28ffe2adf0d8b0f135ee982778c3b5f1a5d9544e3371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a267629de35f2b0915ac28ffe2adf0d8b0f135ee982778c3b5f1a5d9544e3371->enter($__internal_a267629de35f2b0915ac28ffe2adf0d8b0f135ee982778c3b5f1a5d9544e3371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_fa7a927b881baf0e05c5fc42234014321d10eda1ef21c2bc0b6827a98953fd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7a927b881baf0e05c5fc42234014321d10eda1ef21c2bc0b6827a98953fd8a->enter($__internal_fa7a927b881baf0e05c5fc42234014321d10eda1ef21c2bc0b6827a98953fd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_a267629de35f2b0915ac28ffe2adf0d8b0f135ee982778c3b5f1a5d9544e3371->leave($__internal_a267629de35f2b0915ac28ffe2adf0d8b0f135ee982778c3b5f1a5d9544e3371_prof);

        
        $__internal_fa7a927b881baf0e05c5fc42234014321d10eda1ef21c2bc0b6827a98953fd8a->leave($__internal_fa7a927b881baf0e05c5fc42234014321d10eda1ef21c2bc0b6827a98953fd8a_prof);

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
