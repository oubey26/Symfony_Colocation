<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_dc6886bd9f7baac6f95fa72f8b9dd359b3a82340161671a32a1bc0216af55593 extends Twig_Template
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
        $__internal_ff12ed3b1435e693715d103219930ce21742031782751541bcf6a3478a743e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff12ed3b1435e693715d103219930ce21742031782751541bcf6a3478a743e44->enter($__internal_ff12ed3b1435e693715d103219930ce21742031782751541bcf6a3478a743e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_0a35ca7645c3abd9f7a9b1fab58a68a2602ebd106395bd6ef67bfb7a8b155982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a35ca7645c3abd9f7a9b1fab58a68a2602ebd106395bd6ef67bfb7a8b155982->enter($__internal_0a35ca7645c3abd9f7a9b1fab58a68a2602ebd106395bd6ef67bfb7a8b155982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_ff12ed3b1435e693715d103219930ce21742031782751541bcf6a3478a743e44->leave($__internal_ff12ed3b1435e693715d103219930ce21742031782751541bcf6a3478a743e44_prof);

        
        $__internal_0a35ca7645c3abd9f7a9b1fab58a68a2602ebd106395bd6ef67bfb7a8b155982->leave($__internal_0a35ca7645c3abd9f7a9b1fab58a68a2602ebd106395bd6ef67bfb7a8b155982_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
