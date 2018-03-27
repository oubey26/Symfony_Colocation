<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a607f1f29ad4bb1c8c9e66c49a7c0450a2c8cd95c1efd2da6fb1ff48105236c2 extends Twig_Template
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
        $__internal_508ca6a71cca8b69d714238b728b67f59034ab159c88b1636dd3597a48bdbf53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_508ca6a71cca8b69d714238b728b67f59034ab159c88b1636dd3597a48bdbf53->enter($__internal_508ca6a71cca8b69d714238b728b67f59034ab159c88b1636dd3597a48bdbf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_badaeb56e14722c070e9508ea836b1f6bdea1e1c9c9401ada945ec9d21692900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badaeb56e14722c070e9508ea836b1f6bdea1e1c9c9401ada945ec9d21692900->enter($__internal_badaeb56e14722c070e9508ea836b1f6bdea1e1c9c9401ada945ec9d21692900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_508ca6a71cca8b69d714238b728b67f59034ab159c88b1636dd3597a48bdbf53->leave($__internal_508ca6a71cca8b69d714238b728b67f59034ab159c88b1636dd3597a48bdbf53_prof);

        
        $__internal_badaeb56e14722c070e9508ea836b1f6bdea1e1c9c9401ada945ec9d21692900->leave($__internal_badaeb56e14722c070e9508ea836b1f6bdea1e1c9c9401ada945ec9d21692900_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
