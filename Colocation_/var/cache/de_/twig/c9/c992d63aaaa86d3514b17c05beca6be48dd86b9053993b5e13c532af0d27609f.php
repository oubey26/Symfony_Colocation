<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_1924dfdbc7c170806af3fa4a62fe25e2dba1eb6ba3fd5859de2a1598daaa4458 extends Twig_Template
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
        $__internal_0d4c70327c5e6e0e884e58fdd26ab7e01548f2c5dde0e17639cd81fbe23d82da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4c70327c5e6e0e884e58fdd26ab7e01548f2c5dde0e17639cd81fbe23d82da->enter($__internal_0d4c70327c5e6e0e884e58fdd26ab7e01548f2c5dde0e17639cd81fbe23d82da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_f789967bdb4dfadb6e6f758e44dafff7240fd96a06d766bc46f53fc0253227e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f789967bdb4dfadb6e6f758e44dafff7240fd96a06d766bc46f53fc0253227e5->enter($__internal_f789967bdb4dfadb6e6f758e44dafff7240fd96a06d766bc46f53fc0253227e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_0d4c70327c5e6e0e884e58fdd26ab7e01548f2c5dde0e17639cd81fbe23d82da->leave($__internal_0d4c70327c5e6e0e884e58fdd26ab7e01548f2c5dde0e17639cd81fbe23d82da_prof);

        
        $__internal_f789967bdb4dfadb6e6f758e44dafff7240fd96a06d766bc46f53fc0253227e5->leave($__internal_f789967bdb4dfadb6e6f758e44dafff7240fd96a06d766bc46f53fc0253227e5_prof);

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
