<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_b76c72d591248f5e4628b46cfef22e1f0ec80279a1f5689ea23457181a7d80e9 extends Twig_Template
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
        $__internal_61b11597c2c02bfc2ca58a382f36d3e9ee816c160fe4b732ac5a2b96c1463191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b11597c2c02bfc2ca58a382f36d3e9ee816c160fe4b732ac5a2b96c1463191->enter($__internal_61b11597c2c02bfc2ca58a382f36d3e9ee816c160fe4b732ac5a2b96c1463191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_257db9ec3a5c6a13cce2c651df7a8294f656f5891c7e36ce48ea4a670043e135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257db9ec3a5c6a13cce2c651df7a8294f656f5891c7e36ce48ea4a670043e135->enter($__internal_257db9ec3a5c6a13cce2c651df7a8294f656f5891c7e36ce48ea4a670043e135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_61b11597c2c02bfc2ca58a382f36d3e9ee816c160fe4b732ac5a2b96c1463191->leave($__internal_61b11597c2c02bfc2ca58a382f36d3e9ee816c160fe4b732ac5a2b96c1463191_prof);

        
        $__internal_257db9ec3a5c6a13cce2c651df7a8294f656f5891c7e36ce48ea4a670043e135->leave($__internal_257db9ec3a5c6a13cce2c651df7a8294f656f5891c7e36ce48ea4a670043e135_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
