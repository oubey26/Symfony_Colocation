<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_a9ee8fee961023fba4c84f86aea218cc13f23e12d029c1a5d2001500096daba0 extends Twig_Template
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
        $__internal_66170189d04c0bd001d12caea6654a8e995dcf69f72aed197e12ae63b899a70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66170189d04c0bd001d12caea6654a8e995dcf69f72aed197e12ae63b899a70b->enter($__internal_66170189d04c0bd001d12caea6654a8e995dcf69f72aed197e12ae63b899a70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_7ce03e4cb99cdb8a1aff2bc70297fae557627bb8ad7932ba31c235b04c9baee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce03e4cb99cdb8a1aff2bc70297fae557627bb8ad7932ba31c235b04c9baee7->enter($__internal_7ce03e4cb99cdb8a1aff2bc70297fae557627bb8ad7932ba31c235b04c9baee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_66170189d04c0bd001d12caea6654a8e995dcf69f72aed197e12ae63b899a70b->leave($__internal_66170189d04c0bd001d12caea6654a8e995dcf69f72aed197e12ae63b899a70b_prof);

        
        $__internal_7ce03e4cb99cdb8a1aff2bc70297fae557627bb8ad7932ba31c235b04c9baee7->leave($__internal_7ce03e4cb99cdb8a1aff2bc70297fae557627bb8ad7932ba31c235b04c9baee7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
